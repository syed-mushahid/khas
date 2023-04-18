<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModules extends Model
{
    use HasFactory;
    protected $id='id';
    protected $table='sub_modules';
    protected $fillable = ['sub_module_name', 'icon', 'sub_module_route','disabled', 'modules_id', 'id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
