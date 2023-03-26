<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
use App\Models\Cities;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all states from table states
        $state = State::where('code', '01')->first();

        $cities = [
            new Cities(['city_name' => 'Batu Pahat']),
            new Cities(['city_name' => 'Muar']),

        ];
        $state->cities()->saveMany($cities);

        $state = State::where('code', '02')->first();

        $cities = [
            new Cities(['city_name' => 'Sungai Petani']),
            new Cities(['city_name' => 'Alor Setar']),

        ];
        $state->cities()->saveMany($cities);

        $state = State::where('code', '03')->first();

        $cities = [
            new Cities(['city_name' => 'Pasir Mas']),
            new Cities(['city_name' => 'Kota Bahru']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '04')->first();

        $cities = [
            new Cities(['city_name' => 'Melaka City']),
            new Cities(['city_name' => 'Alor Gajah']),

        ];
        $state->cities()->saveMany($cities);

        $state = State::where('code', '05')->first();

        $cities = [
            new Cities(['city_name' => 'Seremban']),
            new Cities(['city_name' => 'Nilai']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '06')->first();

        $cities = [
            new Cities(['city_name' => 'Kuantan']),
            new Cities(['city_name' => 'Pekan']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '08')->first();

        $cities = [
            new Cities(['city_name' => 'Ipoh']),
            new Cities(['city_name' => 'Taiping']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '09')->first();

        $cities = [
            new Cities(['city_name' => 'Arau']),
            new Cities(['city_name' => 'Kangar']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '07')->first();

        $cities = [
            new Cities(['city_name' => 'Butterworth']),
            new Cities(['city_name' => 'Georgetown']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '12')->first();

        $cities = [
            new Cities(['city_name' => 'Kota Kinabalu']),
            new Cities(['city_name' => 'Tawau']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '13')->first();

        $cities = [
            new Cities(['city_name' => 'Miri']),
            new Cities(['city_name' => 'Kuching']),

        ];

        $state->cities()->saveMany($cities);

        $state = State::where('code', '10')->first();

        $cities = [
            new Cities(['city_name' => 'Dengkil']),
            new Cities(['city_name' => 'Shah Alam']),

        ];
        $state->cities()->saveMany($cities);

        $state = State::where('code', '11')->first();

        $cities = [
            new Cities(['city_name' => 'Kemaman']),
            new Cities(['city_name' => 'Dungun']),

        ];

        $state->cities()->saveMany($cities);
    }
}


