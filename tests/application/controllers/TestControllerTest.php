<?php

class RouterControllerTest extends ControllerTestCase
{

    public function setUp()
    {
        /* Setup Routine */
    }

    public function tearDown()
    {
        /* Tear Down Routine */
    }


    public function testRootPath()
    {
        $this->dispatch('/');
        $this->assertAction('index');
        $this->assertController('index');
        $this->assertModule('default');

    }

}

