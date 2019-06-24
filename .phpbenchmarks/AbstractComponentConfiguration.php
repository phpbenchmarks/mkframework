<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 2;
    }

    public static function getComponentName(): string
    {
        return 'mkframework';
    }

    public static function getComponentSlug(): string
    {
        return 'mkframework';
    }

    public static function isPhp56Enabled(): bool
    {
        return true;
    }

    public static function isPhp70Enabled(): bool
    {
        return true;
    }

    public static function isPhp71Enabled(): bool
    {
        return true;
    }

    public static function isPhp72Enabled(): bool
    {
        return true;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'helloworld';
    }

    public static function getCoreDependencyName(): string
    {
        return 'mkframework/mkframework-lib';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 4;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 133;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 0;
    }

    public static function getBenchmarkType(): int
    {
        return 1;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/mkframework-common/blob/mkframework_4_hello-world/conf/routing.php',
            'controller' => 'https://github.com/phpbenchmarks/mkframework-common/blob/mkframework_4_hello-world/module/global/main.php'
        ];
    }
}
