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

    public static function getTotalSumm()
    {
    	$sales = self::all();
    	$total_summ = 0;
    	foreach($sales as $sale)
    	{
    		$total_summ = $sale->sum('summa');
    		return $total_summ;
    	}
    }
}
