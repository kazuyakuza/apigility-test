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
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'apitest.rest.example',
            1 => 'apitest.rpc.ping',
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
            'collection_class' => \apitest\V1\Rest\Example\ExampleCollection::class,
            'service_name' => 'example',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'apitest\\V1\\Rest\\Example\\Controller' => 'HalJson',
            'apitest\\V1\\Rpc\\Ping\\Controller' => 'Json',
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
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \apitest\V1\Rest\Example\ExampleEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example',
                'route_identifier_name' => 'example_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \apitest\V1\Rest\Example\ExampleCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'apitest.rest.example',
                'route_identifier_name' => 'example_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'apitest\\V1\\Rest\\Example\\ExampleResource' => [
                'adapter_name' => 'local-db-test',
                'table_name' => 'example',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'apitest\\V1\\Rest\\Example\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'apitest\\V1\\Rest\\Example\\ExampleResource\\Table',
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
];
