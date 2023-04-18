<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    protected $id='id';
    protected $table='modules';

    public function subModules()
    {
        return $this->hasMany(SubModules::class);
    }
}
