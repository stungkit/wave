<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     */
    public function run(): void
    {

        DB::table('roles')->delete();

        DB::table('roles')->insert([
            0 => [
                'id' => 1,
                'guard_name' => 'web',
                'name' => 'admin',
                'description' => 'The admin user has full access to all features including the ability to access the admin panel.',
                'created_at' => '2017-11-21 16:23:22',
                'updated_at' => '2017-11-21 16:23:22',
            ],
            1 => [
                'id' => 2,
                'guard_name' => 'web',
                'name' => 'registered',
                'description' => 'This is the default user role. If a user has this role they have created an account; however, they have are not a subscriber.',
                'created_at' => '2017-11-21 16:23:22',
                'updated_at' => '2017-11-21 16:23:22',
            ],
            2 => [
                'id' => 3,
                'guard_name' => 'web',
                'name' => 'basic',
                'description' => 'This is the basic plan role. This role is usually associated with a user who has subscribed to the basic plan.',
                'created_at' => '2017-11-21 16:23:22',
                'updated_at' => '2017-11-21 16:23:22',
            ],
            3 => [
                'id' => 4,
                'guard_name' => 'web',
                'name' => 'premium',
                'description' => 'This is the premium plan role. This role is usually associated with a user who has subscribed to the premium plan.',
                'created_at' => '2018-07-03 05:03:21',
                'updated_at' => '2018-07-03 17:28:44',
            ],
            4 => [
                'id' => 5,
                'guard_name' => 'web',
                'name' => 'pro',
                'description' => 'This is the pro plan role. This role is usually associated with a user who has subscribed to the pro plan.',
                'created_at' => '2018-07-03 16:27:16',
                'updated_at' => '2018-07-03 17:28:38',
            ],
        ]);

    }
}
