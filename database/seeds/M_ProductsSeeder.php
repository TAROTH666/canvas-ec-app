<?php

use Illuminate\Database\Seeder;

class M_ProductsSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      DB::table('m_products')->insert([
         'id' => 1,
         'product_name' => 'ラウンドネックTシャツ',
         'category_id' => 1,
         'price' => 1500,
         'description' => '着心地の良い春夏向けアイテム。',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 1,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 2,
         'product_name' => 'オーバーサイズステンカラーコート',
         'category_id' => 1,
         'price' => 13000,
         'description' => 'トレンドのオーバーサイズのコート。',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 1,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 3,
         'product_name' => 'プレミアムコットンシャツ',
         'category_id' => 1,
         'price' => 3000,
         'description' => '上質な綿のみを使用したシャツです。',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 1,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 4,
         'product_name' => 'アクティブストレッチパンツ',
         'category_id' => 2,
         'price' => 6000,
         'description' => '驚くほどのストレッチ性でアウトドアユースに。',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 2,
         'delete_flag' => ''
      ]);
      DB::table('m_products')->insert([
         'id' => 5,
         'product_name' => 'テーパードパンツ',
         'category_id' => 2,
         'price' => 4000,
         'description' => '太もも周りはゆったり、しかしシルエットはスマートに。',
         'sale_status_id' => 1,
         'product_status_id' => 1,
         'resist_date' => date('Y-m-d H:i:s'),
         'user_id' => 2,
         'delete_flag' => ''
      ]);
   }
}
