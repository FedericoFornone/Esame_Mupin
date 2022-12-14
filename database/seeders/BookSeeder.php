<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ["titolo" => "Errore di Sistema", "autori" => 'Edward Snowden' ,  "casa_editrice" => "Longanesi", "anno_pubblicazione" => 2019, "n_pagine" => 347, "isbn" => 46221674, "note" => " ", "url" => " ", "tag" => " ",],
            ["titolo" => "Il giorno del Bianconiglio", "autori" => 'Alessandro Curioni' ,  "casa_editrice" => "Chiarelettere", "anno_pubblicazione" => 2021, "n_pagine" => 312, "isbn" => 6593758, "note" => " ", "url" => " ", "tag" => " ",],
            ["titolo" => "L'arte dell'hacking", "autori" => 'Kevin D. Mitnick' ,  "casa_editrice" => "Cuzzullo", "anno_pubblicazione" => 2016, "n_pagine" => 390, "isbn" => 8807883, "note" => " ", "url" => " ", "tag" => " ",],
        ];
        foreach ($books as $book) {

            Book::create(
                [
                    'titolo' => $book['titolo'],
                    'autori' => $book['autori'],
                    'casa_editrice' => $book['casa_editrice'],
                    'anno_pubblicazione' => $book['anno_pubblicazione'],
                    'n_pagine' => $book['n_pagine'],
                    'isbn' => $book['isbn'],
                    'note' => $book['note'],
                    'url' => $book['url'],
                    'tag' => $book['tag'],
                ]
            );
        }
    }
}
