<?php

use Illuminate\Database\Seeder;

use App\Model\Train;

use function Ramsey\Uuid\v1;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Firenze',
                'departure_time' => '12:00',
                'arrival_time' => '14:00',
                'train_code' => '12345678',
                'carriages' => '18',
                'in_time' => 1,
                'deleted' => 0,
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Roma',
                'arrival_station' => 'Napoli',
                'departure_time' => '17:00',
                'arrival_time' => '19:00',
                'train_code' => '87654321',
                'carriages' => '22',
                'in_time' => 0,
                'deleted' => 1,
            ],
        ];

        foreach ($trains as $train) {
            $new_train = new Train();

            $new_train->fill($train);

            $new_train->save();
        }
    }
}
