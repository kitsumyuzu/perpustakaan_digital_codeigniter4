<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admin@root',
            'password' => md5('kitsuadmin0427'),
            '_level'    => '1',
            'USR_createdBy' => '1'
        ];

        $this -> db -> table('user') -> insert($data);
    }
}