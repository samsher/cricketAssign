<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class matchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
           [
                'team_a' => 5,
                'team_b' => 6,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2018)->month(5)->day(15),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
              [
                'team_a' => 5,
                'team_b' => 4,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2019)->month(5)->day(15),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
             [
                'team_a' => 6,
                'team_b' => 4,
                'winner' =>6,
                'match_date' =>Carbon::create()->year(2019)->month(9)->day(15),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'team_a' => 1,
                'team_b' => 2,
                'winner' =>1,
                'match_date' =>Carbon::create()->year(2010)->month(6)->day(15),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_a' => 2,
                'team_b' => 3,
                'winner' =>3,
                'match_date' =>Carbon::create()->year(2020)->month(3)->day(16),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_a' => 1,
                'team_b' => 3,
                'winner' =>1,
                'match_date' =>Carbon::create()->year(2020)->month(9)->day(17),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[

                'team_a' => 2,
                'team_b' => 5,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2020)->month(5)->day(18),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_a' => 5,
                'team_b' => 3,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2015)->month(5)->day(19),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_a' => 1,
                'team_b' => 5,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2014)->month(4)->day(20),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
