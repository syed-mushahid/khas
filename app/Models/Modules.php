<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    protected $id='id';
    protected $table='modules';
    protected $fillable = ['id', 'module_name', 'icon', 'module_route', 'disabled'];

    public function subModules()
    {
        return $this->hasMany(SubModules::class);
    }
}
