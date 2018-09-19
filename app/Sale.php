<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Sale extends Model
{
    //
    protected $table = 'sales';
    protected $fillable = ['name', 'manager_id', 'summa', 'month', 'created_at'];

    public function manager()
    {
    	return $this->belongsTo(Manager::class);
    }

    public static function getTotalSumm()
    {
    	//$sales = self::all();
        $currentMonth = Carbon::now()->format('m');
        $sales = self::where('month', $currentMonth)->get();
        //dd($sales);
    	$total_summ = 0;
    	foreach($sales as $sale)
    	{
    		$total_summ = $sale->where('month', $currentMonth)->sum('summa');
    		return $total_summ;
    	}
    }
}
