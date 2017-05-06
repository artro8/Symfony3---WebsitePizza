<?php

namespace PizzaBundle\Admin;
    
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class MenuAdmin extends Admin {
    
    public function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('name', 'text')
                ->add('components', 'text')
                ->end()
                ->with('Price')
                    ->add('smallPizza', 'integer')
                    ->add('middlePizza', 'integer')
                    ->add('largPizza', 'integer')
                    ->add('xxlPizza', 'integer')
                ->end();
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name', array())
                ->add('components')
                ->add('smallPizza')
                ->add('middlePizza')
                ->add('largPizza')
                ->add('xxlPizza');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->addIdentifier('name')
                ->addIdentifier('components')
                ->addIdentifier('smallPizza')
                ->addIdentifier('middlePizza')
                ->addIdentifier('largPizza')
                ->addIdentifier('xxlPizza')
                ;
    }
    
}
