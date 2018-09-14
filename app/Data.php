<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //
    protected $table = 'datas';
    protected $fillable = ['name','department','overall_plan', 'actual_plan'];

    public static function getFormula()
    {
    	$datas = self::where('overall_plan', "!=", null)->first();
    	return $datas;
    }
}
