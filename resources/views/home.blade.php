@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="/resources/css/app.css">

  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Poppins", sans-serif
    }

    .w3-half img {
      margin-bottom: -6px;
      margin-top: 16px;
      opacity: 0.8;
      cursor: pointer
    }

    .w3-half img:hover {
      opacity: 1
    }
  </style>

  <title>Sezione Amministratori</title>
</head>


<body>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container title-amm">
      <img src="/resources/photo/logo.png" style="width:90%" alt="Logo">
      <h4>Amministratore</h4>
    </div>
    <div class="w3-bar-block sidebar-nav">
      <a href="{{ route('museum.create') }}" class="w3-bar-item w3-button w3-hover-white">Nuovo Artefatto</a>
      <a href="{{ route('museum.index') }}" " class=" w3-bar-item w3-button w3-hover-white">Artefatti (Museo)</a>
      <a href="#services" class="w3-bar-item w3-button w3-hover-white">Chi Siamo?</a>
      <a href="#designers" class="w3-bar-item w3-button w3-hover-white">Eventi</a>
    </div>
  </nav>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" id="showcase">
      <h1 class="w3-xxxlarge w3-text-red"><b>ARTEFATTI</b></h1>
    </div>

    <p class="desc">Gli artefatti che il Museo conserva sono: <span>Computer - Riviste - Software - Libri - Periferiche</span></p>
    <br>

    <!-- Griglia photo-->
    <div class="w5-row-padding">
      <div>
        <img src="/resources/photo/Computer.jpg" style="width:18%" onclick="onClick(this)" alt="Computer">
        <img src="/resources/photo/Rivista.jpg" style="width:18%" onclick="onClick(this)" alt="Riviste">
        <img src="/resources/photo/Software.jpg" style="width:18%" onclick="onClick(this)" alt="Software">
        <img src="/resources/photo/Libro.jpg" style="width:18%" onclick="onClick(this)" alt="Libri">
        <img src="/resources/photo/Periferiche.jpg" style="width:18%" onclick="onClick(this)" alt="Periferiche">
      </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
      <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption"></p>
      </div>
    </div>

    <!-- Services -->
    <div class="w3-container" id="services" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>CHI SIAMO?</b></h1>
      <p>Vi raccontiamo la Storia dell'Informatica</p>
      <p>La storia dell’Informatica è la storia di buona parte delle cose con cui viviamo quotidianamente. Dal computer a Internet agli smartphone; dai video in streaming, alla formazione online e ai social network. Conoscendo e comprendendo la storia dell’Informatica siamo in grado di capire come si sviluppa e come cambia il mondo di oggi.</p>
      <p>Il Museo Piemontese dell’Informatica è dedicato alla storia dell’informatica.
        Il Museo Piemontese dell’Informatica è costituito da un insieme di collezioni, donate dai suoi soci fondatori, e da collezioni che sono state aggiunte successivamente.
        L’archivio del museo consta attualmente in oltre 6000 calcolatori, dai mainframe ai mini computer, dai personal agli home computer, dai coin-op alle console.</p>
    </div>

    <!-- Designers -->
    <div class="w3-container" id="designers" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>EVENTI</b></h1>
      <p>il Mupin organizza degli eventi per ampliare la scoperta tecnologica.</p>
      <p>Dalla sua nascita, il Museo Piemontese dell’Informatica si è distinto per le tematiche di genere aderendo all’iniziativa Ada Lovelace Day: giornata mondiale dedicata alle donne e ai loro successi in ambito scientifico, tecnologico, ingegneristico e matematico.
        Dopo le esperienze acquisite con la partecipazione alla Notte dei Ricercatori, il Museo Piemontese dell’Informatica, a inizio 2015, ha avviato attività divulgative prettamente orientate all’infanzia, aderendo all’iniziativa CoderDojo della CoderDojo Foundation e creando il gruppo torinese: CoderDojo Torino.
      </p>
      <p>Il Museo Piemontese dell’Informatica organizza anche eventi di ampio respiro internazionale come A bit of [hi]story, incentrato su esposizione, conferenze e laboratori. Ogni mese, inoltre, organizza incontri tematici in locali in cui si possa mangiare e bere qualcosa mentre si discute. Questi eventi sono denominati A bit of beer.
      </p>
      <p><b>Questi sono gli eventi in corso</b>:</p>
    </div>



    <!-- Event -->
    <div class="w3-row-padding w3-grayscale">
      <div class="w3-col m4 w3-margin-bottom">
        <div class="w3-light-grey">
          <div class="w3-container">
            <a href="https://www.mupin.it/ada-lovelace-day-italia/"><b>Lovelace Day</b></a>
            <p class="w3-opacity">27 Settembre - 10 Ottobre</p>
            <p>L’Ada Lovelace Day è un evento internazionale dedicato alle donne e ai loro risultati in ambito scientifico, tecnologico ingegneristico e matematico.</p>
          </div>
        </div>

      </div>
      <div class="w3-col m4 w3-margin-bottom">
        <div class="w3-light-grey">
          <div class="w3-container">
            <a href="https://www.mupin.it/umani-e-macchine/"><b>Videogame, Arte e oltre</b></a>
            <p class="w3-opacity">2 Settembre - 28 Settembre</p>
            <p>Alla Venaria Reale la grande mostra in cui vengono esposti videogame arte e molto altro ancora, con la partecipazione del Mupin e di molti professionisti.</p>
          </div>
        </div>
      </div>

      <div class="w3-col m4 w3-margin-bottom">
        <div class="w3-light-grey">
          <div class="w3-container">
            <a href="https://www.mupin.it/a-bit-of-history/"><b>A bit of [hi]story</b></a>
            <p class="w3-opacity">12 Settembre - 30 Settembre</p>
            <p>A bit of [hi]story è il festival dell’innovazione organizzato dall’associazione culturale Museo Piemontese dell’Informatica che si svolge ogni anno a partire dal 2016.</p>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Script to open and close sidebar
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
      }

      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
      }

      // Modal Image Gallery
      function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
      }
    </script>

    @endsection

</body>

</html>