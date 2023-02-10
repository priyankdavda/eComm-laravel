<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            // [
            //     "name"=>'Wallet',
            //     "price"=>'555',
            //     "description"=>'A leather wallet',
            //     "category"=>'Bag',
            //     "gallery"=>'https://m.media-amazon.com/images/I/919V+ZDE2EL._SL1500_.jpg',
            // ],
            // [
            //     "name"=>'Airdopes',
            //     "price"=>'1299',
            //     "description"=>'8hr bettry',
            //     "category"=>'Accessories',
            //     "gallery"=>'https://m.media-amazon.com/images/I/61SUj2aKoEL._SL1500_.jpg',
            // ],
            // [
            //     "name"=>'Laptop',
            //     "price"=>'39000',
            //     "description"=>'8Gb Ram',
            //     "category"=>'Computers',
            //     "gallery"=>'https://m.media-amazon.com/images/I/41LDfnScXZS._SX300_SY300_QL70_FMwebp_.jpg',
            // ],[
            //     "name"=>'Mousepad',
            //     "price"=>'299',
            //     "description"=>'12*12 inches',
            //     "category"=>'Accessories',
            //     "gallery"=>'https://m.media-amazon.com/images/I/919V+ZDE2EL._SL1500_.jpg',
            // ],
            // [
            //     "name"=>'Pen',
            //     "price"=>'369',
            //     "description"=>'Blue Pen',
            //     "category"=>'Accessories',
            //     "gallery"=>'https://m.media-amazon.com/images/I/51pt3rZlqBL._SX522_.jpg',
            // ],
            // [
            //     "name"=>'Watch',
            //     "price"=>'1200',
            //     "description"=>'Sonata 1 Warrantry',
            //     "category"=>'Watch',
            //     "gallery"=>'https://m.media-amazon.com/images/I/61hVGtfIXGL._SL1500_.jpg',
            // ],
            // [
            //     "name"=>'Bag',
            //     "price"=>'699',
            //     "description"=>'A leather Bag',
            //     "category"=>'Bag',
            //     "gallery"=>'https://m.media-amazon.com/images/I/81LAFHbBVkL._UX679_.jpg',
            // ],
            // [
            //     "name"=>'Baby Lotion',
            //     "price"=>'199',
            //     "description"=>'0-5 years',
            //     "category"=>'Skincare',
            //     "gallery"=>'https://m.media-amazon.com/images/I/41uEQWP6SyL._SX300_SY300_QL70_FMwebp_.jpg',
            // ],
            [
                "name"=>'LED Light',
                "price"=>'99',
                "description"=>'USB light',
                "category"=>'Accessories',
                "gallery"=>'https://m.media-amazon.com/images/I/51IEbBI7qBL._SL1500_.jpg',
            ],
            [
                "name"=>'Tool box',
                "price"=>'699',
                "description"=>'SS',
                "category"=>'Accessories',
                "gallery"=>'https://m.media-amazon.com/images/I/81mLZ4KntRL._SX522_.jpg',
            ],
        ]); 
   }
}
