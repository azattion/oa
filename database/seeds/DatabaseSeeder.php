<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('products')->delete();

        // $this->call('UserTableSeeder');
        for ($i = 1; $i <= 10; $i++) {
            \App\Products::create(
                [
                    'name' => 'Item ' . $i,
                    'slug' => 'item-' . $i,
                    'cat_id' => 1,
                    'amount' => 2 * $i,
                    'desc' => 'Test test test'
                ]
            );
        }
        \App\Category::create(
            [
                'name' => 'Обувь',
                'slug' => 'obuv'
            ],
            [
                'name' => 'Куртки',
                'slug' => 'curtki'
            ],
            [
                'name' => 'Рубашки',
                'slug' => 'rubashki'
            ]
        );
        $this->command->info('table seeded!');
    }

}
