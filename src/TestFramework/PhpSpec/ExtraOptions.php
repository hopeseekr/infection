<?php
/**
 * Copyright © 2017-2018 Maks Rafalko
 *
 * License: https://opensource.org/licenses/BSD-3-Clause New BSD License
 */

declare(strict_types=1);

namespace Infection\TestFramework\PhpSpec;

use Infection\TestFramework\TestFrameworkExtraOptions;

/**
 * @internal
 */
final class ExtraOptions extends TestFrameworkExtraOptions
{
    protected function getInitialRunOnlyOptions(): array
    {
        return [];
    }
}