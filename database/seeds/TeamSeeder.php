<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds  for team.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Afghanistan',
                'logo_uri' => 'afghanistan.png',
                'club' =>"Afghanistan Cricket Board",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'name' => 'Australia',
                'logo_uri' => 'australia.png',
                'club' => 'Cricket Australia',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'name' => 'Bangladesh',
                'logo_uri' => 'bangladesh.png',
                'club' => 'Bangladesh Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'England',
                'logo_uri' => 'england.png',
                'club' => 'England and Wales Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'India',
                'logo_uri' => 'india.png',
                'club' => 'Board of Control for Cricket in India',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'New Zealand',
                'logo_uri' => 'newzealand.png',
                'club' => 'New Zealand Cricket',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'Pakistan',
                'logo_uri' => 'pakistan.png',
                'club' => 'Pakistan Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'South Africa',
                'logo_uri' => 'southafrica.png',
                'club' => 'Cricket South Africa',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'Sri Lanka',
                'logo_uri' => 'srilanka.png',
                'club' => 'Sri Lanka Cricket',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'West Indies',
                'logo_uri' => 'westindies.png',
                'club' =>'Cricket West Indies',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
