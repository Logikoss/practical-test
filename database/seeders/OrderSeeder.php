<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'code' => 'AF00001',
            'client_code' => 'LGK',
            'flight_date' => '2022-02-20',
        ];
        $order = Order::create($data);

        $data = [
            'code' => 'AF00002',
            'client_code' => 'LGK',
            'flight_date' => '2022-02-21',
        ];
        $order = Order::create($data);

        $data = [
            'code' => 'AF00003',
            'client_code' => 'LGK',
            'flight_date' => '2022-02-23',
        ];
        $order = Order::create($data);
    }
}
