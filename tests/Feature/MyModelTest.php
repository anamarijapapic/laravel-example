<?php

use AnamarijaPapic\Example\Models\MyModel;

it('can create a model', function () {
    $myModel = MyModel::factory()->create();
    // dd($myModel);
    $this->assertModelExists($myModel);
});

it('can return the uppercased value of a name', function () {
    /** @var MyModel $myModel */
    $myModel = MyModel::factory()->create(['name' => 'John']);

    expect($myModel->getUppercasedName())->toEqual('JOHN');
});
