<?php
return [
    'apitest\\V1\\Rest\\Example\\Controller' => [
        'description' => 'an example service',
        'collection' => [
            'description' => 'example collection',
            'GET' => [
                'description' => 'get a colletion of examples',
                'response' => '{
   "_links": {
       "self": {
           "href": "/example"
       },
       "first": {
           "href": "/example?page={page}"
       },
       "prev": {
           "href": "/example?page={page}"
       },
       "next": {
           "href": "/example?page={page}"
       },
       "last": {
           "href": "/example?page={page}"
       }
   }
   "_embedded": {
       "example": [
           {
               "_links": {
                   "self": {
                       "href": "/example[/:example_id]"
                   }
               }
              "test": ""
           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'add a colletion of examples',
                'request' => '{
   "test": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/example[/:example_id]"
       }
   }
   "test": ""
}',
            ],
        ],
        'entity' => [
            'description' => 'example entity',
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/example[/:example_id]"
       }
   }
   "test": ""
}',
            ],
            'PATCH' => [
                'request' => '{
   "test": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/example[/:example_id]"
       }
   }
   "test": ""
}',
            ],
            'PUT' => [
                'request' => '{
   "test": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/example[/:example_id]"
       }
   }
   "test": ""
}',
            ],
            'DELETE' => [
                'request' => '{
   "test": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/example[/:example_id]"
       }
   }
   "test": ""
}',
            ],
        ],
    ],
];
