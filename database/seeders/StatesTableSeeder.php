<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // same with use DB;
use App\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        $state = State::firstOrNew(['code' => '01']);
        $state->state_name = 'Johor';
        $state->save();

        $state = State::firstOrNew(['code' => '02']);
        $state->state_name = 'Kedah';
        $state->save();

        $state = State::firstOrNew(['code' => '03']);
        $state->state_name = 'Kelantan';
        $state->save();

        $state = State::firstOrNew(['code' => '04']);
        $state->state_name = 'Melaka';
        $state->save();

        $state = State::firstOrNew(['code' => '05']);
        $state->state_name = 'Negeri Sembilan';
        $state->save();

        $state = State::firstOrNew(['code' => '06']);
        $state->state_name = 'Pahang';
        $state->save();

        $state = State::firstOrNew(['code' => '08']);
        $state->state_name = 'Perak';
        $state->save();

        $state = State::firstOrNew(['code' => '09']);
        $state->state_name = 'Perlis';
        $state->save();

        $state = State::firstOrNew(['code' => '10']);
        $state->state_name = 'Selangor';
        $state->save();

        $state = State::firstOrNew(['code' => '07']);
        $state->state_name = 'Pulau Pinang';
        $state->save();

        $state = State::firstOrNew(['code' => '12']);
        $state->state_name = 'Sabah';
        $state->save();

        $state = State::firstOrNew(['code' => '13']);
        $state->state_name = 'Sarawak';
        $state->save();

        $state = State::firstOrNew(['code' => '11']);
        $state->state_name = 'Terengganu';
        $state->save();

        return;


    }
}
