<?php
return [
    'router' => [
        'routes' => [
            'apitest.rest.example' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/example[/:example_id]',
                    'defaults' => [
                        'controller' => 'apitest\\V1\\Rest\\Example\\Controller',
                    ],
                ],
            ],
            'apitest.rpc.ping' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ping',
                    'defaults' => [
                        'controller' => 'apitest\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ],
                ],
            ],
            'apitest.rest.example2' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/example_2[/:example_2_id]',
                    'defaults' => [
                        'controller' => 'apitest\\V1\\Rest\\Example2\\Controller',
                    ],
                ],
            ],
            'apitest.rest.example_1' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/example_1[/:example_1_id]',
                    'defaults' => [
                        'controller' => 'apitest\\V1\\Rest\\Example_1\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'apitest.rest.example',
            1 => 'apitest.rpc.ping',
            2 => 'apitest.rest.example2',
            3 => 'apitest.rest.example_1',
        ],
    ],
    'zf-rest' => [
        'apitest\\V1\\Rest\\Example\\Controller' => [
            'listener' => 'apitest\\V1\\Rest\\Example\\ExampleResource',
            'route_name' => 'apitest.rest.example',
            'route_identifier_name' => 'example_id',
            'collection_name' => 'example',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \apitest\V1\Rest\Example\ExampleEntity::class,
            'collection_class' => 'apitest\\V1\\Rest\\E',
            'service_name' => 'example',
        ],
        'apitest\\V1\\Rest\\Example2\\Controller' => [
            'listener' => 'apitest\\V1\\Rest\\Example2\\Example2Resource',
            'route_name' => 'apitest.rest.example2',
            'route_identifier_name' => 'example_2_id',
            'collection_name' => 'example_2',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \apitest\V1\Rest\Example2\Example2Entity::class,
            'collection_class' => \apitest\V1\Rest\Example2\Example2Collection::class,
            'service_name' => 'example_2',
        ],
        'apitest\\V1\\Rest\\Example_1\\Controller' => [
            'listener' => \apitest\V1\Rest\Example_1\Example_1Resource::class,
            'route_name' => 'apitest.rest.example_1',
            'route_identifier_name' => 'example_1_id',
            'collection_name' => 'example_1',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \apitest\V1\Rest\Example_1\Example_1Entity::class,
            'collection_class' => \apitest\V1\Rest\Example_1\Example_1Collection::class,
            'service_name' => 'example_1',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'apitest\\V1\\Rest\\Example\\Controller' => 'HalJson',
            'apitest\\V1\\Rpc\\Ping\\Controller' => 'Json',
            'apitest\\V1\\Rest\\Example2\\Controller' => 'HalJson',
            'apitest\\V1\\Rest\\Example_1\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'apitest\\V1\\Rest\\Example\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'apitest\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'apitest\\V1\\Rest\\Example2\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'apitest\\V1\\Rest\\Example_1\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'apitest\\V1\\Rest\\Example\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/json',
            ],
            'apitest\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/json',
            ],
            'apitest\\V1\\Rest\\Example2\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/json',
            ],
            'apitest\\V1\\Rest\\Example_1\\Controller' => [
                0 => 'application/vnd.apitest.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \apitest\V1\Rest\Example\ExampleEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example',
                'route_identifier_name' => 'example_id',
                'hydrator' => \Zend\Hydrator\ObjectProperty::class,
            ],
            \apitest\V1\Rest\Example\ExampleCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example',
                'route_identifier_name' => 'example_id',
                'is_collection' => true,
            ],
            'apitest\\V1\\Rest\\E' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example',
                'route_identifier_name' => 'example_id',
                'is_collection' => true,
            ],
            \apitest\V1\Rest\Example2\Example2Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example2',
                'route_identifier_name' => 'example_2_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \apitest\V1\Rest\Example2\Example2Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example2',
                'route_identifier_name' => 'example_2_id',
                'is_collection' => true,
            ],
            \apitest\V1\Rest\Example_1\Example_1Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example_1',
                'route_identifier_name' => 'example_1_id',
                'hydrator' => \Zend\Hydrator\ObjectProperty::class,
            ],
            \apitest\V1\Rest\Example_1\Example_1Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example_1',
                'route_identifier_name' => 'example_1_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'apitest\\V1\\Rest\\Example\\ExampleResource' => [
                'adapter_name' => 'local-db-test',
                'table_name' => 'example',
                'hydrator_name' => \Zend\Hydrator\ObjectProperty::class,
                'controller_service_name' => 'apitest\\V1\\Rest\\Example\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'apitest\\V1\\Rest\\Example\\ExampleResource\\Table',
            ],
            'apitest\\V1\\Rest\\Example2\\Example2Resource' => [
                'adapter_name' => 'local-db-test',
                'table_name' => 'example_2',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'apitest\\V1\\Rest\\Example2\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'zf-content-validation' => [
        'apitest\\V1\\Rest\\Example\\Controller' => [
            'input_filter' => 'apitest\\V1\\Rest\\Example\\Validator',
        ],
        'apitest\\V1\\Rpc\\Ping\\Controller' => [
            'input_filter' => 'apitest\\V1\\Rpc\\Ping\\Validator',
        ],
        'apitest\\V1\\Rest\\Example2\\Controller' => [
            'input_filter' => 'apitest\\V1\\Rest\\Example2\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'apitest\\V1\\Rest\\Example\\Validator' => [
            0 => [
                'name' => 'test',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'apitest\\V1\\Rpc\\Ping\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ],
        ],
        'apitest\\V1\\Rest\\Example2\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'field1',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '65535',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'field2',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            3 => [
                'name' => 'field3',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            'apitest\\V1\\Rpc\\Ping\\Controller' => \apitest\V1\Rpc\Ping\PingControllerFactory::class,
        ],
    ],
    'zf-rpc' => [
        'apitest\\V1\\Rpc\\Ping\\Controller' => [
            'service_name' => 'Ping',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'apitest.rpc.ping',
        ],
    ],
    'service_manager' => [
        'factories' => [
            \apitest\V1\Rest\Example_1\Example_1Resource::class => \apitest\V1\Rest\Example_1\Example_1ResourceFactory::class,
        ],
    ],
];
