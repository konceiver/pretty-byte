<?php

declare(strict_types=1);

/*
 * This file is part of Pretty Byte.
 *
 * (c) Konceiver Oy <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\PrettyByte\Tests\Analysis;

use GrahamCampbell\Analyzer\AnalysisTrait;
use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
final class AnalysisTest extends TestCase
{
    use AnalysisTrait;

    public function getPaths(): array
    {
        return [
            realpath(__DIR__.'/../../src'),
            realpath(__DIR__),
        ];
    }
}
