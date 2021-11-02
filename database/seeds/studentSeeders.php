<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class studentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            'Name' => Str::random(10),
            'Class' => Str::random(3),
            'Roll' => Str::random(2),
        ]);
    }
}
