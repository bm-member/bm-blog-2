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
        $users = [
            [
                'name' => 'Mg Mg',
                'email' => 'mgmg@bm.com'
            ],
            [
                'name' => 'Ag Ag',
                'email' => 'agag@bm.com'
            ],
            [
                'name' => 'Aye Aye',
                'email' => 'ayeaye@bm.com'
            ],
        ];

        foreach($users as $val) {
            $user = new App\User();
            $user->name = $val['name'];
            $user->email = $val['email'];
            $user->password = bcrypt('12345678');
            $user->save();
        }

        
    }
}
