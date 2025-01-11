<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CatalogParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                DB::table('catalogs')->insert([
                    [
                        'name'=>'Художественная литература',
                        'parent_id'=> 0,
                    ],
                    [
                        'name'=>'Нехудожественная литература',
                        'parent_id'=> 0,
                    ],
                ]   
            );
    }
}
