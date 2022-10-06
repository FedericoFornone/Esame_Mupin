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
                "numero" => 21,
                "anno" => 2002,
                "casa_editrice" => "Sprea Editori",
                "note" => "Rivista mensile italiana di informatica pubblicata da Sprea Editori...",
                "url" => " ",
                "tag" => "Win, Mgz",
            ],

            [
                "titolo" => "Computer Idea",
                "numero" => 5,
                "anno" => 1992,
                "casa_editrice" => "JoJo",
                "note" => "Rivista italiana di informatica fondata nel 2000 da VNU Business Publications...",
                "url" => " ",
                "tag" => "Idea, Newspaper",
            ],

            [
                "titolo" => "PC",
                "numero" => 1,
                "anno" => 1982,
                "casa_editrice" => "Kenshiro",
                "note" => "Rivista di informatica pubblicata a partire dal gennaio 1982 negli Stati Uniti...",
                "url" => " ",
                "tag" => "Newspaper, Retrò",
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
