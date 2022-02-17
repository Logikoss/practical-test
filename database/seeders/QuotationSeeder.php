<?php

namespace Database\Seeders;

use App\Models\Quotation;
use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'code' => 'Q00001',
            'original_id' => null,
            'order_id' => 1,
            'weight' => '300',
            'cost' => '1000',
            'sale' => '2000',
        ];
        $order = Quotation::create($data);

        $data = [
            'code' => 'Q00001.2',
            'original_id' => 1,
            'order_id' => 1,
            'weight' => '300',
            'cost' => '1100',
            'sale' => '2100',
        ];
        $order = Quotation::create($data);

        $data = [
            'code' => 'Q00001.3',
            'original_id' => 2,
            'order_id' => 1,
            'weight' => '300',
            'cost' => '1200',
            'sale' => '2200',
        ];
        $order = Quotation::create($data);

        $data = [
            'code' => 'Q00001.4',
            'original_id' => 3,
            'order_id' => 1,
            'weight' => '300',
            'cost' => '1300',
            'sale' => '2300',
        ];
        $order = Quotation::create($data);

        $data = [
            'code' => 'Q00002',
            'original_id' => null,
            'order_id' => 2,
            'weight' => '300',
            'cost' => '5000',
            'sale' => '6000',
        ];
        $order = Quotation::create($data);
    }
}
