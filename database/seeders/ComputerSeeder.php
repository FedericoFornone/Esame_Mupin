<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $computers = [
            [
                "modello" => "Commodore64",
                "anno" => 1982,
                "cpu" => "MOS Technology 6510/8500",
                "velocita" => 1.02,
                "memoria" => "20 kb",
                "hard_disk" => "Azure",
                "os" => "Linux",
                "note" => "Fu immesso sul mercato due anni dopo il Commodore VIC-20...",
                "url" => " ",
                "tag" => "64, Retrò",
            ],

            [
                "modello" => "Macintosh Plus",
                "anno" => 1986,
                "cpu" => "Cask Bujuri 0034/6000",
                "velocita" => 1.32,
                "memoria" => "30 kb",
                "hard_disk" => "Complex",
                "os" => "IOS",
                "note" => "È stato commercializzato come evoluzione del primo Macintosh...",
                "url" => " ",
                "tag" => "Mac, Apple",
            ],

            [
                "modello" => "Amstrad PPC 512",
                "anno" => 1990,
                "cpu" => "Dev Devli",
                "velocita" => 2.01,
                "memoria" => "50 mb",
                "hard_disk" => "Jepxin",
                "os" => "WIndows",
                "note" => "Il primo computer portatile compatibile IBM PC realizzati da Amstrad...",
                "url" => " ",
                "tag" => "Retrò, Win",
            ],
        ];
        foreach ($computers as $computer) {

            Computer::create(
                [
                    'modello' => $computer['modello'],
                    'anno' => $computer['anno'],
                    'cpu' => $computer['cpu'],
                    'velocita' => $computer['velocita'],
                    'memoria' => $computer['memoria'],
                    'hard_disk' => $computer['hard_disk'],
                    'os' => $computer['os'],
                    'note' => $computer['note'],
                    'url' => $computer['url'],
                    'tag' => $computer['tag'],
                ]
            );
        }
    }
}
