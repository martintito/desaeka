<?php

namespace Jaxxes\TestPmaSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;

use Jaxxes\TestPmaSPBundle\Entity\PmaSP;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestPmaSPBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function newAction($idspcandidate)
    {
        $entity = new PmaSP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entitySelectionProcessCandidate = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($idspcandidate);
        
        /*Se obtiene el registro de definision del Gatgb*/
        $entity->setSelectionProcessCandidate($entitySelectionProcessCandidate);
        
        $pmaList = $em->getRepository('TestPmaBundle:Pma')->findAll();
        
        
        foreach ($pmaList as $pma){
            $entity->setPma($pma);
            }

        $emRepo = $this->getDoctrine()->getManager();
        $emRepo->persist($entity);
        $emRepo->flush();
        
        return $this->redirect($this->generateUrl('test_pma_sp_show', array('id' => $entity->getId())));
        
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPmaSPBundle:PmaSP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestPmaSPBundle:Default:show.html.twig', array(
            'entity'        => $entity,
            'delete_form'   => $deleteForm->createView(),
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
