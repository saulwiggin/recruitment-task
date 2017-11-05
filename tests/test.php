<?php

namespace \Users\usr\dev\third-bridge\recruitment-task*\CmdLineLoader

use PHPUnit/Framework/TestCase;

class Test extends TestCase
{
    // test is a class
    public function testisclass(){
        $foo = true;
        $this->assertTrue($foo);
    }

    // test one optional input
    public function testOneArgument(){
        $arg1 = 'data/file.csv';
        $this->expectOutputString($this->CmdLineLoader($arg1),'print to command line number of active values: 900');

    }
    //test second optional input
    public function testSecondArgument(){
        $arg2 = "--input='data/file.csv' --output='results/answer.txt";
        $this->expectOutputString($this->CmdLineLoader($arg2)'print answer to results/answer.txt');
    }
}

?>