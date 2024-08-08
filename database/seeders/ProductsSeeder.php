<?php

namespace Database\Seeders;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create();
        for($i=0;$i<50;$i++){
         products::create([
             'name'=>$Faker->word,
             'img'=>$Faker->imageUrl(),
             'description'=>$Faker->sentence(),
             'price' => $Faker->randomFloat(2, 0, 1000000.00),   
         ]);
        }  
}
}