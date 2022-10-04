<?php

namespace Database\Seeders;

use App\Models\Peripheral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeripheralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peripherals = [
            [
                "modello" => "Tastiera Logitec",
                "tipologia" => 'input',
                "note" => " ",
                "url" => " ",
                "tag" => " ",
            ],

            [
                "modello" => "Cuffie della Smermax",
                "tipologia" => 'output',
                "note" => " ",
                "url" => " ",
                "tag" => " ",
            ],

            [
                "modello" => "Proiettore Samsung",
                "tipologia" => 'input',
                "note" => " ",
                "url" => " ",
                "tag" => " ",
            ],

        ];
        foreach ($peripherals as $peripheral) {

            Peripheral::create(
                [
                    'modello' => $peripheral['modello'],
                    'tipologia' => $peripheral['tipologia'],
                    'note' => $peripheral['note'],
                    'url' => $peripheral['url'],
                    'tag' => $peripheral['tag'],
                ]
            );
        }
    }
}
