<?php
/**
 * Copyright © 2017-2018 Maks Rafalko
 *
 * License: https://opensource.org/licenses/BSD-3-Clause New BSD License
 */

declare(strict_types=1);

namespace Infection\Mutator\Operator;

use Infection\Mutator\Util\Mutator;
use Infection\Visitor\ParentConnectorVisitor;
use PhpParser\Node;

class Continue_ extends Mutator
{
    public function mutate(Node $node)
    {
        return new Node\Stmt\Break_();
    }

    protected function mutatesNode(Node $node): bool
    {
        if (!$node instanceof Node\Stmt\Continue_) {
            return false;
        }

        $parentNode = $node->getAttribute(ParentConnectorVisitor::PARENT_KEY);

        if ($parentNode instanceof Node\Stmt\Case_) {
            return false;
        }

        return true;
    }
}
