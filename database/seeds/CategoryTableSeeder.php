<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Tien hiep']);
        Category::create(['name' => 'Kiem hiep']);
        Category::create(['name' => 'Huyen huyen']);
        Category::create(['name' => 'Do thi']);
    }
}
