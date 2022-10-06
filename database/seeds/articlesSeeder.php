<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class articlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'article_name' => '12 promax Apple',
                'article_type_id' => 3,
                'price' => 570,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'article_name' => '11 promax Apple',
                'article_type_id' => 3,
                'price' => 900,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'article_name' => '13 promax Apple',
                'article_type_id' => 3,
                'price' => 600,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'article_name' => '13 promax Apple',
                'article_type_id' => 3,
                'price' => 1900,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'article_name' => 'A40',
                'article_type_id' => 2,
                'price' => 1600,
                'is_active' => 1,
                'is_deleted' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
