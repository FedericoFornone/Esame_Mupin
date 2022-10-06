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
                "tipologia" => "input",
                "note" => "Periferica utilizzata in input per scrivere...",
                "url" => " ",
                "tag" => "Keyboard, Logitec",
            ],

            [
                "modello" => "Cuffie Smermax",
                "tipologia" => "output",
                "note" => "Cuffie di ultima generazione per ascoltare ogni tipo di...",
                "url" => " ",
                "tag" => "Headphones, Sound",
            ],

            [
                "modello" => "Proiettore Samsung",
                "tipologia" => "input",
                "note" => "Nel campo della proiezione video non ci sono...",
                "url" => " ",
                "tag" => "Samsung, Video",
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
