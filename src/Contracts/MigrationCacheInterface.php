<?php

namespace Soban\LaravelErBlueprint\Contracts;

interface MigrationCacheInterface
{
    public const cached = [];

    public function getRawExtract(
        string $content,
        string $forPattern,
        bool $matchSingle = true,
    ): null|string|array;
}