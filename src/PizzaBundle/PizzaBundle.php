<?php

namespace PizzaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PizzaBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
