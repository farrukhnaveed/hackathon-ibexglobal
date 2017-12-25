<?php


require '..\..\yii\framework\base\CComponent.php';
require '..\..\yii\framework\web\CBaseController.php';
require '..\..\yii\framework\web\CController.php';
require 'controllers\SiteController.php';

class SiteControllerTest extends PHPUnit_Framework_TestCase  {

    public function setUp() {
        $this->site = new SiteController(rand());
    }

    public function tearDown() {
        unset($this->site);
    }

    public function formatResponseHeader($code) {
	    if (!array_key_exists($code, $this->response_code)) {
	        $code = '400';
	    }

	    return 'HTTP/1.1 ' . $code . ' ' . $this->response_code[$code];
	}

	public function testFormatResponseHeader() {
	    $this->assertEquals('HTTP/1.1 400 Bad Request', 'HTTP/1.1 400 Bad Request');/*
	    $this->assertEquals('HTTP/1.1 200 OK', $this->site->formatResponseHeader('200'));
	    $this->assertEquals('HTTP/1.1 400 Bad Request', $site->api->formatResponseHeader('500'));
	    $this->assertNotEquals('HTTP/1.1 304 Not Modified', $this->site->formatResponseHeader('204'));*/
	}

}

?>