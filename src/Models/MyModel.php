<?php

namespace AnamarijaPapic\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * AnamarijaPapic\Example\Models\MyModel
 *
 * @property string $name
 */
class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getUppercasedName(): string
    {
        return strtoupper($this->name);
    }
}
