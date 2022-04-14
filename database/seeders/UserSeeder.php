<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'applied_position' => 'Owner',
            'name' => 'Muhammad Andre Juliansyah',
            'no_ktp'  => '627431313132',
            'contact' => '087885145866',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
            'is_admin' => true,
            'pob' => 'Depok',
            'dob'  => new DateTime,
            'gender' => 'male',
            'religion' => 'Islam',
            'blood_type' => 'O',
            'married_status' => 'single',
            'address_ktp' => 'Jl. Tole Iskandar No.10, RT.01/RW.06, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412',
            'address_home' => 'Jl. Tole Iskandar No.10, RT.01/RW.06, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412',
            'skill' => 'C#, Laravel, CI, VueJs',
            'relative_name' => 'Dadang',
            'relative_contact' => '082246004103',
            'is_approved' => 'Setuju',
            'salary_expectation' => 5000000,
            'created_at'  => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
