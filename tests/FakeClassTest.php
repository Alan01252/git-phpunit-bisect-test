<?php
class FakeClassTest extends PHPUnit_Framework_TestCase
{
	private $fakeClass;

	public function setUp()
	{
		$this->fakeClass = new FakeClass();
	}

	public function testGetThreeThings()
	{
		$things = $this->fakeClass->getThreeThings();
		$this->assertEquals(3, sizeof($things));
	}
}
