<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyagerThemesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     */
    public function run(): void
    {

        DB::table('themes')->delete();

        DB::table('themes')->insert([
            0 => [
                'id' => 1,
                'name' => 'Tailwind Theme',
                'folder' => 'tailwind',
                'active' => 1,
                'version' => '1.0',
                'created_at' => '2020-08-23 08:06:45',
                'updated_at' => '2020-08-23 08:06:45',
            ],
        ]);

    }
}
