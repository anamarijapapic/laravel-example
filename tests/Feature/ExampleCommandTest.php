<?php

use AnamarijaPapic\Example\Commands\ExampleCommand;
use Illuminate\Console\Command;
use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    artisan(ExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(Command::SUCCESS);
});

it('can output another value', function () {
    config()->set('example.command_output', 'Something else');

    artisan(ExampleCommand::class)
        ->expectsOutput('Something else')
        ->assertExitCode(Command::SUCCESS);
});
