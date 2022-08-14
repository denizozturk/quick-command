<?php

it('it can publish stubs', function () {
    $this->artisan('quick:publish');

    foreach (['action', 'contract', 'concern', 'enum', 'helper', 'trait'] as $type) {
        $this->assertFileExists(quickStubPath("quick.{$type}.stub"));
    }
});

it('can make action', function () {
    $this->artisan('quick:make foo --type=action')
        ->assertExitCode(0);

    $this->assertFileExists(quickActionsPath('Foo.php'));
});

it('can make contract', function () {
    $this->artisan('quick:make foo --type=contract')
        ->assertExitCode(0);

    $this->assertFileExists(quickContractsPath('Foo.php'));
});

it('can make concern', function () {
    $this->artisan('quick:make foo --type=concern')
        ->assertExitCode(0);

    $this->assertFileExists(quickConcernsPath('Foo.php'));
});

it('can make enum', function () {
    $this->artisan('quick:make foo --type=enum')
        ->assertExitCode(0);

    $this->assertFileExists(quickEnumsPath('Foo.php'));
});

it('can make helper', function () {
    $this->artisan('quick:make foo --type=helper')
        ->assertExitCode(0);

    $this->assertFileExists(quickHelpersPath('Foo.php'));
});

it('can make trait', function () {
    $this->artisan('quick:make foo --type=trait')
        ->assertExitCode(0);

    $this->assertFileExists(quickTraitsPath('Foo.php'));
});
