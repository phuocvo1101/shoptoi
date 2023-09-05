<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $user = new User();
        $user->username = 'admin';
        $user->password = Hash::make('123456');
        $user->email = 'admin@gmail.com';
        $user->level = 1;
        $user->remember_token = 'fbNu71nCvc2JxNAnzi0lRAlIpCHJ87JdXSQTGEgpyxbnoGIKvtJ2OwEabPaD';
        $user->save();
    }
}
