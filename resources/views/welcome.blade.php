@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="/resources/css/app.css">

  <style>
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }

      .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: #6b7280;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
      }
    }
  </style>
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

  <title>Museo MUPIN</title>
</head>


<body class="antialiased">

  <nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;"><br>

    <div class="w3-container title-nav">
      <img src="/resources/photo/logo.png" style="width:90%" alt="Logo">
    </div>

    <div class="w3-bar-block sidebar-nav">
      <a href="{{ route('login') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><span>[Login Amministratore]</span></a>

      <form method="POST" action="/museum">
        @csrf
        <a href="{{ url('museum') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Artefatti (Museo)</a>
      </form>

      <a href="#chi_siamo" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Chi siamo?</a>
      <a href="#eventi" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Eventi</a>
    </div>

  </nav>

  <!-- !PAGE CONTENT! -->
  <main style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" id="showcase">
      <h1 class="w3-xxxlarge"><b>ARTEFATTI</b></h1>
    </div>

    <p class="desc">Gli artefatti che il Museo conserva sono: <span>Computer - Riviste - Software - Libri - Periferiche</span></p>
    <br>
    <!-- Photo grid (modal) -->
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


    <!-- CHI SIAMO -->
    <div class="w3-container" id="chi_siamo" style="margin-top:75px">
      <h1 class="w3-xxxlarge"><b>CHI SIAMO?</b></h1>
      <p>Vi raccontiamo la Storia dell'Informatica</p>
      <p>La storia dell’Informatica è la storia di buona parte delle cose con cui viviamo quotidianamente. Dal computer a Internet agli smartphone; dai video in streaming, alla formazione online e ai social network. Conoscendo e comprendendo la storia dell’Informatica siamo in grado di capire come si sviluppa e come cambia il mondo di oggi.</p>
      <p>Il Museo Piemontese dell’Informatica è dedicato alla storia dell’informatica.
        Il Museo Piemontese dell’Informatica è costituito da un insieme di collezioni, donate dai suoi soci fondatori, e da collezioni che sono state aggiunte successivamente.
        L’archivio del museo consta attualmente in oltre 6000 calcolatori, dai mainframe ai mini computer, dai personal agli home computer, dai coin-op alle console.</p>
        <div class="image-section">
        <img src="/resources/photo/content-mupin4.jpg" style="width:30%" alt="Logo">
        <img src="/resources/photo/content-mupin3.jpg" style="width:30%" alt="Logo">
        <img src="/resources/photo/content-mupin2.png" style="width:30%" alt="Logo">
      </div>
    </div>
    </div>


    <!--SEZIONE EVENTI -->
    <div class="w3-container" id="eventi" style="margin-top:75px">
      <h1 class="w3-xxxlarge"><b>EVENTI</b></h1>
      <p>il Mupin organizza degli eventi per ampliare la scoperta tecnologica.</p>
      <p>Dalla sua nascita, il Museo Piemontese dell’Informatica si è distinto per le tematiche di genere aderendo all’iniziativa Ada Lovelace Day: giornata mondiale dedicata alle donne e ai loro successi in ambito scientifico, tecnologico, ingegneristico e matematico.
        Dopo le esperienze acquisite con la partecipazione alla Notte dei Ricercatori, il Museo Piemontese dell’Informatica, a inizio 2015, ha avviato attività divulgative prettamente orientate all’infanzia, aderendo all’iniziativa CoderDojo della CoderDojo Foundation e creando il gruppo torinese: CoderDojo Torino.
      </p>
      <p>Il Museo Piemontese dell’Informatica organizza anche eventi di ampio respiro internazionale come A bit of [hi]story, incentrato su esposizione, conferenze e laboratori. Ogni mese, inoltre, organizza incontri tematici in locali in cui si possa mangiare e bere qualcosa mentre si discute. Questi eventi sono denominati A bit of beer.
      </p>
      <p><b>Questi sono gli eventi in corso</b>:</p>
    </div>


    <!-- EVENTI -->
    <a href="https://www.mupin.it/ada-lovelace-day-italia/" class="w3-col m4">
      <div class="event w3-container">
        <h2><b>"Lovelace Day"</b></h2>
        <p class="w3-opacity">27 Settembre - 10 Ottobre</p>
        <p>L’Ada Lovelace Day è un evento internazionale dedicato alle donne e ai loro risultati in ambito scientifico, tecnologico ingegneristico e matematico.</p>
      </div>
    </a>

    <a href="https://www.mupin.it/umani-e-macchine/" class="w3-col m4">
      <div class="event w3-container">
        <h2><b>"Videogame, Arte e oltre"</b></h2>
        <p class="w3-opacity">2 Settembre - 28 Settembre</p>
        <p>Alla Venaria Reale la grande mostra in cui vengono esposti videogame arte e molto altro ancora, con la partecipazione del Mupin e di molti professionisti.</p>
      </div>
    </a>

    <a href="https://www.mupin.it/a-bit-of-history/" class="w3-col m4">
      <div class="event w3-container">
        <h2><b>"A bit of [hi]story"</b></h2>
        <p class="w3-opacity">12 Settembre - 30 Settembre</p>
        <p>A bit of [hi]story è il festival dell’innovazione organizzato dall’associazione culturale Museo Piemontese dell’Informatica che si svolge ogni anno a partire dal 2016.</p>
      </div>
    </a>

  </main>


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