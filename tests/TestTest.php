<?php
class TestTest extends PHPUnit_Framework_TestCase
{
	
	public function testHelloWorld()
	{
		$helloWorld = 'Hello World';

		$this->assertEquals('Hello World', $helloWorld);
	}
}
