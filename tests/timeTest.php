<?php 
namespace Ppeerit\Tests\Time;

require_once __DIR__ . '/../lib/Time.php';

use PHPUnit_Framework_TestCase;

class TimeTest extends PHPUnit_Framework_TestCase
{
	public function testNow()
	{
		return Time::week();
	}
}