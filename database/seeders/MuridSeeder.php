<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('murids')->insert(array(
      array(
        'nama'=> 'najla',
        'phone' => '087654434',
      ),
      array(
        'nama'=> 'najel',
        'phone' => '0899388789',
      ),
      array(
        'nama'=> 'nafila',
        'phone' => '08768173781',
      ),
      ));
    }
}
