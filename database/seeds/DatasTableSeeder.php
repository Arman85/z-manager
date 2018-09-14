<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('datas')->insert([
        	'name' => 'Макпал',
        	'department' => 'Отдел продаж',
        	'overall_plan' => 10,
        	'actual_plan' => 5
        ]);
    }
}
