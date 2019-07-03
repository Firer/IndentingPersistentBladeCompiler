<?php

namespace PrinsFrank\IndentingPersistentBladeCompiler\Tests\Blade;

class BladeIncludeFirstTest extends AbstractBladeTestCase
{
    public function testIncludeFirstsAreCompiled()
    {
        $this->assertEquals('<?php echo $__env->first(["one", "two"], \Illuminate\Support\Arr::except(get_defined_vars(), [\'__data\', \'__path\']) + [\'indenting\' => \'\'])->render(); ?>', $this->compiler->compileString('@includeFirst(["one", "two"])'));
        $this->assertEquals('<?php echo $__env->first(["one", "two"], ["foo" => "bar"], \Illuminate\Support\Arr::except(get_defined_vars(), [\'__data\', \'__path\']) + [\'indenting\' => \'\'])->render(); ?>', $this->compiler->compileString('@includeFirst(["one", "two"], ["foo" => "bar"])'));
    }
}
