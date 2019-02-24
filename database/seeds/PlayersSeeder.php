<?php

use Illuminate\Database\Seeder;

class PlayersSeeder extends Seeder
{
    // public function run()
    // {
    //     factory(App\Player::class,100)->create()
    //           ->each(function($player){
    //               $team = App\Team::inRandomOrder()->first();  
    //               $player->team_id = $team->id; 
    //               $player->save();
                
    //           }); 
    // }  //ovo ne radi iz nekog razloga

    public function run()
    {
        App\Team::all()->each(function (App\Team $t) {
            $t->players()->saveMany(factory(App\Player::class, 11)->make());
        });
    }
    


}
