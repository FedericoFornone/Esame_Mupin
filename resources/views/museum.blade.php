@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    h5,
    h6 {
      font-family: "Raleway", sans-serif
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

  <title>Artefatti MUPIN</title>
</head>


<body class="antialiased">

  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container title-nav">
      <img src="/resources/photo/logo.png" style="width:90%" alt="Logo">
    </div>
    @guest
    @if (Route::has('login'))
    <div class="w3-bar-block sidebar-nav">
      <a href="{{ url('') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    </div>
    @endif

    @else
    <div class="w3-bar-block sidebar-nav">
      <a href="{{ route('home') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a></a>
      <a href="{{ route('museum.create') }}" class="w3-bar-item w3-button w3-hover-white">Nuovo Artefatto</a>
    </div>
    @endguest
  </nav>


  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container">
      <h1 class="w3-xxxlarge w3-text-red"><b>ARTEFATTI</b></h1>
    </div>

    <!-- Header -->
    <header id="filter">
      <div class="w3-container">
        <div class="w3-section w3-bottombar w3-padding-16">
          <span class="w3-margin-right">Filtro:</span>
          <button class="filter-btn w3-btn w3-red w3-hide-small" onclick="filterSelection('all')">Tutto</button>
          <button class="filter-btn w3-btn w3-red w3-hide-small" onclick="filterSelection('computer')">Computer</button>
          <button class="filter-btn w3-btn w3-red w3-hide-small" onclick="filterSelection('rivista')">Riviste</button>
          <button class="filter-btn w3-btn w3-red w3-hide-small" onclick="filterSelection('software')">Software</button>
          <button class="filter-btn w3-btn w3-red w3-hide-small" onclick="filterSelection('libro')">Libri</button>
          <button class="filter-btn w3-btn w3-red w3-hide-small" onclick="filterSelection('periferica')">Periferiche</button>
        </div>
      </div>

      <!-- INPUT RICERCA -->
      <div class="w3-container w3-padding-16">
        <span class="w3-margin-right">Ricerca:</span>
        <input id="searchbar" onkeyup="search_artifact()" type="text" name="search" placeholder="Cerca Artefatti per nome">
      </div>
    </header>


    <ul id='list' class="container-filter">
      <!-- Computer Grid-->
      <div class="artifact filterDiv computer w3-row-padding row-item">
        <h1><b>Computer</b></h1>
        @foreach ($computers as $computer)
        <div class="filterDiv computer w3-third w3-margin-bottom">
          <li class="w3-container w3-white">
            <img src="/resources/photo/Computer.jpg" alt="Norway" style="width:70%" class="image w3-hover-opacity" onclick="onClick(this)" alt="Computer">
            <h2><b>{{$computer->modello}}</b></h2>
            <h5><b>Modello:</b> {{$computer->modello}}</h5>
            <h5><b>Anno:</b> {{$computer->anno}}</h5>
            <h5><b>Sistema Operativo:</b> {{$computer->os}}</h5>
            <h5><b>Velocità:</b> {{$computer->velocita}}Hz</h5>
            <h5><b>Memoria:</b> {{$computer->memoria}}</h5>
            <h5><b>CPU:</b> {{$computer->cpu}}</h5>
            <h5><b>Note:</b> {{$computer->note}}</h5>
            <h5><b>URL:</b> {{$computer->url}}</h5>
            <h5><b>Tag:</b> {{$computer->tag}}</h5>

            @guest
            @if (Route::has('login'))
            @endif
            @else
            <a class="btn w3-btn w3-red w3-hide-small" href="{{ route('computer.edit', $computer->id) }}">Modifica</a>
            <form class="crud-btn" action="{{ route('computer.destroy', $computer->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn w3-btn w3-red w3-hide-small">Elimina</button>
            </form>
            @endguest

          </li>
        </div>
        @endforeach
      </div>



      <!--Riviste Grid-->
      <div class="artifact filterDiv rivista w3-row-padding row-item">
        <h1><b>Riviste</b></h1>
        @foreach ($magazines as $magazine)
        <div class="filterDiv rivista w3-third w3-margin-bottom">
          <li class=" w3-container w3-white">
            <img src="/resources/photo/Rivista.jpg" alt="Norway" style="width:70%" onclick="onClick(this)" alt="Computer">
            <h2><b>{{$magazine->titolo}}</b></h2>
            <h5><b>Numero:</b> {{$magazine->numero}}</h5>
            <h5><b>Anno:</b> {{$magazine->anno}}</h5>
            <h5><b>Casa Editrice:</b> {{$magazine->casa_editrice}}</h5>
            <h5><b>Casa Editrice:</b> {{$magazine->casa_editrice}}</h5>
            <h5><b>Note:</b> {{$magazine->note}}</h5>
            <h5><b>URL:</b> {{$magazine->url}}</h5>
            <h5><b>Tag:</b> {{$magazine->tag}}</h5>

            @guest
            @if (Route::has('login'))
            @endif
            @else
            <a class="btn w3-btn w3-red w3-hide-small" href="{{ route('magazine.edit', $magazine->id) }}">Modifica</a>
            <form class="crud-btn" action="{{ route('magazine.destroy', $magazine->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn w3-btn w3-red w3-hide-small">Elimina</button>
            </form>
            @endguest

          </li>
        </div>
        @endforeach
      </div>



      <!--Software Grid-->
      <div class="artifact filterDiv software w3-row-padding row-item">
        <h1><b>Software</b></h1>
        @foreach ($softwares as $software)
        <div class="filterDiv software w3-third w3-margin-bottom">
          <li class=" w3-container w3-white">
            <img src="/resources/photo/Software.jpg" alt="Norway" style="width:70%" onclick="onClick(this)" alt="Computer">
            <h2><b>{{$software->titolo}}</b></h2>
            <h5><b>Sistema Operativo:</b> {{$software->os}}</h5>
            <h5><b>Tipologia:</b> {{$software->tipologia}}</h5>
            <h5><b>Supporto:</b> {{$software->supporto}}</h5>
            <h5><b>Note:</b> {{$software->note}}</h5>
            <h5><b>URL:</b> {{$software->url}}</h5>
            <h5><b>Tag:</b> {{$software->tag}}</h5>

            @guest
            @if (Route::has('login'))
            @endif
            @else
            <a class="btn w3-btn w3-red w3-hide-small" href="{{ route('software.edit', $software->id) }}">Modifica</a>
            <form class="crud-btn" action="{{ route('software.destroy', $software->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn w3-btn w3-red w3-hide-small">Elimina</button>
            </form>
            @endguest

          </li>
        </div>
        @endforeach
      </div>



      <!--Libri Grid-->
      <div class="artifact filterDiv libro w3-row-padding row-item">
        <h1><b>Libri</b></h1>
        @foreach ($books as $book)
        <div class="filterDiv libro w3-third w3-margin-bottom">
          <li class="w3-container w3-white">
            <img src="/resources/photo/Libro.jpg" alt="Norway" style="width:70%" onclick="onClick(this)" alt="Computer">
            <h2><b>{{$book->titolo}}</b></h2>
            <h5><b>Autori:</b> {{$book->autori}}</h5>
            <h5><b>Casa Editrice:</b> {{$book->casa_editrice}}</h5>
            <h5><b>Anno di Pubblicazione:</b> {{$book->anno_pubblicazione}}</h5>
            <h5><b>Numero di pagine:</b> {{$book->n_pagine}}</h5>
            <h5><b>Note:</b> {{$book->note}}</h5>
            <h5><b>URL:</b> {{$book->url}}</h5>
            <h5><b>Tag:</b> {{$book->tag}}</h5>

            @guest
            @if (Route::has('login'))
            @endif
            @else
            <a class="btn w3-btn w3-red w3-hide-small" href="{{ route('book.edit', $book->id) }}">Modifica</a>
            <form class="crud-btn" action="{{ route('book.destroy', $book->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn w3-btn w3-red w3-hide-small">Elimina</button>
            </form>
            @endguest

          </li>
        </div>
        @endforeach
      </div>



      <!--Periferiche Grid-->
      <div class="artifact filterDiv periferica w3-row-padding row-item">
        <h1><b>Periferiche</b></h1>
        @foreach ($peripherals as $peripheral)
        <div class="filterDiv periferica w3-third w3-margin-bottom">
          <li class="w3-container w3-white">
            <img src="/resources/photo/Periferiche.jpg" alt="Norway" style="width:70%" onclick="onClick(this)" alt="Computer">
            <h2><b>{{$peripheral->modello}}</b></h2>
            <h5><b>Tipologia:</b> {{$peripheral->tipologia}}</h5>
            <h5><b>Note:</b> {{$peripheral->note}}</h5>
            <h5><b>URL:</b> {{$peripheral->url}}</h5>
            <h5><b>Tag:</b> {{$peripheral->tag}}</h5>

            @guest
            @if (Route::has('login'))
            @endif
            @else
            <a class="btn w3-btn w3-red w3-hide-small" href="{{ route('peripheral.edit', $peripheral->id) }}">Modifica</a>
            <form class="crud-btn" action="{{ route('peripheral.destroy', $peripheral->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn w3-btn w3-red w3-hide-small">Elimina</button>
            </form>
            @endguest

          </li>
        </div>
        @endforeach
      </div>
    </ul>


    <!-- MODALE FOTO -->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
      <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
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

  <script src="{{ asset('resources/js/filterMuseum.js')}}"></script>
  <script src="{{ asset('resources/js/search.js')}}"></script>
  @endsection


</body>

</html>