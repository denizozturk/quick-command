<?php

namespace DenizOzturk\QuickCommand\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class QuickCommand extends GeneratorCommand
{
    protected $signature = 'quick:make {name} {--type=trait}';

    protected $description = 'This command will create a new quick class';

    protected array $reservedTypes = [
        'action', 'contract', 'concern', 'enum', 'helper', 'trait',
    ];

    public function handle()
    {
        if (! in_array($this->option('type'), $this->reservedTypes)) {
            $this->warn('The type you specified is not a valid type. Please use one of the following: '.implode(', ', $this->reservedTypes));
        } else {
            parent::handle();
        }
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath("/stubs/quick.{$this->option('type')}.stub");
    }

    protected function resolveStubPath($stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/'))) ? $customPath : __DIR__.'/../..'.$stub;
    }

    protected function getNameInput(): string
    {
        return Str::of($this->argument('name'))->trim()->ucfirst();
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return Str::of($this->rootNamespace())
            ->append(Str::of($this->option('type'))->plural()->ucfirst());
    }

    protected function replaceClass($stub, $name): string
    {
        return Str::replace("{{{$this->option('type')}_name}}", Str::ucfirst($this->argument('name')), $stub);
    }
}
