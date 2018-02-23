<?php
/**
 * Copyright © 2017-2018 Maks Rafalko
 *
 * License: https://opensource.org/licenses/BSD-3-Clause New BSD License
 */
declare(strict_types=1);

namespace Infection\Tests\Mutator\Arithmetic;

use Infection\Mutator\Arithmetic\BitwiseOr;
use Infection\Mutator\Mutator;
use Infection\Tests\Mutator\AbstractMutatorTestCase;

class BitwiseOrTest extends AbstractMutatorTestCase
{
    protected function getMutator(): Mutator
    {
        return new BitwiseOr();
    }

    /**
     * @dataProvider provideMutationCases
     */
    public function test_mutator($input, $expected = null)
    {
        $this->doTest($input, $expected);
    }

    public function provideMutationCases(): array
    {
        return [
            [
                <<<'PHP'
<?php

1 | 2;
PHP
                ,
                <<<'PHP'
<?php

1 & 2;
PHP
                ,
            ],
        ];
    }
}
