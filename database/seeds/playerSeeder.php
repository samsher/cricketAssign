<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class playerSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                'team_id' => 1,
                'first_name' => "Mohammad",
                'last_name' => "Nabi Eisakhil",
                'image_uri' => "nabi_eisakhil.png",
                'player_jersey_no' => 8,
                'country' => "Afganistan",
                'matches' => 98,
                'runs' => 2287,
                'highest_score' => 116,
                'fifties' => 11,
                'hundreds' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'team_id' => 1,
                'first_name' => "Nawroz Khan",
                'last_name' => "Mangal",
                'image_uri' => "mangal.png",
                'player_jersey_no' => 9,
                'country' => "Afganistan",
                'matches' => 49,
                'runs' => 1139,
                'highest_score' => 129,
                'fifties' => 4,
                'hundreds' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'team_id' => 2,
                'first_name' => "Steven Peter",
                'last_name' => "Devereux Smith",
                'image_uri' => "devereux_smith.png",
                'player_jersey_no' => 12,
                'country' => "Australia",
                'matches' => 108,
                'runs' => 3431,
                'highest_score' => 164,
                'fifties' => 19,
                'hundreds' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'team_id' => 2,
                'first_name' => "David Andrew",
                'last_name' => "Warner",
                'image_uri' => "warner.png",
                'player_jersey_no' => 4,
                'country' => "Australia",
                'matches' => 106,
                'runs' => 4343,
                'highest_score' => 179,
                'fifties' => 17,
                'hundreds' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'team_id' => 5,
                'first_name' => "Virat",
                'last_name' => "Kohli",
                'image_uri' => "kohli.png",
                'player_jersey_no' => 18,
                'country' => "India",
                'matches' => 248,
                'runs' => 11867,
                'highest_score' => 183,
                'fifties' => 58,
                'hundreds' => 43,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'team_id' => 5,
                'first_name' => "MS",
                'last_name' => "Dhoni",
                'image_uri' => "dhoni.png",
                'player_jersey_no' => 7,
                'country' => "India",
                'matches' => 350,
                'runs' => 10773,
                'highest_score' => 183,
                'fifties' => 73,
                'hundreds' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'team_id' => 4,
                'first_name' => "Eoin",
                'last_name' => "Morgan",
                'image_uri' => "eoin.jfif",
                'player_jersey_no' => 16,
                'country' => "England",
                'matches' => 236,
                'runs' => 7358,
                'highest_score' => 210,
                'fifties' => 70,
                'hundreds' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'team_id' => 4,
                'first_name' => "Ben",
                'last_name' => "Stokes",
                'image_uri' => "ben.jfif",
                'player_jersey_no' => 55,
                'country' => "England",
                'matches' => 120,
                'runs' => 4000,
                'highest_score' => 93,
                'fifties' =>75 ,
                'hundreds' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'team_id' => 6,
                'first_name' => "Kane",
                'last_name' => "Williamson",
                'image_uri' => "ken.jfif",
                'player_jersey_no' => 16,
                'country' => "England",
                'matches' => 236,
                'runs' => 7358,
                'highest_score' => 210,
                'fifties' => 70,
                'hundreds' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'team_id' => 6,
                'first_name' => "Ross",
                'last_name' => "Taylor",
                'image_uri' => "ros.jfif",
                'player_jersey_no' => 22,
                'country' => "England",
                'matches' => 320,
                'runs' => 6500,
                'highest_score' => 130,
                'fifties' =>80 ,
                'hundreds' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }

}
