<?php

use FocalStrategy\KataFramework\Example;
use PHPUnit\Framework\TestCase;

//PHP unit test for the Example class
class ExampleTest extends TestCase
{
    public function testExample()
    {
        $example = new Example();
        $this->assertEquals('Hello World', $example->helloWorld());
    }
}