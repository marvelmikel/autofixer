<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'c_name'=>'myidea',
                'c_address'=>'mpape',
                'c_phone'=>'090753735',
                'c_email'=>'tset@gmail.com',
                'p_name'=>'marvelous',
                'p_phone'=>'090786735',
                'p_email'=>'bb@gmail.com',
               'username'=>'company',
               'email'=>'admin@itsolutionstuff.com',
                'is_auth'=>'company',
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Aisha',
                'phone'=>'0707253434',
                'city'=>'minna',
               'username'=>'individual',
               'email'=>'user@itsolutionstuff.com',
                'is_auth'=>'individual',
               'password'=> bcrypt('123456'),
            ],
            [
                'username'=>'Admin',
                'email'=>'use@itsolutionstuff.com',
                 'is_auth'=>'admin',
                'password'=> bcrypt('123456'),
             ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
