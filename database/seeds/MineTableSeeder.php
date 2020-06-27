<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mine')->truncate();
        DB::table('mine')->insert([
            'name' => '鈴木 太郎',
            'age'  => '25',
        ]);

        DB::table('mine')->insert([
            'name' => '鈴木 次郎',
            'age'  => '23',
        ]);
    }
}
