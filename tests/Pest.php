<?php

use DenizOzturk\QuickCommand\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function quickStubPath($path = ''): string
{
    return base_path('stubs/'.($path ? '/'.$path : ''));
}

function quickActionsPath($path = ''): string
{
    return app_path('Actions'.($path ? '/'.$path : ''));
}

function quickContractsPath($path = ''): string
{
    return app_path('Contracts'.($path ? '/'.$path : ''));
}

function quickConcernsPath($path = ''): string
{
    return app_path('Concerns'.($path ? '/'.$path : ''));
}

function quickEnumsPath($path = ''): string
{
    return app_path('Enums'.($path ? '/'.$path : ''));
}

function quickHelpersPath($path = ''): string
{
    return app_path('Helpers'.($path ? '/'.$path : ''));
}

function quickTraitsPath($path = ''): string
{
    return app_path('Traits'.($path ? '/'.$path : ''));
}
