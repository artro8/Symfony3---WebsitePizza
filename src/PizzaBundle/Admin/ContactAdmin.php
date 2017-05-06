<?php


namespace PizzaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Route\RouteCollection;

class ContactAdmin extends Admin {
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('create')
            ->remove('delete')
            ;

    }
    
    public function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('Contact', array(
                    'class'       => 'col-md-8',
                    'box_class'   => 'box box-solid box-success',
                    'description' => 'Change your contact'))
                ->add('address', 'text')
                ->add('phone', 'text')
                ->add('email', 'text')
                ->end();
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('address')
                ->add('phone')
                ->add('email')
                ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('_action', 'actions', array(
                    'actions' => array(
                    'edit' => array(),
                    
                 )))
                ->add('address', null, array(
                    'editable' => true
                ))
                ->add('phone', null, array(
                    'editable' => true
                ))
                ->add('email', null, array(
                    'editable' => true
                ))
                ;
    }
    
}
