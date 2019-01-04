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
        $Doctor->name = 'Dr Saleh Ahmed Tahlil';
        $Doctor->email = 'saleh@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->specialties = 'Cardiologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();
        
        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Md Sakir Ahmed Shaheen';
        $Doctor->email = 'sakir@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->specialties = 'Cardiologist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Dr. Ayesha Chowdhury';
        $Doctor->email = 'ayesha@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->specialties = 'Dentist';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();

        $Doctor = new \App\Doctor();
        $Doctor->name = 'Prof. Dr. MD Aminur Rahman Laskar';
        $Doctor->email = 'aminur@gmail.com';
        $Doctor->address = 'Shagordhigi';
        $Doctor->phone = '01763930980';
        $Doctor->location = 'Sylhet';
        $Doctor->specialties = 'Medicine';
        $Doctor->password = Hash::make('123456');
        $Doctor->save();
    }
}
