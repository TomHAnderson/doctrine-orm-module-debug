<?php

namespace Db;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'doctrine' => [
        'fixture' => [
            'faker' => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'factories' => [
                    Fixture\FakerFixture::class
                        => InvokableFactory::class,
                ],
            ],
        ],
        'driver' => [
            'db_driver' => [
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\XmlDriver',
                'paths' => [
                    __DIR__ . '/orm',
                ],
            ],
            'orm_default' => [
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
                'drivers' => [
                    'Db\\Entity' => 'db_driver',
                ],
            ],
        ],

        // migrations configuration
        'migrations_configuration' => [
            'orm_default' => [
                'directory' => __DIR__ . '/../src//Migrations',
                'name'      => 'Doctrine Database Migrations',
                'namespace' => 'Db\Migrations',
                'table'     => 'Migrations',
                'column'    => 'version',
            ],
        ],
    ],
];
