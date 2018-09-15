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

    public static function overall_plan()
    {
    	$overall_plans = self::where('overall_plan','!=', null)->get();
    	$total_overall_plan;
    	foreach($overall_plans as $plan)
        {

            $total_overall_plan = $plan->sum('overall_plan');
            return $total_overall_plan;

        }
    }
}
