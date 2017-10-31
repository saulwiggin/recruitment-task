<?php

//namespace Users\user\dev\thirdBridge\recruitmentTask\tests\

class Test extends \PHPUnit_Framework_TestCase
{
    // test is a class
    public function testisclass(){
        $foo = true;
        $this->assertTrue($foo)
    }

    // test one optional input
    public function testOneArgument(){
        $arg1 = 'data/file.csv';
        $this->expectOutputString('print to command line number of active values: 900');

    }
    //test second optional input
    public function testSecondArgument(){
        $arg1 = "--input='data/file.csv'";
        $arg2 = "--output='results/answer.txt";
        $this->expectOutputString('print answer to results/answer.txt');
    }
}

?>