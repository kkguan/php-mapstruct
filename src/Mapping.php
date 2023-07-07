<?php

declare(strict_types=1);

namespace Kkguan\PHPMapstruct;

use Attribute;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Mapping
{
    // TODO
    public function __construct(
        public string $target = '',
        public string $source = '',
        public string $dateFormat = '',
        public string $numberFormat = '',
        public string $constant = '',
        public string $expression = '',
        public string $defaultExpression = '',
        public bool $ignore = false,
    ) {
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    public function getNumberFormat(): string
    {
        return $this->numberFormat;
    }

    public function getConstant(): string
    {
        return $this->constant;
    }

    public function getExpression(): string
    {
        return $this->expression;
    }

    public function getDefaultExpression(): string
    {
        return $this->defaultExpression;
    }

    public function isIgnore(): bool
    {
        return $this->ignore;
    }
}
