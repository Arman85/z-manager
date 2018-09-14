<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $table = 'managers';
    protected $fillable = ['name', 'department', 'overall_plan'];

    public function sales()
    {
    	return $this->hasMany(Sale::class);
    }
}
