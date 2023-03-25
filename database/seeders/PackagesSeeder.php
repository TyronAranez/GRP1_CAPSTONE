<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'packageName' => "SILVER 1",
                'paxOption1' => "50 pax | 50K php",
                'paxOption2' =>  "100 pax | 78K php",
                'courses' => "4",
                'styling1'=> "Thematic backdrop",
                'styling2' => "Centerpieces",
                'styling3' => "CoupleU+2019;s couch",
                'styling4'=> "Lights and sound",
                'styling5'=> "Photo coverage or photobooth",
                'freebies1'=> "Signature Frame",
                'freebies2' => "Wine",
                'freebies3' => "Dove",
            ],

            [
                'packageName' => "SILVER 2",
                'paxOption1' => "50 pax | 75K php",
                'paxOption2' => "100 pax | 92K php",
                'courses' => "5",
                'styling1' => "Thematic backdrop",
                'styling2' => "Centerpieces",
                'styling3' => "Couple+2019;s couch",
                'styling4' => "Lights and sound",
                'styling5' => "Photo coverage or photobooth",
                'freebies1' => "Coffee Station and Donut Wall",
                'freebies2' => "24 pcs. cupcakes",
                'freebies3' => "Signature Frame",
            ],

            [
                'packageName' => "SILVER 3",
                'paxOption1' => "50 pax | 105K php",
                'paxOption2' => "100 pax | 120K php",
                'courses' => "5",
                'styling1' => "Entrance Arch",
                'styling2' => "Reception Styling",
                'styling3' => "Couple+2019;s couch",
                'styling4' => "Bridal bouquet",
                'styling5' => "Photo coverage or photobooth",
                'freebies1' => "Bridal Car or Photobooth",
                'freebies2' => "Coffee and juice station",
                'freebies3' => "Donut wall",
            ]

        ]);
}
}