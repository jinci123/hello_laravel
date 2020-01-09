<?php

use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create('zh_CN');
        $data = [];

        for ($i=0;$i<100;$i++){
            $data[]=[
                'username'=>$faker->userName,
            ];
        }
        DB::table('manager')->insert($data);


    }
}
