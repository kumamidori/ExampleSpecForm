<?php
namespace Kumamidori\ExampleSpecForm;

use BEAR\Package\Bootstrap;
use BEAR\Sunday\Extension\Application\AbstractApp;
use PHPUnit\Framework\TestCase;

class ModuleTest extends TestCase
{
    /**
     * @dataProvider
     */
    public function contextsProvider()
    {
        return [
            ['prod-hal-api-app'],
        ];
    }

    /**
     * @dataProvider contextsProvider
     *
     * @param mixed $contexts
     */
    public function testNewApp($contexts)
    {
        $app = (new Bootstrap())->getApp(__NAMESPACE__, $contexts);
        $this->assertInstanceOf(AbstractApp::class, $app);
    }
}
