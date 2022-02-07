<?php

use Illuminate\Database\Seeder;
use App\Occupation;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Occupation::create([
          'name' => '専門学生',
        ]);
        
        Occupation::create([
          'name' => '大学生',
        ]);
        
        Occupation::create([
          'name' => '無職',
        ]);
        
        Occupation::create([
          'name' => '社会人',
        ]);
        
    }
}
