<?php

namespace Database\Seeders;

use App\Models\Magazine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagazineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $magazines = [
            [
                "titolo" => "Win Magazine",
                "numero" => '21',
                "anno" => "1996",
                "casa_editrice" => 'Zeppari',
                "note" => " ",
                "url" => " ",
                "tag" => " ",
            ],

            [
                "titolo" => "Computer Idea",
                "numero" => '5',
                "anno" => "1992",
                "casa_editrice" =>
                'JoJoReference',
                "note" => " ",
                "url" => " ",
                "tag" => " ",
            ],

            [
                "titolo" => "PC",
                "numero" => '1',
                "anno" => "2000",
                "casa_editrice" => 'Kenshiro',
                "note" => " ",
                "url" => " ",
                "tag" => " ",
            ],

        ];
        foreach ($magazines as $magazine) {

            Magazine::create(
                [
                    'titolo' => $magazine['titolo'],
                    'numero' => $magazine['numero'],
                    'anno' => $magazine['anno'],
                    'casa_editrice' => $magazine['casa_editrice'],
                    'note' => $magazine['note'],
                    'url' => $magazine['url'],
                    'tag' => $magazine['tag'],
                ]
            );
        }
    }
}
