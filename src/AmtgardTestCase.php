<?php

namespace Amtgard\PHPUnit;

use PHPUnit\Framework\TestCase;

class AmtgardTestCase extends TestCase
{
    public static function assertThrows(string $throwableClass, callable $callable) {
        try {
            call_user_func($callable);
            self::assertThat(false, self::isTrue(), "Callable did not throw.");
        } catch (\Throwable $e) {
            $caughtClass = $e::class;
            self::assertThat($throwableClass == $e,
                self::isTrue(),
                "Expectable throwable of class of $throwableClass but instead caught $e");
        }
    }

    public static function assertDoesNotThrow(callable $callable) {
        try {
            call_user_func($callable);
            self::assertThat(true, self::isTrue(), "Callable did not throw");
        } catch (\Throwable $e) {
            $caughtClass = get_class($e);
            self::assertThat(false,
                self::isTrue(),
                "Expected callable to not throw but instead threw $e");
        }
    }
}