<?php

class RouterControllerTest extends ControllerTestCase
{

    public function testRootPath()
    {
        $this->dispatch('/');
        $this->assertAction('index');
        $this->assertController('index');
        $this->assertModule('default');
        $this->assertRoute('langmodcontroller');
    }

    public function testMultiLang()
     {
         $this->dispatch('/cs/');
         $this->assertAction('index');
         $this->assertController('index');
         $this->assertModule('default');
         $this->assertRoute('langmodcontroller');

         $this->dispatch('/en/');
         $this->assertAction('index');
         $this->assertController('index');
         $this->assertModule('default');
         $this->assertRoute('langmodcontroller');
        
     }


    public function testModules()
     {
         $this->dispatch('/cs/admin');
         $this->assertAction('index');
         $this->assertController('index');
         $this->assertModule('admin');
         $this->assertRoute('langmodcontroller');
         
         $this->dispatch('/en/admin');
         $this->assertAction('index');
         $this->assertController('index');
         $this->assertModule('admin');
         $this->assertRoute('langmodcontroller');
     }


}

