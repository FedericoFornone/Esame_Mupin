<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $softwares = [
            [
                "titolo" => "Adobe Acrobat",
                "os" => "Windows/Linux",
                "tipologia" => "multiservizio",
                "supporto" => "Tutte le versioni",
                "note" => "Applicazione desktop realizzata per creare e modificare file in formato PDF...",
                "url" => " ",
                "tag" => "Adobe, Service",
            ],

            [
                "titolo" => "Microsoft Office",
                "os" => "Windows/Linux",
                "tipologia" => "multiservizio",
                "supporto" => "Tutte le versioni",
                "note" => "Suite di applicazioni desktop, server e servizi di tipo office automation...",
                "url" => " ",
                "tag" => "Office, Pacchetto",
            ],

            [
                "titolo" => "Autocad",
                "os" => "Windows/Linux/Ios",
                "tipologia" => "progettazione",
                "supporto" => "Tutte le versioni",
                "note" => "Programma di disegno tecnico assistito dal computer ideato da Autodesk...",
                "url" => " ",
                "tag" => "Progettazione, Service",
            ],


        ];
        foreach ($softwares as $software) {

            Software::create(
                [
                    'titolo' => $software['titolo'],
                    'os' => $software['os'],
                    'tipologia' => $software['tipologia'],
                    'supporto' => $software['supporto'],
                    'note' => $software['note'],
                    'url' => $software['url'],
                    'tag' => $software['tag'],
                ]
            );
        }
    }
}
