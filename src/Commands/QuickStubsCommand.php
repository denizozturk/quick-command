<?php

namespace DenizOzturk\QuickCommand\Commands;

use Illuminate\Console\ConfirmableTrait;
use Illuminate\Filesystem\Filesystem;

class QuickStubsCommand extends QuickCommand
{
    use ConfirmableTrait;

    protected $signature = 'quick:publish {--force : Overwrite any existing files}';

    protected $description = 'Publish all quick stubs';

    public function handle()
    {
        if (! is_dir($stubsPath = base_path('stubs'))) {
            (new Filesystem)->makeDirectory($stubsPath);
        }

        foreach ($this->reservedTypes as $type) {
            file_put_contents($stubsPath."/quick.{$type}.stub", file_get_contents(dirname(__DIR__, 2)."/stubs/quick.{$type}.stub"));
        }

        $this->info('Stubs published successfully.');
    }
}
