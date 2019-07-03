<?php

namespace PrinsFrank\IndentingPersistentBladeCompiler\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Illuminate\View\Engines\PhpEngine;

class ViewPhpEngineTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function testViewsMayBeProperlyRendered(): void
    {
        $engine = new PhpEngine;
        $this->assertEquals('Hello World
', $engine->get(__DIR__.'/fixtures/basic.php'));
    }
}
