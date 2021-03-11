<?php

namespace Database\Seeders;

use App\Models\Login;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'lxc150896@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'email' => 'lxc@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        Login::insert($data);
    }
}
