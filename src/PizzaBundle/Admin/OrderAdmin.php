<?php

namespace PizzaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Route\RouteCollection;

class OrderAdmin extends Admin {
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
            ->remove('create')
            ->remove('edit')
            ;

    }
    
    public function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('Order', array(
                    'class'       => 'col-md-8',
                    'box_class'   => 'box box-solid box-success',
                    'description' => 'Change your contact'))
                ->add('name', 'text')
                ->add('phone', 'integer')
                ->add('email', 'text')
                ->add('message', 'text')
                ->add('status',  'choice')
                ->end();
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name')
                ->add('phone')
                ->add('email')
                ->add('message')
                ->add('status')
                ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('_action', 'actions', array(
                    'actions' => array(
                    'delete' => array(),
                    
                 )))
                ->add('name', null, array(
                    'editable' => true
                ))
                ->add('phone', null, array(
                    'editable' => true
                ))
                ->add('email', null, array(
                    'editable' => true
                ))
                ->add('message', null, array(
                    'editable' => true
                ))
                ->add('status', null, array(
                    'editable' => true
                    ))
                ;
    }
    
}
