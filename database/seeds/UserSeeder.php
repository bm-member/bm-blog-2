<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'Mg Mg';
        $user->email = 'mgmg@bm.com';
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
