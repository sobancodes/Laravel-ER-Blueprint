<?php

namespace Soban\LaravelErBlueprint\Models;

class Table
{
    public function __construct(
        public string $name = 'unknown',
        public array $columns,
    ) {}
}