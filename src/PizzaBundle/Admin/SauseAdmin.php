<?php

namespace PizzaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SauseAdmin extends Admin {
    
    public function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('name', 'text')
                ->end()
                ->with('Price')
                ->add('price', 'integer')
                ->end();
                
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name')
                ->add('price');
                
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->addIdentifier('name')
                 ->addIdentifier('price');
    }
    
}
