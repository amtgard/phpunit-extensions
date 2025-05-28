### Amtgard PHPUnit Extensions

Adds `self::assertThrows(string $throwableClass, callable $callable)` and `self::assertDoesNotThrow(callable $callable)` assertions.

#### assertThrows()
Takes a throwable classname. The callable must throw the exception and the exception class must match.

#### assertDoesNotThrow()
The callable must not throw.
