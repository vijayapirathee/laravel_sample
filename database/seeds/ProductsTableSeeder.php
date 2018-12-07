<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'PEN','description' => 'An instrument for writing or drawing with ink',
                'price' => '20','visible' => '','sku' =>'','stock_in_hand' => 100,'image' =>'product_category.png'],
            ['name' => 'ERASER','description' => 'A piece of soft rubber or plastic used to rub out something written.',
                'price' => '10','visible' => '','sku' =>'','stock_in_hand' => 50,'image' =>'product_category.png1'],
            ['name' => 'NESTOMALT TIN','description' => 'Nestomalt had been a Malted Food Drink which has been marketed for decades in Sri Lanka',
                'price' => '390','visible' => '','sku' =>'','stock_in_hand' => 20,'image' =>'product_category.png2'],
            ['name' => 'NESCAFE CLASSIC BOTTTLE','description' => 'Nescafé is a brand of coffee made by Nestlé.',
                'price' => '1,500','visible' => '','sku' =>'','stock_in_hand' => 10,'image' =>'product_category.png3'],
            ['name' => 'HIMALAYA MENS GROOMING GIFT PACK ','description' => 'Himalaya Herbals is a range of 100% natural and safe products with rare herbs collected from the foothills of the Himalayas',
                'price' => '1060','visible' => '','sku' =>'','stock_in_hand' => 15,'image' =>'product_category.png4'],
            ['name' => 'OLAY MOISTURISING CREAM ','description' => 'This cream provides long lasting moisturisation and improves skin softness and smoothness to leave it youthful looking.',
                'price' => '900','visible' => '','sku' =>'','stock_in_hand' => 5,'image' =>'product_category.png5'],
            ['name' => 'SANFORD DRY IRON','description' => 'Discover the new Sanford dry iron, It is easy-to-use for your daily ironing becomes simple and easy!',
                'price' => '4400','visible' => '','sku' =>'','stock_in_hand' => 8,'image' =>'product_category.png6'],
            ['name' => 'SANFORD ELECTRIC KETTLE','description' => '1.7 Liters, 360 degree rotational cordless kettle Easy for cleaning, On/off switch on kettle handle.',
                'price' => '2600','visible' => '','sku' =>'','stock_in_hand' => 15,'image' =>'product_category.png7'],
            ['name' => 'COTTON BED SHEET','description' => 'Brighten up your bedroom with this charming bed Sheet Set',
                'price' => '4620','visible' => '','sku' =>'','stock_in_hand' => 10,'image' =>'product_category.png8'],
            ['name' => 'LAVENDER TEA GIFT SET','description' => 'Put the style back into your kitchen with this great ceramic cofee cup set and this is a perfect addition to any home',
                'price' => '420','visible' => '','sku' =>'','stock_in_hand' => 20,'image' =>'product_category.png9'],
        ];

        foreach ($categories as $categories) {
            DB::table('categories')->insert($categories);
        }
    }
}
