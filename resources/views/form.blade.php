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

  <title>Inserimento nuovo Artefatto</title>
</head>

<body class="antialiased">

  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container title-nav">
      <img src="/resources/photo/logo.png" style="width:90%" alt="Logo">
    </div>
    <div class="w3-bar-block sidebar-nav">
      <a href="{{ url('home') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a></a>
      <a href="{{ route('museum.index') }}" " class=" w3-bar-item w3-button w3-hover-white">Artefatti (Museo)</a>
    </div>
  </nav>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">
    <div class="w3-container" id="contact"">
      <h1 class=" w3-xxxlarge w3-text-red"><b>Nuovo artefatto</b></h1>
      <div class="intex">
        <p>Gli Amministratori del sito possono inserire nuovi Artefatti direttamente da qui!</p>
      </div>


      <form action="{{ route('museum.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="mb-3"><b>Seleziona un Artefatto</b></label>
        <select id="artifact" name="artifact" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option value="">--Scegli un opzione--</option>
          <option value='computer'>Computer</option>
          <option value='rivista'>Rivista</option>
          <option value='software'>Software</option>
          <option value='libro'>Libro</option>
          <option value='periferica'>Periferica</option>
        </select>

        <div id="inputImg" style="display: none;">
          <label>Aggiungi Immagine</label>
          <input type="file" class="form-control" name="image">
        </div>

        <div id="inputTitolo" style="display: none;" class="w3-section">
          <label>Titolo</label>
          <input class="w3-input w3-border" type="text" name="titolo">
        </div>

        <div id="inputAut" style="display: none;" class="w3-section">
          <label>Autori</label>
          <input class="w3-input w3-border" type="text" name="autori">
        </div>

        <div id="inputNumero" style="display: none;" class="w3-section">
          <label>Numero</label>
          <input class="w3-input w3-border" type="text" name="numero">
        </div>

        <div id="inputPub" style="display: none;" class="w3-section">
          <label>Anno di Pubblicazione</label>
          <input class="w3-input w3-border" type="text" name="anno_pubblicazione">
        </div>

        <div id="inputPag" style="display: none;" class="w3-section">
          <label>Numero di Pagine</label>
          <input class="w3-input w3-border" type="text" name="n_pagine">
        </div>

        <div id="inputISBN" style="display: none;" class="w3-section">
          <label>ISBN (max 10 numeri)</label>
          <input class="w3-input w3-border" type="text" name="isbn">
        </div>

        <div id="inputCasa" style="display: none;" class="w3-section">
          <label>Casa Editrice</label>
          <input class="w3-input w3-border" type="text" name="casa_editrice">
        </div>

        <div id="inputModello" style="display: none;" class="w3-section">
          <label>Modello</label>
          <input class="w3-input w3-border" type="text" name="modello">
        </div>

        <div id="inputType" style="display: none;" class="w3-section">
          <label>Tipologia</label>
          <input class="w3-input w3-border" type="text" name="tipologia">
        </div>

        <div id="inputAnno" style="display: none;" class="w3-section">
          <label>Anno</label>
          <input class="w3-input w3-border" type="text" name="anno">
        </div>

        <div id="inputCPU" style="display: none;" class="w3-section">
          <label>CPU</label>
          <input class="w3-input w3-border" type="text" name="cpu">
        </div>

        <div id="inputVelocita" style="display: none;" class="w3-section">
          <label>Velocità</label>
          <input class="w3-input w3-border" type="text" name="velocita">
        </div>

        <div id="inputMemoria" style="display: none;" class="w3-section">
          <label>Memoria</label>
          <input class="w3-input w3-border" type="text" name="memoria">
        </div>

        <div id="inputHardDisk" style="display: none;" class="w3-section">
          <label>Dimensione HardDisk</label>
          <input class="w3-input w3-border" type="text" name="hard_disk">
        </div>

        <div id="inputOS" style="display: none;" class="w3-section">
          <label>Sistema Operativo</label>
          <input class="w3-input w3-border" type="text" name="os">
        </div>

        <div id="inputSupp" style="display: none;" class="w3-section">
          <label>Supporto</label>
          <input class="w3-input w3-border" type="text" name="supporto">
        </div>

        <div id="inputNote" style="display: none;" class="w3-section">
          <label>Note</label>
          <input class="w3-input w3-border" type="text" name="note">
        </div>

        <div id="inputURL" style="display: none;" class="w3-section">
          <label>URL</label>
          <input class="w3-input w3-border" type="text" name="url">
        </div>

        <div id="inputTag" style="display: none;" class="w3-section">
          <label>Tag</label>
          <input class="w3-input w3-border" type="text" name="tag">
        </div>

        <button id="submitBtn" style="display: none;" type="submit" class="w3-button w3-block w3-padding-medium w3-red w3-margin-bottom mt-5">Aggiungi Artefatto</button>

      </form>

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

    <script src="{{ asset('resources/js/form.js')}}"></script>
    @endsection

</body>

</html>