<?php

use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['id'=>1,'name' => 'FOOD','description' => 'Food is any substance consumed to provide nutritional support for an organism','image' => 'product_category.png','parentid' => 1],
            ['id'=>2,'name' => 'STATIONARY','description' => 'Stationery includes materials to be written on by hand or by equipment such as computer printers ','image' => 'product_category1.png','parentid' => 2],
            ['id'=>3,'name' => 'HOUSEHOLDS','description' => 'Household goods are goods and products used within households','image' => 'product_category2.png','parentid' => 3],
            ['id'=>4,'name' => 'ELECTRONICS','description' => 'Electronics comprises the physics,engineering,technology and applications that deal with the emission,flow and control of electrons in vacuum and matter ','image' => 'product_category3.png','parentid' => 4],
            ['id'=>5,'name' => 'COSMETIC_ITEM','description' => 'Cosmetics applied to the face to enhance its appearance are often called makeup','image' => 'product_category4.png','parentid' => 5],

        ];

        foreach ($categories as $categories) {
            DB::table('categories')->insert($categories);
        }

    }
}
