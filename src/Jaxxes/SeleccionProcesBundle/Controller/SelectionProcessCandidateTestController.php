<?php

namespace Jaxxes\SeleccionProcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidateTest;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;



class SelectionProcessCandidateTestController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //Se carga el usuario de session - select process candidate
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();
        
        $selectionProcessCandidateTestList = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidateTest')
                                            ->findBy(array(
                                                        'selectionProcessCandidate' => $idspcandidate
                                                        ));
        
        if (!$selectionProcessCandidateTestList) {
            
            $selectionProcessTestList = $em->getRepository('SeleccionProcesBundle:SelectionProcessTest')->findBy(array(
                                                            'selectionProcess' => $entityUser->getSelectionProcess()->getId(),
                                                            'selected' => true
                                                            ));
                                                            
            foreach ($selectionProcessTestList as $selectionProcessTest){
                
                $entitySelectionProcessCandidateTest  = new SelectionProcessCandidateTest();
                
                $entitySelectionProcessCandidateTest->setSelectionProcessTest($selectionProcessTest);
                $entitySelectionProcessCandidateTest->setSelectionProcessCandidate($entityUser);
                $entitySelectionProcessCandidateTest->setRealized(false);
                
                $em->persist($entitySelectionProcessCandidateTest);
                
                }
            
            $em->flush();
        }
        

        return $this->redirect($this->generateUrl('sp_candidato_test_show', array('idspcandidate' => $idspcandidate ) ));

    }
    
    /**
     * Finds and displays a Selecction Process entity.
     *
     */
    public function showAction($idspcandidate)
    {
        $em = $this->getDoctrine()->getManager();
        
        $selectionProcessCandidateTestList = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidateTest')
                                            ->findBy(array(
                                                        'selectionProcessCandidate' => $idspcandidate
                                                        ));

        $entitySelectionProcessCandidate = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($idspcandidate);

        if (!$selectionProcessCandidateTestList) {
            throw $this->createNotFoundException('No se ha encontrado el proceso de seleccion solicitado');
        }
        
        $deleteForm = $this->createDeleteForm($idspcandidate);

        return $this->render('SeleccionProcesBundle:SelectionProcessCandidateTest:show.html.twig', array(
            'entity'                                => $entitySelectionProcessCandidate,
            'selectionProcessCandidateTests'        => $selectionProcessCandidateTestList,
            'delete_form'                           => $deleteForm->createView(),
        ));
    }
    
    
    public function makeAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //Se carga el usuario de session - select process candidate
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate = $entityUser->getId();
        
        
        $selectionProcessCandidateTestList = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidateTest')
                                            ->findBy(array(
                                                        'selectionProcessCandidate' => $idspcandidate,
                                                        'realized' => false
                                                        ));
        
        foreach ($selectionProcessCandidateTestList as $selectionProcessCandidateTes){
            
            $codeTest = $selectionProcessCandidateTes->getSelectionProcessTest()->getDefinitionTest()->getCode();
            
            if ($codeTest == 'GTB'){
                return $this->redirect( $this->generateUrl( 'test_gatb_sp_new' ));
            }
            elseif ($codeTest == 'PMA') {
                return $this->redirect( $this->generateUrl( 'test_pma_sp_new', array('idspcandidate' => $idspcandidate ) ));
            }
            elseif ($codeTest == 'ICE') {
                return $this->redirect( $this->generateUrl( 'test_ice_new', array('idspc' => $idspcandidate ) ));
            }
            elseif ($codeTest == 'ESC') {
                return $this->redirect( $this->generateUrl( 'test_escudo_new', array('idspc' => $idspcandidate ) ));
            }
            elseif ($codeTest == 'RVN') {
                return $this->redirect( $this->generateUrl( 'rv_inst' ));
            }
            else{
                return $this->redirect( $this->generateUrl( 'sp_candidato_test_end' ));
            }
            
        }
        return $this->redirect( $this->generateUrl( 'sp_candidato_test_end' ));

    }
    
    public function nextAction($codetest)
    {
        $em = $this->getDoctrine()->getManager();
        
        //Se carga el usuario de session - select process candidate
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate = $entityUser->getId();
        
        
        $DefinitionTestList = $em->getRepository('DefinitionTestBundle:DefinitionTest')->findBy(array('code' => $codetest));
        
        foreach ($DefinitionTestList as $DefinitionTest){
            
            $SelectionProcessTestList = $em->getRepository('SeleccionProcesBundle:SelectionProcessTest')
                                                                                    ->findBy(array(
                                                                                        'definitionTest' => $DefinitionTest->getId(),
                                                                                        'selectionProcess' => $entityUser->getSelectionProcess()->getId()
                                                                                                    ));
            
            foreach ($SelectionProcessTestList as $SelectionProcessTest){
                
                $SelectionProcessCandidateTestList = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidateTest')
                                                                                    ->findBy(array(
                                                                                        'selectionProcessTest' => $SelectionProcessTest->getId(),
                                                                                        'selectionProcessCandidate' => $idspcandidate
                                                                                                    ));
                
                foreach ($SelectionProcessCandidateTestList as $SelectionProcessCandidateTest){
                    
                    $SelectionProcessCandidateTest->setRealized(true);
                    $em->persist($SelectionProcessCandidateTest);
                }
                
            }
        }

        $em->flush();

        return $this->redirect($this->generateUrl('sp_candidato_test_show', array('idspcandidate' => $idspcandidate ) ));
        
    }
    
    public function endAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //Se carga el usuario de session - select process candidate
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
        
        
        $entityUser->setActive(false);
        $entityUser->setFinishTest(true);
        
        $em->persist($entityUser);

        $em->flush();
        
        return $this->render('SeleccionProcesBundle:SelectionProcessCandidateTest:end.html.twig', array(
            'entity'                                => $entityUser,
        ));
        

    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    

}

