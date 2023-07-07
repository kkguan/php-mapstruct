<?php

declare(strict_types=1);

namespace Kkguan\PHPMapstruct;

use Attribute;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Mapper
{
    public function __construct(
        public array $uses = [],
        public array $imports = [],
        public ?string $componentModel = null,
    ) {
    }
}
