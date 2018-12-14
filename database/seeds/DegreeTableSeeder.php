<?php

use Illuminate\Database\Seeder;

class DegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Degree = new \App\Degree();
        $Degree->name = 'MBBS';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'BMBS';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MBChB';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MBBCh';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MD';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'Dr.MuD';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'Dr.Med';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'DO';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MCM';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MMSc';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MM';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MPhil';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MS';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'MSc';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'DCM';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'DClinSurg';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'DMSc';
        $Degree->save();
        $Degree = new \App\Degree();
        $Degree->name = 'DS';
        $Degree->save();

        
    }
}
