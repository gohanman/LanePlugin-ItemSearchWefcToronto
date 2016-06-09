<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new ItemSearchWefcToronto();
    }

    public function testSearch()
    {
        $s = new ItemSearchAll_WEFC_Toronto();
        $this->assertEquals(array(), $s->search('foo'));
    }
}

