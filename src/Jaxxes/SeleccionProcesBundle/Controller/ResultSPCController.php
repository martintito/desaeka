<?php

namespace Jaxxes\SeleccionProcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;

use Jaxxes\SeleccionProcesBundle\Entity\ResultSPC;
use Jaxxes\SeleccionProcesBundle\Form\ResultSPCType;

use Knp\Bundle\SnappyBundle\KnpSnappyBundle;
use Symfony\Component\HttpFoundation\Response;

class ResultSPCController extends Controller
{
    
    public function indexAction($id_spc)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('SeleccionProcesBundle:ResultSPC')->findOneBy( array('selectionProcessCandidate' => $id_spc ) );

        if (!$entity) {
            
            return $this->redirect($this->generateUrl('sp_candidato_result_new', array(
            'id_spc' => $id_spc
            )));
        }

        //return $this->redirect($this->generateUrl('sp_candidato_result_edit', array(
        //    'id' => $entity->getId()
        //    )));
        return $this->redirect($this->generateUrl('sp_candidato_result_show', array('id' => $entity->getId())));
    }
    
    
    public function newAction($id_spc)
    {
        $em = $this->getDoctrine()->getManager();
        $entitySelectionProcessCandidate = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id_spc);
        
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($id_spc);
        
        $entity = new ResultSPC();
        $entity->setSelectionProcessCandidate($entitySelectionProcessCandidate);
        
        $form   = $this->createForm(new ResultSPCType(), $entity);
        
        //Se carga el listado de preguntas virtuales
        $virtualInterviewSelectionProcessCandidateList = $em->getRepository('VirtualInterviewBundle:VirtualInterviewSelectionProcessCandidate')
                                            ->findBy(array('SelectionProcessCandidate' => $id_spc),
                                                     array('id' => 'ASC')
                                                    );
                                               
        //Se carga informacio acerca del perfil de rol
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')
                                            ->findOneBy(array(
                                                        'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId()
                                                        ));
                                                        
                                                        
        // ********************************************************
        //*** Se carga variables de datos generales
        $entitySectionSelectedByResumeDG = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                            ->findOneBy(array(
                                                        'codprint' => 1
                                                        ));
                                                        
        $entitySectionbySelectionProcessDG = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                            ->findOneBy(array(
                                                        'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                        'sectionSelectedByResume' => $entitySectionSelectedByResumeDG->getId()
                                                        ));
                                                        
        if (!$entitySectionbySelectionProcessDG) {
            $validarDatosPersonales = false;
            
            $DGnombreApellido = '';
            $DGdni = '';
            $DGFecNac = '';
            $DGEstCiv = '';
            
            $validarED_Mae = false;
            $ED_Mae_CentroEstudio = '';
            $ED_Mae_Especialidad = '';
            
            $validarED_Unv  = false;
            $ED_Unv_CentroEstudio = '';
            $ED_Unv_Especialidad = '';
            
            $validarED_Tec  = false;
            $ED_Tec_CentroEstudio = '';
            $ED_Tec_Especialidad = '';
            
            $validarED_Esc  = false;
            $ED_Esc_CentroEstudio = '';
            $ED_Esc_Especialidad = '';
            
            $validarED_Otr  = false;
            $ED_Otr_CentroEstudio = '';
            $ED_Otr_Especialidad = '';
            
            $validarIL_UlTra  = false;
            $IL_UlTra_Nombre = '';
            $IL_UlTra_CarDes = '';
            $IL_UlTra_Motivo = '';
            
            $validarIL_UlTra2  = false;
            $IL_UlTra2_Nombre = '';
            $IL_UlTra2_CarDes = '';
            $IL_UlTra2_Motivo = '';
            
            $validarIL_UlTra3  = false;
            $IL_UlTra3_Nombre = '';
            $IL_UlTra3_CarDes = '';
            $IL_UlTra3_Motivo = '';
            
            $validarIL_ER = false;
            $IL_ER_UltRem = '';
            $IL_ER_NumSuel = '';
            $IL_ER_Bono = '';
            $IL_ER_Utilida = '';
            $IL_ER_Variable = '';
            $IL_ER_Expectativa = '';
        }
        else{
            $validarDatosPersonales = true;
            $entityNivelSelectedbyResumeDG = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeDG->getId()
                                                            ));

            $entityNivelbySelectionProcessDG = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessDG->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));


            //nombre
            $entityQuestionbySectionDgNombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgNombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgNombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgNombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgNombre->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateDgNombre) {
                $DGnombreApellido = '';
            }
            else{
                $DGnombreApellido = $entityResumePrivateCandidateDgNombre->getAnswer();
            }
            
            // DNI
            $entityQuestionbySectionDgDNI = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgDNI = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgDNI->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgDNI = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgDNI->getId()
                                                            ));
                                                            
            
            
            if (!$entityResumePrivateCandidateDgDNI) {
                $DGdni = '';
            }
            else{
                $DGdni = $entityResumePrivateCandidateDgDNI->getAnswer();
            }
                                                            
            // fecha nacimiento
            $entityQuestionbySectionDgFecNac = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgFecNac = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgFecNac->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgFecNac = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgFecNac->getId()
                                                            ));
                                                            
                                                            
            if (!$entityResumePrivateCandidateDgFecNac) {
                $DGFecNac = '';
            }
            else{
                $DGFecNac = $entityResumePrivateCandidateDgFecNac->getAnswer();
            }
            
            // estado civil
            $entityQuestionbySectionDgEstCiv = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgEstCiv = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgEstCiv->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgEstCiv = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgEstCiv->getId()
                                                            ));

            if (!$entityResumePrivateCandidateDgEstCiv) {
                $DGEstCiv = '';
            }
            else{
                $DGEstCiv = $entityResumePrivateCandidateDgEstCiv->getAnswer();
            }
            
            //*** Se carga variables de educacion
            $entitySectionSelectedByResumeED = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2
                                                            ));
                                                            
            $entitySectionbySelectionProcessED = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                                ->findOneBy(array(
                                                            'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));
                                                            
            //Maestria
            $entityNivelSelectedbyResumeEDMae = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDMae = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));
                                                            
            //Maestria - centro estudios
            $entityQuestionbySectionEDMaeCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeCenEst->getId()
                                                            ));
                                                            
            
            
            $validarED_Mae = true;
            if (!$entityResumePrivateCandidateEDMaeCenEst) {
                $validarED_Mae = false;
                $ED_Mae_CentroEstudio = '';
            }
            else{
                $ED_Mae_CentroEstudio = $entityResumePrivateCandidateEDMaeCenEst->getAnswer();
                
                if ($ED_Mae_CentroEstudio == '') {
                    $validarED_Mae = false;
                }
                else{
                    $validarED_Mae = true;
                }
            }
            
            //Maestria - Especialidad
            $entityQuestionbySectionEDMaeEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDMaeEsp) {
                $ED_Mae_Especialidad = '';
            }
            else{
                $ED_Mae_Especialidad = $entityResumePrivateCandidateEDMaeEsp->getAnswer();
            }
            
            //Maestria 2
            $entityNivelSelectedbyResumeEDMae = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 6,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDMae = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));
                                                            
            //Maestria 2 - centro estudios
            $entityQuestionbySectionEDMaeCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeCenEst->getId()
                                                            ));
                                                            
            
            
            $validarED_Mae2 = true;
            if (!$entityResumePrivateCandidateEDMaeCenEst) {
                $validarED_Mae2 = false;
                $ED_Mae_CentroEstudio2 = '';
            }
            else{
                $ED_Mae_CentroEstudio2 = $entityResumePrivateCandidateEDMaeCenEst->getAnswer();
                
                if ($ED_Mae_CentroEstudio2 == '') {
                    $validarED_Mae2 = false;
                }
                else{
                    $validarED_Mae2 = true;
                }
            }
            
            //Maestria - Especialidad
            $entityQuestionbySectionEDMaeEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDMaeEsp) {
                $ED_Mae_Especialidad2 = '';
            }
            else{
                $ED_Mae_Especialidad2 = $entityResumePrivateCandidateEDMaeEsp->getAnswer();
            }
            
            
            //Universidad
            $entityNivelSelectedbyResumeEDUnv = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDUnv = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));
                                                            
            //Universidad - centro estudios
            $entityQuestionbySectionEDUnvCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvCenEst->getId()
                                                            ));

            $validarED_Unv = true;
            if (!$entityResumePrivateCandidateEDUnvCenEst) {
                $validarED_Unv = false;
                $ED_Unv_CentroEstudio = '';
            }
            else{
                $ED_Unv_CentroEstudio = $entityResumePrivateCandidateEDUnvCenEst->getAnswer();
                if ($ED_Unv_CentroEstudio == '') {
                    $validarED_Unv = false;
                }
                else{
                    $validarED_Unv = true;
                }
            }
            
            //Universidad - Especialidad
            $entityQuestionbySectionEDUnvEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDUnvEsp) {
                $ED_Unv_Especialidad = '';
            }
            else{
                $ED_Unv_Especialidad = $entityResumePrivateCandidateEDUnvEsp->getAnswer();
            }
            
            
            //Universidad 2
            $entityNivelSelectedbyResumeEDUnv = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 7,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDUnv = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));
                                                            
            //Universidad 2 - centro estudios
            $entityQuestionbySectionEDUnvCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvCenEst->getId()
                                                            ));

            $validarED_Unv2 = true;
            if (!$entityResumePrivateCandidateEDUnvCenEst) {
                $validarED_Unv2 = false;
                $ED_Unv_CentroEstudio2 = '';
            }
            else{
                $ED_Unv_CentroEstudio2 = $entityResumePrivateCandidateEDUnvCenEst->getAnswer();
                if ($ED_Unv_CentroEstudio2 == '') {
                    $validarED_Unv2 = false;
                }
                else{
                    $validarED_Unv2 = true;
                }
            }
            
            //Universidad - Especialidad
            $entityQuestionbySectionEDUnvEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDUnvEsp) {
                $ED_Unv_Especialidad2 = '';
            }
            else{
                $ED_Unv_Especialidad2 = $entityResumePrivateCandidateEDUnvEsp->getAnswer();
            }
            
            
            //Técnico
            $entityNivelSelectedbyResumeEDTec = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDTec = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));
                                                            
            //Técnico - centro estudios
            $entityQuestionbySectionEDTecCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDTecCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDTec->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDTecCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDTecCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDTecCenEst->getId()
                                                            ));

            $validarED_Tec = true;
            if (!$entityResumePrivateCandidateEDTecCenEst) {
                $validarED_Tec = false;
                $ED_Tec_CentroEstudio = '';
            }
            else{
                $ED_Tec_CentroEstudio = $entityResumePrivateCandidateEDTecCenEst->getAnswer();
                if ($ED_Tec_CentroEstudio == '') {
                    $validarED_Tec = false;
                }
                else{
                    $validarED_Tec = true;
                }
            }
            
            //Técnico - Especialidad
            $entityQuestionbySectionEDTecEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDTecEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDTec->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDTecEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDTecEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDTecEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDTecEsp) {
                $ED_Tec_Especialidad = '';
            }
            else{
                $ED_Tec_Especialidad = $entityResumePrivateCandidateEDTecEsp->getAnswer();
            }
            
            
            
            //Escolar
            $entityNivelSelectedbyResumeEDEsc = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDEsc = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));
                                                            
            //Escolar - centro estudios
            $entityQuestionbySectionEDEscCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDEscCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDEsc->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDEscCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDEscCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDEscCenEst->getId()
                                                            ));

            $validarED_Esc = true;
            if (!$entityResumePrivateCandidateEDEscCenEst) {
                $validarED_Esc = false;
                $ED_Esc_CentroEstudio = '';
            }
            else{
                $ED_Esc_CentroEstudio = $entityResumePrivateCandidateEDEscCenEst->getAnswer();
                if ($ED_Esc_CentroEstudio == '') {
                    $validarED_Esc = false;
                }
                else{
                    $validarED_Esc = true;
                }
            }
            
            //Escolar - Especialidad
            $entityQuestionbySectionEDEscEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDEscEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDEsc->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDEscEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDEscEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDEscEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDEscEsp) {
                $ED_Esc_Especialidad = '';
            }
            else{
                $ED_Esc_Especialidad = $entityResumePrivateCandidateEDEscEsp->getAnswer();
            }
            
            
            //Otros Estudios 
            $entityNivelSelectedbyResumeEDOtr = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 5,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDOtr = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));
                                                            
            //Otros Estudios - centro estudios
            $entityQuestionbySectionEDOtrCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDOtrCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDOtr->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDOtrCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDOtrCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDOtrCenEst->getId()
                                                            ));

            $validarED_Otr = true;
            if (!$entityResumePrivateCandidateEDOtrCenEst) {
                $validarED_Otr = false;
                $ED_Otr_CentroEstudio = '';
            }
            else{
                $ED_Otr_CentroEstudio = $entityResumePrivateCandidateEDOtrCenEst->getAnswer();
                if ($ED_Otr_CentroEstudio == '') {
                    $validarED_Otr = false;
                }
                else{
                    $validarED_Otr = true;
                }
            }
            
            //Otros Estudios - Especialidad
            $entityQuestionbySectionEDOtrEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDOtrEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDOtr->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDOtrEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDOtrEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDOtrEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDOtrEsp) {
                $ED_Otr_Especialidad = '';
            }
            else{
                $ED_Otr_Especialidad = $entityResumePrivateCandidateEDOtrEsp->getAnswer();
            }
            
            
            
            
            //*** Se carga variables de Informe Laboral
            $entitySectionSelectedByResumeIL = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3
                                                            ));
                                                            
            $entitySectionbySelectionProcessIL = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                                ->findOneBy(array(
                                                            'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));
            
            //Ultimo Trabajo
            $entityNivelSelectedbyResumeIL_UlTra = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));
            
            
            //Ultimo Trabajo - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra = true;
            if (!$entityResumePrivateCandidateIL_UlTra_Nombre) {
                $validarIL_UlTra = false;
                $IL_UlTra_Nombre = '';
            }
            else{
                $IL_UlTra_Nombre = $entityResumePrivateCandidateIL_UlTra_Nombre->getAnswer();
                
                if ($IL_UlTra_Nombre == '') {
                    $validarIL_UlTra = false;
                }
                else{
                    $validarIL_UlTra = true;
                }
            }
            
            //Ultimo Trabajo - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra_CarDes) {
                $IL_UlTra_CarDes = '';
            }
            else{
                $IL_UlTra_CarDes = $entityResumePrivateCandidateIL_UlTra_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo - Motivo
            $entityQuestionbySectionIL_UlTra_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra_Motivo) {
                $IL_UlTra_Motivo = '';
            }
            else{
                $IL_UlTra_Motivo = $entityResumePrivateCandidateIL_UlTra_Motivo->getAnswer();
            }
            
            
            //Anterior Trabajo 2
            $entityNivelSelectedbyResumeIL_UlTra2 = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra2 = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));
            
            
            //Ultimo Trabajo 2 - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra2_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra2 = true;
            if (!$entityResumePrivateCandidateIL_UlTra2_Nombre) {
                $validarIL_UlTra2 = false;
                $IL_UlTra2_Nombre = '';
            }
            else{
                $IL_UlTra2_Nombre = $entityResumePrivateCandidateIL_UlTra2_Nombre->getAnswer();
                
                if ($IL_UlTra2_Nombre == '') {
                    $validarIL_UlTra2 = false;
                }
                else{
                    $validarIL_UlTra2 = true;
                }
            }
            
            //Ultimo Trabajo 2 - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra2_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra2_CarDes) {
                $IL_UlTra2_CarDes = '';
            }
            else{
                $IL_UlTra2_CarDes = $entityResumePrivateCandidateIL_UlTra2_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo 2 - Motivo
            $entityQuestionbySectionIL_UlTra2_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra2_Motivo) {
                $IL_UlTra2_Motivo = '';
            }
            else{
                $IL_UlTra2_Motivo = $entityResumePrivateCandidateIL_UlTra2_Motivo->getAnswer();
            }
            
            
            //Anterior Trabajo 3
            $entityNivelSelectedbyResumeIL_UlTra3 = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra3 = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));
            
            
            //Ultimo Trabajo 2 - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra3_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra3 = true;
            if (!$entityResumePrivateCandidateIL_UlTra3_Nombre) {
                $validarIL_UlTra3 = false;
                $IL_UlTra3_Nombre = '';
            }
            else{
                $IL_UlTra3_Nombre = $entityResumePrivateCandidateIL_UlTra3_Nombre->getAnswer();
                
                if ($IL_UlTra3_Nombre == '') {
                    $validarIL_UlTra3 = false;
                }
                else{
                    $validarIL_UlTra3 = true;
                }
            }
            
            //Ultimo Trabajo 2 - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra3_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra3_CarDes) {
                $IL_UlTra3_CarDes = '';
            }
            else{
                $IL_UlTra3_CarDes = $entityResumePrivateCandidateIL_UlTra3_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo 3 - Motivo
            $entityQuestionbySectionIL_UlTra3_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra3_Motivo) {
                $IL_UlTra3_Motivo = '';
            }
            else{
                $IL_UlTra3_Motivo = $entityResumePrivateCandidateIL_UlTra3_Motivo->getAnswer();
            }
            
            
            //Expectativas remunerativas
            $entityNivelSelectedbyResumeIL_ER = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_ER = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));
            
            
            //Expectativas remunerativas - Última o actual remuneración mensual bruta
            $entityQuestionbySectionIL_ER_UltRem = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_UltRem = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_UltRem->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_UltRem = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_UltRem->getId()
                                                            ));
                                                            
            
            
            $validarIL_ER = true;
            if (!$entityResumePrivateCandidateIL_ER_UltRem) {
                $validarIL_ER = false;
                $IL_ER_UltRem = '';
            }
            else{
                $IL_ER_UltRem = $entityResumePrivateCandidateIL_ER_UltRem->getAnswer();
                
                if ($IL_ER_UltRem == '') {
                    $validarIL_ER = false;
                }
                else{
                    $validarIL_ER = true;
                }
            }
            
            //Expectativas remunerativas - Número de sueldos recibidos al año
            $entityQuestionbySectionIL_ER_NumSuel = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_NumSuel = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_NumSuel->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_NumSuel = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_NumSuel->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_NumSuel) {
                $IL_ER_NumSuel = '';
            }
            else{
                $IL_ER_NumSuel = $entityResumePrivateCandidateIL_ER_NumSuel->getAnswer();
            }
            
            //Expectativas remunerativas - Bono
            $entityQuestionbySectionIL_ER_Bono = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Bono = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Bono->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Bono = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Bono->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Bono) {
                $IL_ER_Bono = '';
            }
            else{
                $IL_ER_Bono = $entityResumePrivateCandidateIL_ER_Bono->getAnswer();
            }
            
            //Expectativas remunerativas - Utilidades
            $entityQuestionbySectionIL_ER_Utilida = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Utilida = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Utilida->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Utilida = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Utilida->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Utilida) {
                $IL_ER_Utilida = '';
            }
            else{
                $IL_ER_Utilida = $entityResumePrivateCandidateIL_ER_Utilida->getAnswer();
            }
            
            //Expectativas remunerativas - Variable
            $entityQuestionbySectionIL_ER_Variable = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 5,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Variable = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Variable->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Variable = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Variable->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Variable) {
                $IL_ER_Variable = '';
            }
            else{
                $IL_ER_Variable = $entityResumePrivateCandidateIL_ER_Variable->getAnswer();
            }
            
            //Expectativas remunerativas - Expectativa
            $entityQuestionbySectionIL_ER_Expectativa = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 6,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Expectativa = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Expectativa->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Expectativa = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Expectativa->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Expectativa) {
                $IL_ER_Expectativa = '';
            }
            else{
                $IL_ER_Expectativa = $entityResumePrivateCandidateIL_ER_Expectativa->getAnswer();
            }
        
        
        }
        
        
        
        // FIN ********************************************************

        //Se carga informacion de l GATB
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')
                                            ->findOneBy(array(
                                                        'selectionProcessCandidate' => $id_spc
                                                        ));
        $validarGatbSP = true;
        if (!$entityGatbSP) {
            $validarGatbSP = false;
        }
        
        //Se carga informacion de 2 PMA
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')
                                            ->findOneBy(array(
                                                        'selectionProcessCandidate' => $id_spc
                                                        ));
        $validarPmaSP = true;
        if (!$entityPmaSP) {
            $validarPmaSP = false;
        }
        
        //Se carga informacion de 3 ICE
        $entityICESP = $em->getRepository('TestICESPBundle:ICESP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarICESP = true;
        if (!$entityICESP) {
            $validarICESP = false;
        }
        
        
        //Se carga informacion de 4 ESCUDO
        $entityEscudoSP = $em->getRepository('EscudoSPBundle:EscudoSP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarEscudoSP = true;
        if (!$entityEscudoSP) {
            $validarEscudoSP = false;
        }
        
        //Se carga informacion de 5 RAVEN
        $entityRavenSP = $em->getRepository('RavenSPBundle:RavenSP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarRavenSP = true;
        if (!$entityRavenSP) {
            $validarRavenSP = false;
        }

        return $this->render('SeleccionProcesBundle:ResultSPC:new.html.twig', array(
            'entity' => $entity,
            'entityRegisterDefinitionRol' => $entityRegisterDefinitionRol,
            
            'validarDatosPersonales' => $validarDatosPersonales,
            'DGnombreApellido' => $DGnombreApellido,
            'DGdni' => $DGdni,
            'DGFecNac' => $DGFecNac,
            'DGEstCiv' => $DGEstCiv,
            
            'validarED_Mae' => $validarED_Mae,
            'ED_Mae_CentroEstudio' => $ED_Mae_CentroEstudio,
            'ED_Mae_Especialidad' => $ED_Mae_Especialidad,
            
            'validarED_Mae2' => $validarED_Mae2,
            'ED_Mae_CentroEstudio2' => $ED_Mae_CentroEstudio2,
            'ED_Mae_Especialidad2' => $ED_Mae_Especialidad2,
            
            'validarED_Unv' => $validarED_Unv,
            'ED_Unv_CentroEstudio' => $ED_Unv_CentroEstudio,
            'ED_Unv_Especialidad' => $ED_Unv_Especialidad,
            
            'validarED_Unv2' => $validarED_Unv2,
            'ED_Unv_CentroEstudio2' => $ED_Unv_CentroEstudio2,
            'ED_Unv_Especialidad2' => $ED_Unv_Especialidad2,
            
            'validarED_Tec' => $validarED_Tec,
            'ED_Tec_CentroEstudio' => $ED_Tec_CentroEstudio,
            'ED_Tec_Especialidad' => $ED_Tec_Especialidad,
            
            'validarED_Esc' => $validarED_Esc,
            'ED_Esc_CentroEstudio' => $ED_Esc_CentroEstudio,
            'ED_Esc_Especialidad' => $ED_Esc_Especialidad,
            
            'validarED_Otr' => $validarED_Otr,
            'ED_Otr_CentroEstudio' => $ED_Otr_CentroEstudio,
            'ED_Otr_Especialidad' => $ED_Otr_Especialidad,
            
            'validarIL_UlTra' => $validarIL_UlTra,
            'IL_UlTra_Nombre' => $IL_UlTra_Nombre,
            'IL_UlTra_CarDes' => $IL_UlTra_CarDes,
            'IL_UlTra_Motivo' => $IL_UlTra_Motivo,
            
            'validarIL_UlTra2' => $validarIL_UlTra2,
            'IL_UlTra2_Nombre' => $IL_UlTra2_Nombre,
            'IL_UlTra2_CarDes' => $IL_UlTra2_CarDes,
            'IL_UlTra2_Motivo' => $IL_UlTra2_Motivo,
            
            'validarIL_UlTra3' => $validarIL_UlTra3,
            'IL_UlTra3_Nombre' => $IL_UlTra3_Nombre,
            'IL_UlTra3_CarDes' => $IL_UlTra3_CarDes,
            'IL_UlTra3_Motivo' => $IL_UlTra3_Motivo,
            
            'validarIL_ER' => $validarIL_ER,
            'IL_ER_UltRem' => $IL_ER_UltRem,
            'IL_ER_NumSuel' => $IL_ER_NumSuel,
            'IL_ER_Bono' => $IL_ER_Bono,
            'IL_ER_Utilida' => $IL_ER_Utilida,
            'IL_ER_Variable' => $IL_ER_Variable,
            'IL_ER_Expectativa' => $IL_ER_Expectativa,
            
            'validarGatbSP' => $validarGatbSP,
            'entityGatbSP' => $entityGatbSP,
            
            'validarPmaSP' => $validarPmaSP,
            'entityPmaSP' => $entityPmaSP,
            
            'validarICESP' => $validarICESP,
            'entityICESP' => $entityICESP,
            
            'validarEscudoSP' => $validarEscudoSP,
            'entityEscudoSP' => $entityEscudoSP,
            
            'validarRavenSP' => $validarRavenSP,
            'entityRavenSP' => $entityRavenSP,
            
            'listaVirtualInterSPC' => $virtualInterviewSelectionProcessCandidateList,
            
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Finds and displays a Selecction Process entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('SeleccionProcesBundle:ResultSPC')->find($id);
        
        $id_spc = $entity->getSelectionProcessCandidate()->getId();
        
        $entitySelectionProcessCandidate = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id_spc);
        
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($id_spc);
        
        //Se carga el listado de preguntas virtuales
        $virtualInterviewSelectionProcessCandidateList = $em->getRepository('VirtualInterviewBundle:VirtualInterviewSelectionProcessCandidate')
                                            ->findBy(array('SelectionProcessCandidate' => $id_spc),
                                                     array('id' => 'ASC')
                                                        );
                                               
        //Se carga informacio acerca del perfil de rol
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')
                                            ->findOneBy(array(
                                                        'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId()
                                                        ));
                                                        
                                                        
        // ********************************************************
        //*** Se carga variables de datos generales
        $entitySectionSelectedByResumeDG = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                            ->findOneBy(array(
                                                        'codprint' => 1
                                                        ));
                                                        
        $entitySectionbySelectionProcessDG = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                            ->findOneBy(array(
                                                        'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                        'sectionSelectedByResume' => $entitySectionSelectedByResumeDG->getId()
                                                        ));

        if (!$entitySectionbySelectionProcessDG) {
            $validarDatosPersonales = false;
            
            $DGnombreApellido = '';
            $DGdni = '';
            $DGFecNac = '';
            $DGEstCiv = '';
            
            $validarED_Mae = false;
            $ED_Mae_CentroEstudio = '';
            $ED_Mae_Especialidad = '';
            
            $validarED_Unv  = false;
            $ED_Unv_CentroEstudio = '';
            $ED_Unv_Especialidad = '';
            
            $validarED_Tec  = false;
            $ED_Tec_CentroEstudio = '';
            $ED_Tec_Especialidad = '';
            
            $validarED_Esc  = false;
            $ED_Esc_CentroEstudio = '';
            $ED_Esc_Especialidad = '';
            
            $validarED_Otr  = false;
            $ED_Otr_CentroEstudio = '';
            $ED_Otr_Especialidad = '';
            
            $validarIL_UlTra  = false;
            $IL_UlTra_Nombre = '';
            $IL_UlTra_CarDes = '';
            $IL_UlTra_Motivo = '';
            
            $validarIL_UlTra2  = false;
            $IL_UlTra2_Nombre = '';
            $IL_UlTra2_CarDes = '';
            $IL_UlTra2_Motivo = '';
            
            $validarIL_UlTra3  = false;
            $IL_UlTra3_Nombre = '';
            $IL_UlTra3_CarDes = '';
            $IL_UlTra3_Motivo = '';
            
            $validarIL_ER = false;
            $IL_ER_UltRem = '';
            $IL_ER_NumSuel = '';
            $IL_ER_Bono = '';
            $IL_ER_Utilida = '';
            $IL_ER_Variable = '';
            $IL_ER_Expectativa = '';
        }
        else{
            $validarDatosPersonales = true;

            $entityNivelSelectedbyResumeDG = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeDG->getId()
                                                            ));

            $entityNivelbySelectionProcessDG = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessDG->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));


            //nombre
            $entityQuestionbySectionDgNombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgNombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgNombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgNombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgNombre->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateDgNombre) {
                $DGnombreApellido = '';
            }
            else{
                $DGnombreApellido = $entityResumePrivateCandidateDgNombre->getAnswer();
            }
            
            // DNI
            $entityQuestionbySectionDgDNI = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgDNI = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgDNI->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgDNI = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgDNI->getId()
                                                            ));
                                                            
            
            
            if (!$entityResumePrivateCandidateDgDNI) {
                $DGdni = '';
            }
            else{
                $DGdni = $entityResumePrivateCandidateDgDNI->getAnswer();
            }
                                                            
            // fecha nacimiento
            $entityQuestionbySectionDgFecNac = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgFecNac = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgFecNac->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgFecNac = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgFecNac->getId()
                                                            ));
                                                            
                                                            
            if (!$entityResumePrivateCandidateDgFecNac) {
                $DGFecNac = '';
            }
            else{
                $DGFecNac = $entityResumePrivateCandidateDgFecNac->getAnswer();
            }
            
            // estado civil
            $entityQuestionbySectionDgEstCiv = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgEstCiv = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgEstCiv->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgEstCiv = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgEstCiv->getId()
                                                            ));

            if (!$entityResumePrivateCandidateDgEstCiv) {
                $DGEstCiv = '';
            }
            else{
                $DGEstCiv = $entityResumePrivateCandidateDgEstCiv->getAnswer();
            }
            
            //*** Se carga variables de educacion
            $entitySectionSelectedByResumeED = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2
                                                            ));
                                                            
            $entitySectionbySelectionProcessED = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                                ->findOneBy(array(
                                                            'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));
                                                            
            //Maestria
            $entityNivelSelectedbyResumeEDMae = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDMae = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));
                                                            
            //Maestria - centro estudios
            $entityQuestionbySectionEDMaeCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeCenEst->getId()
                                                            ));
                                                            
            
            
            $validarED_Mae = true;
            if (!$entityResumePrivateCandidateEDMaeCenEst) {
                $validarED_Mae = false;
                $ED_Mae_CentroEstudio = '';
            }
            else{
                $ED_Mae_CentroEstudio = $entityResumePrivateCandidateEDMaeCenEst->getAnswer();
                
                if ($ED_Mae_CentroEstudio == '') {
                    $validarED_Mae = false;
                }
                else{
                    $validarED_Mae = true;
                }
            }
            
            //Maestria - Especialidad
            $entityQuestionbySectionEDMaeEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDMaeEsp) {
                $ED_Mae_Especialidad = '';
            }
            else{
                $ED_Mae_Especialidad = $entityResumePrivateCandidateEDMaeEsp->getAnswer();
            }
            
            
            //Maestria 2
            $entityNivelSelectedbyResumeEDMae = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 6,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDMae = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));
                                                            
            //Maestria 2 - centro estudios
            $entityQuestionbySectionEDMaeCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeCenEst->getId()
                                                            ));
                                                            
            
            
            $validarED_Mae2 = true;
            if (!$entityResumePrivateCandidateEDMaeCenEst) {
                $validarED_Mae2 = false;
                $ED_Mae_CentroEstudio2 = '';
            }
            else{
                $ED_Mae_CentroEstudio2 = $entityResumePrivateCandidateEDMaeCenEst->getAnswer();
                
                if ($ED_Mae_CentroEstudio2 == '') {
                    $validarED_Mae2 = false;
                }
                else{
                    $validarED_Mae2 = true;
                }
            }
            
            //Maestria - Especialidad
            $entityQuestionbySectionEDMaeEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDMaeEsp) {
                $ED_Mae_Especialidad2 = '';
            }
            else{
                $ED_Mae_Especialidad2 = $entityResumePrivateCandidateEDMaeEsp->getAnswer();
            }
            
            
            
            //Universidad
            $entityNivelSelectedbyResumeEDUnv = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDUnv = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));
                                                            
            //Universidad - centro estudios
            $entityQuestionbySectionEDUnvCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvCenEst->getId()
                                                            ));

            $validarED_Unv = true;
            if (!$entityResumePrivateCandidateEDUnvCenEst) {
                $validarED_Unv = false;
                $ED_Unv_CentroEstudio = '';
            }
            else{
                $ED_Unv_CentroEstudio = $entityResumePrivateCandidateEDUnvCenEst->getAnswer();
                if ($ED_Unv_CentroEstudio == '') {
                    $validarED_Unv = false;
                }
                else{
                    $validarED_Unv = true;
                }
            }
            
            //Universidad - Especialidad
            $entityQuestionbySectionEDUnvEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDUnvEsp) {
                $ED_Unv_Especialidad = '';
            }
            else{
                $ED_Unv_Especialidad = $entityResumePrivateCandidateEDUnvEsp->getAnswer();
            }
            
            
            //Universidad 2
            $entityNivelSelectedbyResumeEDUnv = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 7,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDUnv = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));
                                                            
            //Universidad 2 - centro estudios
            $entityQuestionbySectionEDUnvCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvCenEst->getId()
                                                            ));

            $validarED_Unv2 = true;
            if (!$entityResumePrivateCandidateEDUnvCenEst) {
                $validarED_Unv2 = false;
                $ED_Unv_CentroEstudio2 = '';
            }
            else{
                $ED_Unv_CentroEstudio2 = $entityResumePrivateCandidateEDUnvCenEst->getAnswer();
                if ($ED_Unv_CentroEstudio2 == '') {
                    $validarED_Unv2 = false;
                }
                else{
                    $validarED_Unv2 = true;
                }
            }
            
            //Universidad - Especialidad
            $entityQuestionbySectionEDUnvEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDUnvEsp) {
                $ED_Unv_Especialidad2 = '';
            }
            else{
                $ED_Unv_Especialidad2 = $entityResumePrivateCandidateEDUnvEsp->getAnswer();
            }
            
            
            //Técnico
            $entityNivelSelectedbyResumeEDTec = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDTec = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));
                                                            
            //Técnico - centro estudios
            $entityQuestionbySectionEDTecCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDTecCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDTec->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDTecCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDTecCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDTecCenEst->getId()
                                                            ));

            $validarED_Tec = true;
            if (!$entityResumePrivateCandidateEDTecCenEst) {
                $validarED_Tec = false;
                $ED_Tec_CentroEstudio = '';
            }
            else{
                $ED_Tec_CentroEstudio = $entityResumePrivateCandidateEDTecCenEst->getAnswer();
                if ($ED_Tec_CentroEstudio == '') {
                    $validarED_Tec = false;
                }
                else{
                    $validarED_Tec = true;
                }
            }
            
            //Técnico - Especialidad
            $entityQuestionbySectionEDTecEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDTecEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDTec->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDTecEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDTecEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDTecEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDTecEsp) {
                $ED_Tec_Especialidad = '';
            }
            else{
                $ED_Tec_Especialidad = $entityResumePrivateCandidateEDTecEsp->getAnswer();
            }
            
            
            
            //Escolar
            $entityNivelSelectedbyResumeEDEsc = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDEsc = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));
                                                            
            //Escolar - centro estudios
            $entityQuestionbySectionEDEscCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDEscCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDEsc->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDEscCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDEscCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDEscCenEst->getId()
                                                            ));

            $validarED_Esc = true;
            if (!$entityResumePrivateCandidateEDEscCenEst) {
                $validarED_Esc = false;
                $ED_Esc_CentroEstudio = '';
            }
            else{
                $ED_Esc_CentroEstudio = $entityResumePrivateCandidateEDEscCenEst->getAnswer();
                if ($ED_Esc_CentroEstudio == '') {
                    $validarED_Esc = false;
                }
                else{
                    $validarED_Esc = true;
                }
            }
            
            //Escolar - Especialidad
            $entityQuestionbySectionEDEscEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDEscEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDEsc->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDEscEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDEscEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDEscEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDEscEsp) {
                $ED_Esc_Especialidad = '';
            }
            else{
                $ED_Esc_Especialidad = $entityResumePrivateCandidateEDEscEsp->getAnswer();
            }
            
            
            //Otros Estudios 
            $entityNivelSelectedbyResumeEDOtr = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 5,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDOtr = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));
                                                            
            //Otros Estudios - centro estudios
            $entityQuestionbySectionEDOtrCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDOtrCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDOtr->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDOtrCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDOtrCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDOtrCenEst->getId()
                                                            ));

            $validarED_Otr = true;
            if (!$entityResumePrivateCandidateEDOtrCenEst) {
                $validarED_Otr = false;
                $ED_Otr_CentroEstudio = '';
            }
            else{
                $ED_Otr_CentroEstudio = $entityResumePrivateCandidateEDOtrCenEst->getAnswer();
                if ($ED_Otr_CentroEstudio == '') {
                    $validarED_Otr = false;
                }
                else{
                    $validarED_Otr = true;
                }
            }
            
            //Otros Estudios - Especialidad
            $entityQuestionbySectionEDOtrEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDOtrEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDOtr->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDOtrEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDOtrEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDOtrEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDOtrEsp) {
                $ED_Otr_Especialidad = '';
            }
            else{
                $ED_Otr_Especialidad = $entityResumePrivateCandidateEDOtrEsp->getAnswer();
            }
            
            
            
            
            //*** Se carga variables de Informe Laboral
            $entitySectionSelectedByResumeIL = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3
                                                            ));
                                                            
            $entitySectionbySelectionProcessIL = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                                ->findOneBy(array(
                                                            'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));
            
            //Ultimo Trabajo
            $entityNivelSelectedbyResumeIL_UlTra = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));
            
            
            //Ultimo Trabajo - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra = true;
            if (!$entityResumePrivateCandidateIL_UlTra_Nombre) {
                $validarIL_UlTra = false;
                $IL_UlTra_Nombre = '';
            }
            else{
                $IL_UlTra_Nombre = $entityResumePrivateCandidateIL_UlTra_Nombre->getAnswer();
                
                if ($IL_UlTra_Nombre == '') {
                    $validarIL_UlTra = false;
                }
                else{
                    $validarIL_UlTra = true;
                }
            }
            
            //Ultimo Trabajo - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra_CarDes) {
                $IL_UlTra_CarDes = '';
            }
            else{
                $IL_UlTra_CarDes = $entityResumePrivateCandidateIL_UlTra_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo - Motivo
            $entityQuestionbySectionIL_UlTra_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra_Motivo) {
                $IL_UlTra_Motivo = '';
            }
            else{
                $IL_UlTra_Motivo = $entityResumePrivateCandidateIL_UlTra_Motivo->getAnswer();
            }
            
            
            //Anterior Trabajo 2
            $entityNivelSelectedbyResumeIL_UlTra2 = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra2 = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));
            
            
            //Ultimo Trabajo 2 - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra2_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra2 = true;
            if (!$entityResumePrivateCandidateIL_UlTra2_Nombre) {
                $validarIL_UlTra2 = false;
                $IL_UlTra2_Nombre = '';
            }
            else{
                $IL_UlTra2_Nombre = $entityResumePrivateCandidateIL_UlTra2_Nombre->getAnswer();
                
                if ($IL_UlTra2_Nombre == '') {
                    $validarIL_UlTra2 = false;
                }
                else{
                    $validarIL_UlTra2 = true;
                }
            }
            
            //Ultimo Trabajo 2 - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra2_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra2_CarDes) {
                $IL_UlTra2_CarDes = '';
            }
            else{
                $IL_UlTra2_CarDes = $entityResumePrivateCandidateIL_UlTra2_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo 2 - Motivo
            $entityQuestionbySectionIL_UlTra2_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra2_Motivo) {
                $IL_UlTra2_Motivo = '';
            }
            else{
                $IL_UlTra2_Motivo = $entityResumePrivateCandidateIL_UlTra2_Motivo->getAnswer();
            }
            
            
            //Anterior Trabajo 3
            $entityNivelSelectedbyResumeIL_UlTra3 = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra3 = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));
            
            
            //Ultimo Trabajo 2 - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra3_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra3 = true;
            if (!$entityResumePrivateCandidateIL_UlTra3_Nombre) {
                $validarIL_UlTra3 = false;
                $IL_UlTra3_Nombre = '';
            }
            else{
                $IL_UlTra3_Nombre = $entityResumePrivateCandidateIL_UlTra3_Nombre->getAnswer();
                
                if ($IL_UlTra3_Nombre == '') {
                    $validarIL_UlTra3 = false;
                }
                else{
                    $validarIL_UlTra3 = true;
                }
            }
            
            //Ultimo Trabajo 2 - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra3_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra3_CarDes) {
                $IL_UlTra3_CarDes = '';
            }
            else{
                $IL_UlTra3_CarDes = $entityResumePrivateCandidateIL_UlTra3_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo 3 - Motivo
            $entityQuestionbySectionIL_UlTra3_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra3_Motivo) {
                $IL_UlTra3_Motivo = '';
            }
            else{
                $IL_UlTra3_Motivo = $entityResumePrivateCandidateIL_UlTra3_Motivo->getAnswer();
            }
            
            
            //Expectativas remunerativas
            $entityNivelSelectedbyResumeIL_ER = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_ER = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));
            
            
            //Expectativas remunerativas - Última o actual remuneración mensual bruta
            $entityQuestionbySectionIL_ER_UltRem = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_UltRem = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_UltRem->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_UltRem = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_UltRem->getId()
                                                            ));
                                                            
            
            
            $validarIL_ER = true;
            if (!$entityResumePrivateCandidateIL_ER_UltRem) {
                $validarIL_ER = false;
                $IL_ER_UltRem = '';
            }
            else{
                $IL_ER_UltRem = $entityResumePrivateCandidateIL_ER_UltRem->getAnswer();
                
                if ($IL_ER_UltRem == '') {
                    $validarIL_ER = false;
                }
                else{
                    $validarIL_ER = true;
                }
            }
            
            //Expectativas remunerativas - Número de sueldos recibidos al año
            $entityQuestionbySectionIL_ER_NumSuel = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_NumSuel = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_NumSuel->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_NumSuel = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_NumSuel->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_NumSuel) {
                $IL_ER_NumSuel = '';
            }
            else{
                $IL_ER_NumSuel = $entityResumePrivateCandidateIL_ER_NumSuel->getAnswer();
            }
            
            //Expectativas remunerativas - Bono
            $entityQuestionbySectionIL_ER_Bono = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Bono = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Bono->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Bono = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Bono->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Bono) {
                $IL_ER_Bono = '';
            }
            else{
                $IL_ER_Bono = $entityResumePrivateCandidateIL_ER_Bono->getAnswer();
            }
            
            //Expectativas remunerativas - Utilidades
            $entityQuestionbySectionIL_ER_Utilida = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Utilida = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Utilida->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Utilida = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Utilida->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Utilida) {
                $IL_ER_Utilida = '';
            }
            else{
                $IL_ER_Utilida = $entityResumePrivateCandidateIL_ER_Utilida->getAnswer();
            }
            
            //Expectativas remunerativas - Variable
            $entityQuestionbySectionIL_ER_Variable = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 5,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Variable = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Variable->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Variable = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Variable->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Variable) {
                $IL_ER_Variable = '';
            }
            else{
                $IL_ER_Variable = $entityResumePrivateCandidateIL_ER_Variable->getAnswer();
            }
            
            //Expectativas remunerativas - Expectativa
            $entityQuestionbySectionIL_ER_Expectativa = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 6,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Expectativa = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Expectativa->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Expectativa = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Expectativa->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Expectativa) {
                $IL_ER_Expectativa = '';
            }
            else{
                $IL_ER_Expectativa = $entityResumePrivateCandidateIL_ER_Expectativa->getAnswer();
            }
        }
        
        
        
        // FIN ********************************************************

        //Se carga informacion de l GATB
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')
                                            ->findOneBy(array(
                                                        'selectionProcessCandidate' => $id_spc
                                                        ));
        $validarGatbSP = true;
        if (!$entityGatbSP) {
            $validarGatbSP = false;
        }
        
        //Se carga informacion de 2 PMA
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')
                                            ->findOneBy(array(
                                                        'selectionProcessCandidate' => $id_spc
                                                        ));
        $validarPmaSP = true;
        if (!$entityPmaSP) {
            $validarPmaSP = false;
        }
        
        //Se carga informacion de 3 ICE
        $entityICESP = $em->getRepository('TestICESPBundle:ICESP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarICESP = true;
        if (!$entityICESP) {
            $validarICESP = false;
        }
        
        
        //Se carga informacion de 4 ESCUDO
        $entityEscudoSP = $em->getRepository('EscudoSPBundle:EscudoSP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarEscudoSP = true;
        if (!$entityEscudoSP) {
            $validarEscudoSP = false;
        }
        
        //Se carga informacion de 5 RAVEN
        $entityRavenSP = $em->getRepository('RavenSPBundle:RavenSP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarRavenSP = true;
        if (!$entityRavenSP) {
            $validarRavenSP = false;
        }
        
        return $this->render(
            'SeleccionProcesBundle:ResultSPC:show.html.twig',
            array(
            'entity' => $entity,
            'entityRegisterDefinitionRol' => $entityRegisterDefinitionRol,
            
            'validarDatosPersonales' => $validarDatosPersonales,
            'DGnombreApellido' => $DGnombreApellido,
            'DGdni' => $DGdni,
            'DGFecNac' => $DGFecNac,
            'DGEstCiv' => $DGEstCiv,
            
            'validarED_Mae' => $validarED_Mae,
            'ED_Mae_CentroEstudio' => $ED_Mae_CentroEstudio,
            'ED_Mae_Especialidad' => $ED_Mae_Especialidad,
            
            'validarED_Mae2' => $validarED_Mae2,
            'ED_Mae_CentroEstudio2' => $ED_Mae_CentroEstudio2,
            'ED_Mae_Especialidad2' => $ED_Mae_Especialidad2,
            
            'validarED_Unv' => $validarED_Unv,
            'ED_Unv_CentroEstudio' => $ED_Unv_CentroEstudio,
            'ED_Unv_Especialidad' => $ED_Unv_Especialidad,
            
            'validarED_Unv2' => $validarED_Unv2,
            'ED_Unv_CentroEstudio2' => $ED_Unv_CentroEstudio2,
            'ED_Unv_Especialidad2' => $ED_Unv_Especialidad2,
            
            'validarED_Tec' => $validarED_Tec,
            'ED_Tec_CentroEstudio' => $ED_Tec_CentroEstudio,
            'ED_Tec_Especialidad' => $ED_Tec_Especialidad,
            
            'validarED_Esc' => $validarED_Esc,
            'ED_Esc_CentroEstudio' => $ED_Esc_CentroEstudio,
            'ED_Esc_Especialidad' => $ED_Esc_Especialidad,
            
            'validarED_Otr' => $validarED_Otr,
            'ED_Otr_CentroEstudio' => $ED_Otr_CentroEstudio,
            'ED_Otr_Especialidad' => $ED_Otr_Especialidad,
            
            'validarIL_UlTra' => $validarIL_UlTra,
            'IL_UlTra_Nombre' => $IL_UlTra_Nombre,
            'IL_UlTra_CarDes' => $IL_UlTra_CarDes,
            'IL_UlTra_Motivo' => $IL_UlTra_Motivo,
            
            'validarIL_UlTra2' => $validarIL_UlTra2,
            'IL_UlTra2_Nombre' => $IL_UlTra2_Nombre,
            'IL_UlTra2_CarDes' => $IL_UlTra2_CarDes,
            'IL_UlTra2_Motivo' => $IL_UlTra2_Motivo,
            
            'validarIL_UlTra3' => $validarIL_UlTra3,
            'IL_UlTra3_Nombre' => $IL_UlTra3_Nombre,
            'IL_UlTra3_CarDes' => $IL_UlTra3_CarDes,
            'IL_UlTra3_Motivo' => $IL_UlTra3_Motivo,
            
            'validarIL_ER' => $validarIL_ER,
            'IL_ER_UltRem' => $IL_ER_UltRem,
            'IL_ER_NumSuel' => $IL_ER_NumSuel,
            'IL_ER_Bono' => $IL_ER_Bono,
            'IL_ER_Utilida' => $IL_ER_Utilida,
            'IL_ER_Variable' => $IL_ER_Variable,
            'IL_ER_Expectativa' => $IL_ER_Expectativa,
            
            'validarGatbSP' => $validarGatbSP,
            'entityGatbSP' => $entityGatbSP,
            
            'validarPmaSP' => $validarPmaSP,
            'entityPmaSP' => $entityPmaSP,
            
            'validarICESP' => $validarICESP,
            'entityICESP' => $entityICESP,
            
            'validarEscudoSP' => $validarEscudoSP,
            'entityEscudoSP' => $entityEscudoSP,
            
            'validarRavenSP' => $validarRavenSP,
            'entityRavenSP' => $entityRavenSP,
            
            'listaVirtualInterSPC' => $virtualInterviewSelectionProcessCandidateList
        ));

        
    }
    
    public function printAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('SeleccionProcesBundle:ResultSPC')->find($id);
        
        $id_spc = $entity->getSelectionProcessCandidate()->getId();
        
        $entitySelectionProcessCandidate = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id_spc);
        
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($id_spc);
        
        //Se carga el listado de preguntas virtuales
        $virtualInterviewSelectionProcessCandidateList = $em->getRepository('VirtualInterviewBundle:VirtualInterviewSelectionProcessCandidate')
                                            ->findBy(array('SelectionProcessCandidate' => $id_spc),
                                                     array('id' => 'ASC')
                                                    );
                                               
        //Se carga informacio acerca del perfil de rol
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')
                                            ->findOneBy(array(
                                                        'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId()
                                                        ));
                                                        
        // ********************************************************
        //*** Se carga variables de datos generales
        $entitySectionSelectedByResumeDG = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                            ->findOneBy(array(
                                                        'codprint' => 1
                                                        ));
                                                        
        $entitySectionbySelectionProcessDG = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                            ->findOneBy(array(
                                                        'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                        'sectionSelectedByResume' => $entitySectionSelectedByResumeDG->getId()
                                                        ));
                                                            
        if (!$entitySectionbySelectionProcessDG) {
            $validarDatosPersonales = false;
            
            $DGnombreApellido = '';
            $DGdni = '';
            $DGFecNac = '';
            $DGEstCiv = '';
            
            $validarED_Mae = false;
            $ED_Mae_CentroEstudio = '';
            $ED_Mae_Especialidad = '';
            
            $validarED_Unv  = false;
            $ED_Unv_CentroEstudio = '';
            $ED_Unv_Especialidad = '';
            
            $validarED_Tec  = false;
            $ED_Tec_CentroEstudio = '';
            $ED_Tec_Especialidad = '';
            
            $validarED_Esc  = false;
            $ED_Esc_CentroEstudio = '';
            $ED_Esc_Especialidad = '';
            
            $validarED_Otr  = false;
            $ED_Otr_CentroEstudio = '';
            $ED_Otr_Especialidad = '';
            
            $validarIL_UlTra  = false;
            $IL_UlTra_Nombre = '';
            $IL_UlTra_CarDes = '';
            $IL_UlTra_Motivo = '';
            
            $validarIL_UlTra2  = false;
            $IL_UlTra2_Nombre = '';
            $IL_UlTra2_CarDes = '';
            $IL_UlTra2_Motivo = '';
            
            $validarIL_UlTra3  = false;
            $IL_UlTra3_Nombre = '';
            $IL_UlTra3_CarDes = '';
            $IL_UlTra3_Motivo = '';
            
            $validarIL_ER = false;
            $IL_ER_UltRem = '';
            $IL_ER_NumSuel = '';
            $IL_ER_Bono = '';
            $IL_ER_Utilida = '';
            $IL_ER_Variable = '';
            $IL_ER_Expectativa = '';
        }
        else{

            $validarDatosPersonales = true;

            $entityNivelSelectedbyResumeDG = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeDG->getId()
                                                            ));

            $entityNivelbySelectionProcessDG = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessDG->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));


            //nombre
            $entityQuestionbySectionDgNombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgNombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgNombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgNombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgNombre->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateDgNombre) {
                $DGnombreApellido = '';
            }
            else{
                $DGnombreApellido = $entityResumePrivateCandidateDgNombre->getAnswer();
            }
            
            // DNI
            $entityQuestionbySectionDgDNI = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgDNI = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgDNI->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgDNI = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgDNI->getId()
                                                            ));
                                                            
            
            
            if (!$entityResumePrivateCandidateDgDNI) {
                $DGdni = '';
            }
            else{
                $DGdni = $entityResumePrivateCandidateDgDNI->getAnswer();
            }
                                                            
            // fecha nacimiento
            $entityQuestionbySectionDgFecNac = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgFecNac = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgFecNac->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgFecNac = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgFecNac->getId()
                                                            ));
                                                            
                                                            
            if (!$entityResumePrivateCandidateDgFecNac) {
                $DGFecNac = '';
            }
            else{
                $DGFecNac = $entityResumePrivateCandidateDgFecNac->getAnswer();
            }
            
            // estado civil
            $entityQuestionbySectionDgEstCiv = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeDG->getId()
                                                            ));

            $entityQuestionbyProcessSelectionDgEstCiv = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessDG->getId(),
                                                            'questionbySection' => $entityQuestionbySectionDgEstCiv->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateDgEstCiv = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionDgEstCiv->getId()
                                                            ));

            if (!$entityResumePrivateCandidateDgEstCiv) {
                $DGEstCiv = '';
            }
            else{
                $DGEstCiv = $entityResumePrivateCandidateDgEstCiv->getAnswer();
            }
            
            //*** Se carga variables de educacion
            $entitySectionSelectedByResumeED = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2
                                                            ));
                                                            
            $entitySectionbySelectionProcessED = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                                ->findOneBy(array(
                                                            'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));
                                                            
            //Maestria
            $entityNivelSelectedbyResumeEDMae = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDMae = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));
                                                            
            //Maestria - centro estudios
            $entityQuestionbySectionEDMaeCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeCenEst->getId()
                                                            ));
                                                            
            
            
            $validarED_Mae = true;
            if (!$entityResumePrivateCandidateEDMaeCenEst) {
                $validarED_Mae = false;
                $ED_Mae_CentroEstudio = '';
            }
            else{
                $ED_Mae_CentroEstudio = $entityResumePrivateCandidateEDMaeCenEst->getAnswer();
                
                if ($ED_Mae_CentroEstudio == '') {
                    $validarED_Mae = false;
                }
                else{
                    $validarED_Mae = true;
                }
            }
            
            //Maestria - Especialidad
            $entityQuestionbySectionEDMaeEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDMaeEsp) {
                $ED_Mae_Especialidad = '';
            }
            else{
                $ED_Mae_Especialidad = $entityResumePrivateCandidateEDMaeEsp->getAnswer();
            }
            
            
            //Maestria 2
            $entityNivelSelectedbyResumeEDMae = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 6,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDMae = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));
                                                            
            //Maestria 2 - centro estudios
            $entityQuestionbySectionEDMaeCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeCenEst->getId()
                                                            ));
                                                            
            
            
            $validarED_Mae2 = true;
            if (!$entityResumePrivateCandidateEDMaeCenEst) {
                $validarED_Mae2 = false;
                $ED_Mae_CentroEstudio2 = '';
            }
            else{
                $ED_Mae_CentroEstudio2 = $entityResumePrivateCandidateEDMaeCenEst->getAnswer();
                
                if ($ED_Mae_CentroEstudio2 == '') {
                    $validarED_Mae2 = false;
                }
                else{
                    $validarED_Mae2 = true;
                }
            }
            
            //Maestria - Especialidad
            $entityQuestionbySectionEDMaeEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDMae->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDMaeEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDMae->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDMaeEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDMaeEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDMaeEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDMaeEsp) {
                $ED_Mae_Especialidad2 = '';
            }
            else{
                $ED_Mae_Especialidad2 = $entityResumePrivateCandidateEDMaeEsp->getAnswer();
            }
            
            
            //Universidad
            $entityNivelSelectedbyResumeEDUnv = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDUnv = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));
                                                            
            //Universidad - centro estudios
            $entityQuestionbySectionEDUnvCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvCenEst->getId()
                                                            ));

            $validarED_Unv = true;
            if (!$entityResumePrivateCandidateEDUnvCenEst) {
                $validarED_Unv = false;
                $ED_Unv_CentroEstudio = '';
            }
            else{
                $ED_Unv_CentroEstudio = $entityResumePrivateCandidateEDUnvCenEst->getAnswer();
                if ($ED_Unv_CentroEstudio == '') {
                    $validarED_Unv = false;
                }
                else{
                    $validarED_Unv = true;
                }
            }
            
            //Universidad - Especialidad
            $entityQuestionbySectionEDUnvEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDUnvEsp) {
                $ED_Unv_Especialidad = '';
            }
            else{
                $ED_Unv_Especialidad = $entityResumePrivateCandidateEDUnvEsp->getAnswer();
            }
            
            
            //Universidad 2
            $entityNivelSelectedbyResumeEDUnv = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 7,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDUnv = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));
                                                            
            //Universidad 2 - centro estudios
            $entityQuestionbySectionEDUnvCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvCenEst->getId()
                                                            ));

            $validarED_Unv2 = true;
            if (!$entityResumePrivateCandidateEDUnvCenEst) {
                $validarED_Unv2 = false;
                $ED_Unv_CentroEstudio2 = '';
            }
            else{
                $ED_Unv_CentroEstudio2 = $entityResumePrivateCandidateEDUnvCenEst->getAnswer();
                if ($ED_Unv_CentroEstudio2 == '') {
                    $validarED_Unv2 = false;
                }
                else{
                    $validarED_Unv2 = true;
                }
            }
            
            //Universidad - Especialidad
            $entityQuestionbySectionEDUnvEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDUnv->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDUnvEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDUnv->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDUnvEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDUnvEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDUnvEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDUnvEsp) {
                $ED_Unv_Especialidad2 = '';
            }
            else{
                $ED_Unv_Especialidad2 = $entityResumePrivateCandidateEDUnvEsp->getAnswer();
            }
            
            
            //Técnico
            $entityNivelSelectedbyResumeEDTec = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDTec = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));
                                                            
            //Técnico - centro estudios
            $entityQuestionbySectionEDTecCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDTecCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDTec->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDTecCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDTecCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDTecCenEst->getId()
                                                            ));

            $validarED_Tec = true;
            if (!$entityResumePrivateCandidateEDTecCenEst) {
                $validarED_Tec = false;
                $ED_Tec_CentroEstudio = '';
            }
            else{
                $ED_Tec_CentroEstudio = $entityResumePrivateCandidateEDTecCenEst->getAnswer();
                if ($ED_Tec_CentroEstudio == '') {
                    $validarED_Tec = false;
                }
                else{
                    $validarED_Tec = true;
                }
            }
            
            //Técnico - Especialidad
            $entityQuestionbySectionEDTecEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDTec->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDTecEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDTec->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDTecEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDTecEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDTecEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDTecEsp) {
                $ED_Tec_Especialidad = '';
            }
            else{
                $ED_Tec_Especialidad = $entityResumePrivateCandidateEDTecEsp->getAnswer();
            }
            
            
            
            //Escolar
            $entityNivelSelectedbyResumeEDEsc = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDEsc = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));
                                                            
            //Escolar - centro estudios
            $entityQuestionbySectionEDEscCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDEscCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDEsc->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDEscCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDEscCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDEscCenEst->getId()
                                                            ));

            $validarED_Esc = true;
            if (!$entityResumePrivateCandidateEDEscCenEst) {
                $validarED_Esc = false;
                $ED_Esc_CentroEstudio = '';
            }
            else{
                $ED_Esc_CentroEstudio = $entityResumePrivateCandidateEDEscCenEst->getAnswer();
                if ($ED_Esc_CentroEstudio == '') {
                    $validarED_Esc = false;
                }
                else{
                    $validarED_Esc = true;
                }
            }
            
            //Escolar - Especialidad
            $entityQuestionbySectionEDEscEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDEsc->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDEscEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDEsc->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDEscEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDEscEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDEscEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDEscEsp) {
                $ED_Esc_Especialidad = '';
            }
            else{
                $ED_Esc_Especialidad = $entityResumePrivateCandidateEDEscEsp->getAnswer();
            }
            
            
            //Otros Estudios 
            $entityNivelSelectedbyResumeEDOtr = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 5,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeED->getId()
                                                            ));

            $entityNivelbySelectionProcessEDOtr = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessED->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));
                                                            
            //Otros Estudios - centro estudios
            $entityQuestionbySectionEDOtrCenEst = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDOtrCenEst = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDOtr->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDOtrCenEst->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDOtrCenEst = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDOtrCenEst->getId()
                                                            ));

            $validarED_Otr = true;
            if (!$entityResumePrivateCandidateEDOtrCenEst) {
                $validarED_Otr = false;
                $ED_Otr_CentroEstudio = '';
            }
            else{
                $ED_Otr_CentroEstudio = $entityResumePrivateCandidateEDOtrCenEst->getAnswer();
                if ($ED_Otr_CentroEstudio == '') {
                    $validarED_Otr = false;
                }
                else{
                    $validarED_Otr = true;
                }
            }
            
            //Otros Estudios - Especialidad
            $entityQuestionbySectionEDOtrEsp = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeEDOtr->getId()
                                                            ));

            $entityQuestionbyProcessSelectionEDOtrEsp = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessEDOtr->getId(),
                                                            'questionbySection' => $entityQuestionbySectionEDOtrEsp->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateEDOtrEsp = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionEDOtrEsp->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateEDOtrEsp) {
                $ED_Otr_Especialidad = '';
            }
            else{
                $ED_Otr_Especialidad = $entityResumePrivateCandidateEDOtrEsp->getAnswer();
            }
            
            
            
            
            //*** Se carga variables de Informe Laboral
            $entitySectionSelectedByResumeIL = $em->getRepository('ResumeBundle:SectionSelectedByResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3
                                                            ));
                                                            
            $entitySectionbySelectionProcessIL = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')
                                                ->findOneBy(array(
                                                            'selectionProcess' => $entitySelectionProcessCandidate->getSelectionProcess()->getId(),
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));
            
            //Ultimo Trabajo
            $entityNivelSelectedbyResumeIL_UlTra = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));
            
            
            //Ultimo Trabajo - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra = true;
            if (!$entityResumePrivateCandidateIL_UlTra_Nombre) {
                $validarIL_UlTra = false;
                $IL_UlTra_Nombre = '';
            }
            else{
                $IL_UlTra_Nombre = $entityResumePrivateCandidateIL_UlTra_Nombre->getAnswer();
                
                if ($IL_UlTra_Nombre == '') {
                    $validarIL_UlTra = false;
                }
                else{
                    $validarIL_UlTra = true;
                }
            }
            
            //Ultimo Trabajo - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra_CarDes) {
                $IL_UlTra_CarDes = '';
            }
            else{
                $IL_UlTra_CarDes = $entityResumePrivateCandidateIL_UlTra_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo - Motivo
            $entityQuestionbySectionIL_UlTra_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra_Motivo) {
                $IL_UlTra_Motivo = '';
            }
            else{
                $IL_UlTra_Motivo = $entityResumePrivateCandidateIL_UlTra_Motivo->getAnswer();
            }
            
            
            //Anterior Trabajo 2
            $entityNivelSelectedbyResumeIL_UlTra2 = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra2 = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));
            
            
            //Ultimo Trabajo 2 - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra2_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra2 = true;
            if (!$entityResumePrivateCandidateIL_UlTra2_Nombre) {
                $validarIL_UlTra2 = false;
                $IL_UlTra2_Nombre = '';
            }
            else{
                $IL_UlTra2_Nombre = $entityResumePrivateCandidateIL_UlTra2_Nombre->getAnswer();
                
                if ($IL_UlTra2_Nombre == '') {
                    $validarIL_UlTra2 = false;
                }
                else{
                    $validarIL_UlTra2 = true;
                }
            }
            
            //Ultimo Trabajo 2 - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra2_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra2_CarDes) {
                $IL_UlTra2_CarDes = '';
            }
            else{
                $IL_UlTra2_CarDes = $entityResumePrivateCandidateIL_UlTra2_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo 2 - Motivo
            $entityQuestionbySectionIL_UlTra2_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra2->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra2_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra2->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra2_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra2_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra2_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra2_Motivo) {
                $IL_UlTra2_Motivo = '';
            }
            else{
                $IL_UlTra2_Motivo = $entityResumePrivateCandidateIL_UlTra2_Motivo->getAnswer();
            }
            
            
            //Anterior Trabajo 3
            $entityNivelSelectedbyResumeIL_UlTra3 = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_UlTra3 = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));
            
            
            //Ultimo Trabajo 2 - Nombre o Razón Social de la Empresa
            $entityQuestionbySectionIL_UlTra3_Nombre = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_Nombre = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_Nombre->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_Nombre = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_Nombre->getId()
                                                            ));
                                                            
            
            
            $validarIL_UlTra3 = true;
            if (!$entityResumePrivateCandidateIL_UlTra3_Nombre) {
                $validarIL_UlTra3 = false;
                $IL_UlTra3_Nombre = '';
            }
            else{
                $IL_UlTra3_Nombre = $entityResumePrivateCandidateIL_UlTra3_Nombre->getAnswer();
                
                if ($IL_UlTra3_Nombre == '') {
                    $validarIL_UlTra3 = false;
                }
                else{
                    $validarIL_UlTra3 = true;
                }
            }
            
            //Ultimo Trabajo 2 - Cargo desempeñado
            $entityQuestionbySectionIL_UlTra3_CarDes = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_CarDes = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_CarDes->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_CarDes = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_CarDes->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra3_CarDes) {
                $IL_UlTra3_CarDes = '';
            }
            else{
                $IL_UlTra3_CarDes = $entityResumePrivateCandidateIL_UlTra3_CarDes->getAnswer();
            }
            
            //Ultimo Trabajo 3 - Motivo
            $entityQuestionbySectionIL_UlTra3_Motivo = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_UlTra3->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_UlTra3_Motivo = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_UlTra3->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_UlTra3_Motivo->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_UlTra3_Motivo = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_UlTra3_Motivo->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_UlTra3_Motivo) {
                $IL_UlTra3_Motivo = '';
            }
            else{
                $IL_UlTra3_Motivo = $entityResumePrivateCandidateIL_UlTra3_Motivo->getAnswer();
            }
            
            
            //Expectativas remunerativas
            $entityNivelSelectedbyResumeIL_ER = $em->getRepository('ResumeBundle:NivelSelectedbyResume')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'sectionSelectedByResume' => $entitySectionSelectedByResumeIL->getId()
                                                            ));

            $entityNivelbySelectionProcessIL_ER = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')
                                                ->findOneBy(array(
                                                            'sectionbySelectionProcess' => $entitySectionbySelectionProcessIL->getId(),
                                                            'nivelSelectedbyResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));
            
            
            //Expectativas remunerativas - Última o actual remuneración mensual bruta
            $entityQuestionbySectionIL_ER_UltRem = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 1,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_UltRem = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_UltRem->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_UltRem = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_UltRem->getId()
                                                            ));
                                                            
            
            
            $validarIL_ER = true;
            if (!$entityResumePrivateCandidateIL_ER_UltRem) {
                $validarIL_ER = false;
                $IL_ER_UltRem = '';
            }
            else{
                $IL_ER_UltRem = $entityResumePrivateCandidateIL_ER_UltRem->getAnswer();
                
                if ($IL_ER_UltRem == '') {
                    $validarIL_ER = false;
                }
                else{
                    $validarIL_ER = true;
                }
            }
            
            //Expectativas remunerativas - Número de sueldos recibidos al año
            $entityQuestionbySectionIL_ER_NumSuel = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 2,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_NumSuel = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_NumSuel->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_NumSuel = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_NumSuel->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_NumSuel) {
                $IL_ER_NumSuel = '';
            }
            else{
                $IL_ER_NumSuel = $entityResumePrivateCandidateIL_ER_NumSuel->getAnswer();
            }
            
            //Expectativas remunerativas - Bono
            $entityQuestionbySectionIL_ER_Bono = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 3,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Bono = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Bono->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Bono = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Bono->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Bono) {
                $IL_ER_Bono = '';
            }
            else{
                $IL_ER_Bono = $entityResumePrivateCandidateIL_ER_Bono->getAnswer();
            }
            
            //Expectativas remunerativas - Utilidades
            $entityQuestionbySectionIL_ER_Utilida = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 4,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Utilida = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Utilida->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Utilida = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Utilida->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Utilida) {
                $IL_ER_Utilida = '';
            }
            else{
                $IL_ER_Utilida = $entityResumePrivateCandidateIL_ER_Utilida->getAnswer();
            }
            
            //Expectativas remunerativas - Variable
            $entityQuestionbySectionIL_ER_Variable = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 5,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Variable = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Variable->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Variable = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Variable->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Variable) {
                $IL_ER_Variable = '';
            }
            else{
                $IL_ER_Variable = $entityResumePrivateCandidateIL_ER_Variable->getAnswer();
            }
            
            //Expectativas remunerativas - Expectativa
            $entityQuestionbySectionIL_ER_Expectativa = $em->getRepository('ResumeBundle:QuestionbySection')
                                                ->findOneBy(array(
                                                            'codprint' => 6,
                                                            'nivelSelectedByResume' => $entityNivelSelectedbyResumeIL_ER->getId()
                                                            ));

            $entityQuestionbyProcessSelectionIL_ER_Expectativa = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')
                                                ->findOneBy(array(
                                                            'nivelbySelectionProcess' => $entityNivelbySelectionProcessIL_ER->getId(),
                                                            'questionbySection' => $entityQuestionbySectionIL_ER_Expectativa->getId()
                                                            ));
                                                            
            $entityResumePrivateCandidateIL_ER_Expectativa = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')
                                                ->findOneBy(array(
                                                            'SPCResumePrivate' => $id_spc,
                                                            'questionbyProcessSelection' => $entityQuestionbyProcessSelectionIL_ER_Expectativa->getId()
                                                            ));
                                                            
            if (!$entityResumePrivateCandidateIL_ER_Expectativa) {
                $IL_ER_Expectativa = '';
            }
            else{
                $IL_ER_Expectativa = $entityResumePrivateCandidateIL_ER_Expectativa->getAnswer();
            }
        
        }
        
        
        // FIN ********************************************************

        //Se carga informacion de l GATB
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')
                                            ->findOneBy(array(
                                                        'selectionProcessCandidate' => $id_spc
                                                        ));
        $validarGatbSP = true;
        if (!$entityGatbSP) {
            $validarGatbSP = false;
        }
        
        //Se carga informacion de 2 PMA
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')
                                            ->findOneBy(array(
                                                        'selectionProcessCandidate' => $id_spc
                                                        ));
        $validarPmaSP = true;
        if (!$entityPmaSP) {
            $validarPmaSP = false;
        }
        
        //Se carga informacion de 3 ICE
        $entityICESP = $em->getRepository('TestICESPBundle:ICESP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarICESP = true;
        if (!$entityICESP) {
            $validarICESP = false;
        }
        
        
        //Se carga informacion de 4 ESCUDO
        $entityEscudoSP = $em->getRepository('EscudoSPBundle:EscudoSP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarEscudoSP = true;
        if (!$entityEscudoSP) {
            $validarEscudoSP = false;
        }
        
        //Se carga informacion de 5 RAVEN
        $entityRavenSP = $em->getRepository('RavenSPBundle:RavenSP')
                                            ->findOneBy(array(
                                                        'selectionprocesscandidate' => $id_spc
                                                        ));
        $validarRavenSP = true;
        if (!$entityRavenSP) {
            $validarRavenSP = false;
        }
        
        //return $this->render(
        
        $html = $this->renderView(
            'SeleccionProcesBundle:ResultSPC:print.html.twig',
            array(
            'entity' => $entity,
            'entityRegisterDefinitionRol' => $entityRegisterDefinitionRol,
            
            'validarDatosPersonales' => $validarDatosPersonales,
            'DGnombreApellido' => $DGnombreApellido,
            'DGdni' => $DGdni,
            'DGFecNac' => $DGFecNac,
            'DGEstCiv' => $DGEstCiv,
            
            'validarED_Mae' => $validarED_Mae,
            'ED_Mae_CentroEstudio' => $ED_Mae_CentroEstudio,
            'ED_Mae_Especialidad' => $ED_Mae_Especialidad,
            
            'validarED_Mae2' => $validarED_Mae2,
            'ED_Mae_CentroEstudio2' => $ED_Mae_CentroEstudio2,
            'ED_Mae_Especialidad2' => $ED_Mae_Especialidad2,
            
            'validarED_Unv' => $validarED_Unv,
            'ED_Unv_CentroEstudio' => $ED_Unv_CentroEstudio,
            'ED_Unv_Especialidad' => $ED_Unv_Especialidad,
            
            'validarED_Unv2' => $validarED_Unv2,
            'ED_Unv_CentroEstudio2' => $ED_Unv_CentroEstudio2,
            'ED_Unv_Especialidad2' => $ED_Unv_Especialidad2,
            
            'validarED_Tec' => $validarED_Tec,
            'ED_Tec_CentroEstudio' => $ED_Tec_CentroEstudio,
            'ED_Tec_Especialidad' => $ED_Tec_Especialidad,
            
            'validarED_Esc' => $validarED_Esc,
            'ED_Esc_CentroEstudio' => $ED_Esc_CentroEstudio,
            'ED_Esc_Especialidad' => $ED_Esc_Especialidad,
            
            'validarED_Otr' => $validarED_Otr,
            'ED_Otr_CentroEstudio' => $ED_Otr_CentroEstudio,
            'ED_Otr_Especialidad' => $ED_Otr_Especialidad,
            
            'validarIL_UlTra' => $validarIL_UlTra,
            'IL_UlTra_Nombre' => $IL_UlTra_Nombre,
            'IL_UlTra_CarDes' => $IL_UlTra_CarDes,
            'IL_UlTra_Motivo' => $IL_UlTra_Motivo,
            
            'validarIL_UlTra2' => $validarIL_UlTra2,
            'IL_UlTra2_Nombre' => $IL_UlTra2_Nombre,
            'IL_UlTra2_CarDes' => $IL_UlTra2_CarDes,
            'IL_UlTra2_Motivo' => $IL_UlTra2_Motivo,
            
            'validarIL_UlTra3' => $validarIL_UlTra3,
            'IL_UlTra3_Nombre' => $IL_UlTra3_Nombre,
            'IL_UlTra3_CarDes' => $IL_UlTra3_CarDes,
            'IL_UlTra3_Motivo' => $IL_UlTra3_Motivo,
            
            'validarIL_ER' => $validarIL_ER,
            'IL_ER_UltRem' => $IL_ER_UltRem,
            'IL_ER_NumSuel' => $IL_ER_NumSuel,
            'IL_ER_Bono' => $IL_ER_Bono,
            'IL_ER_Utilida' => $IL_ER_Utilida,
            'IL_ER_Variable' => $IL_ER_Variable,
            'IL_ER_Expectativa' => $IL_ER_Expectativa,
            
            'validarGatbSP' => $validarGatbSP,
            'entityGatbSP' => $entityGatbSP,
            
            'validarPmaSP' => $validarPmaSP,
            'entityPmaSP' => $entityPmaSP,
            
            'validarICESP' => $validarICESP,
            'entityICESP' => $entityICESP,
            
            'validarEscudoSP' => $validarEscudoSP,
            'entityEscudoSP' => $entityEscudoSP,
            
            'validarRavenSP' => $validarRavenSP,
            'entityRavenSP' => $entityRavenSP,
            
            'listaVirtualInterSPC' => $virtualInterviewSelectionProcessCandidateList
        ));
        
        return new Response(
                        $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
                        200,
                        array(
                            'Content-Type'          => 'application/pdf',
                            'Content-Disposition'   => 'attachment; filename="file.pdf"'
                        )
                    );

    }
    
    
    public function createAction($id_spc)
    {
        $entity = new ResultSPC();
        
        $em = $this->getDoctrine()->getManager(); 
        
        
        $request = $this->getRequest();
        $form   = $this->createForm(new ResultSPCType(), $entity);

        $form->handleRequest($request);
        
        $entitySelectionProcessCandidate = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id_spc);
        
        $entity->setSelectionProcessCandidate($entitySelectionProcessCandidate);
        
        $em->persist($entity);
        
        
        $em->flush();
        
        return $this->redirect($this->generateUrl('sp_candidato_result_show', array('id' => $entity->getId())));
    }
    
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
}
