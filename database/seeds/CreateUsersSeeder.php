<?php

use Illuminate\Database\Seeder;
use App\User;

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
               'name'=>'superadmin',
               'email'=>'admin@admin.com',
                'hak_akses'=>'superadmin',
               'password'=> bcrypt('superadmin'),
            ],
            [
               'name'=>'guru',
               'email'=>'guru@guru.com',
                'hak_akses'=>'guru',
               'password'=> bcrypt('guru'),
            ],
            [
               'name'=>'siswa',
               'email'=>'siswa@siswa.com',
                'hak_akses'=>'siswa',
               'password'=> bcrypt('siswa'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
