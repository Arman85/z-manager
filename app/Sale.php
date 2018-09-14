<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $table = 'sales';
    protected $fillable = ['name', 'manager_id', 'summa'];

    public function manager()
    {
    	return $this->belongsTo(Manager::class);
    }
}
