<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Jamal';
        $Doctor->email = 'jamal@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01681189844';
        $Doctor->chamber_location = 'Sylhet';
        $Doctor->sitting_time = '04:00 Pm';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();
    }
}
