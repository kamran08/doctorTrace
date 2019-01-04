<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Abeeden Shourav';
        $user->email = 'abeeden@gmail.com';
        $user->phone = '01763930980';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new \App\User();
        $user->name = 'Rajib  Gandi';
        $user->email = 'rajib@gmail.com';
        $user->phone = '01763930981';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new \App\User();
        $user->name = 'Donald Trump';
        $user->email = 'donald@gmail.com';
        $user->phone = '01763930982';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
