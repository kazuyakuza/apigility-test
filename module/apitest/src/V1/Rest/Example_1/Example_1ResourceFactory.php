<?php
namespace apitest\V1\Rest\Example_1;

class Example_1ResourceFactory
{
    public function __invoke($services)
    {
        return new Example_1Resource();
    }
}
