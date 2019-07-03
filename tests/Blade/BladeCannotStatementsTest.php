<?php

namespace PrinsFrank\IndentingPersistentBladeCompiler\Tests\Blade;

class BladeCannotStatementsTest extends AbstractBladeTestCase
{
    public function testCannotStatementsAreCompiled(): void
    {
        $string = '@cannot (\'update\', [$post])
breeze
@elsecannot(\'delete\', [$post])
sneeze
@endcannot';
        $expected = '<?php if (app(\\Illuminate\\Contracts\\Auth\\Access\\Gate::class)->denies(\'update\', [$post])): ?>
breeze
<?php elseif (app(\\Illuminate\\Contracts\\Auth\\Access\\Gate::class)->denies(\'delete\', [$post])): ?>
sneeze
<?php endif; ?>';
        $this->assertEquals($expected, $this->compiler->compileString($string));
    }
}
