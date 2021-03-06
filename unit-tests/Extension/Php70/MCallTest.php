<?php

/*
 * This file is part of the Zephir.
 *
 * (c) Zephir Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Extension\Php70;

use PHPUnit\Framework\TestCase;
use Test\Mcall;

class MCallTest extends TestCase
{
    /** @test */
    public function shouldThrowInvalidArgumentExceptionForOptionalBoolean()
    {
        $t = new Mcall();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Parameter 'start' must be of the type bool");

        $t->optionalParameterBoolean('test');
    }

    /** @test */
    public function shouldThrowTypeErrorForOptionalBoolean()
    {
        $t = new Mcall();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Parameter 'start' must be of the type bool");

        $t->optionalParameterBoolean([]);
    }
}
