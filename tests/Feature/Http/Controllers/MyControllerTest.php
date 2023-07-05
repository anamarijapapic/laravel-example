<?php

use AnamarijaPapic\Example\Http\Controllers\MyController;

it('has a route', function () {
    $this->get(action([MyController::class, 'index']))
        ->assertOK()
        ->assertSee('Hi from the package view!');
});
