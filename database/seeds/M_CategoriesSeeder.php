<?php

use Illuminate\Database\Seeder;

class M_CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            'id' => 1,
            'category_name' => 'トップス',
        ]);
        DB::table('m_categories')->insert([
            'id' => 2,
            'category_name' => 'ボトムス',
        ]);
    }
}
