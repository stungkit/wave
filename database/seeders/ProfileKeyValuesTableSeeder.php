<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileKeyValuesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     */
    public function run(): void
    {

        DB::table('profile_key_values')->delete();

        DB::table('profile_key_values')->insert([
            0 => [
                'id' => 10,
                'type' => 'text_area',
                'keyvalue_id' => 1,
                'keyvalue_type' => 'users',
                'key' => 'about',
                'value' => 'Hello I am the admin user. You can update this information in the edit profile section. Hope you enjoy using Wave.',
            ],
        ]);

    }
}
