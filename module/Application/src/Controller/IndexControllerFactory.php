<?php

namespace Application\Controller;

class IndexControllerFactory
{
    public function __invoke($controllers)
    {
        $objectManager = $controllers->get('doctrine.entitymanager.orm_default');

        return new IndexController($objectManager);
    }
}
