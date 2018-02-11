<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2011
 * @copyright Aimeos (aimeos.org), 2014-2017
 */


namespace Aimeos\MW\Session;


require_once __DIR__ . DIRECTORY_SEPARATOR . 'AbstractUserAuthentication';


class Typo3Test extends \PHPUnit\Framework\TestCase
{
	private $object;


	protected function setUp()
	{
		$mock = new \TYPO3\CMS\Core\Authentication\AbstractUserAuthentication();
		$this->object = new \Aimeos\MW\Session\Typo3($mock);
	}


	protected function tearDown()
	{
		unset($this->object);
	}


	public function testGet()
	{
		$this->assertEquals('', $this->object->get('test'));

		$this->object->set('test', '123456789');
		$this->assertEquals('123456789', $this->object->get('test'));
	}


	public function testSet()
	{
		$this->object->set('test', '123');
		$this->assertEquals( '123', $this->object->get( 'test' ) );

		$this->object->set('test', '234');
		$this->assertEquals( '234', $this->object->get( 'test' ) );
	}
}
