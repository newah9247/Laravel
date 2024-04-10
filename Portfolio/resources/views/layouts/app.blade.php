<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Livewire Poll</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">

    body {
      font-family: 'Martian Mono', monospace;
      background-color: lightgray;
    }

    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }

    label {
      @apply uppercase text-slate-700 mb-2
    }

    input, 
    textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
      @apply text-red-500 text-sm
    }

    .martian-mono-<uniquifier> {
      font-family: "Martian Mono", monospace;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: normal;
      font-variation-settings:
        "wdth" 100;
    }

    footer {
      
      ul {
        display: inline-grid;
        grid-auto-flow: row;
        grid-gap: 24px;
        justify-items: center;
        margin: auto;
        text-decoration: none;
      }

      @media (min-width: 500px) {
        ul {
          grid-auto-flow: column;
        }
      }

      a {
        color: black;
        text-decoration: none;
        box-shadow: inset 0 -1px 0 hsla(0, 0%, 100%, 0.4);
      }

      a:hover {
        box-shadow: inset 0 -1.2em 0 hsla(0, 0%, 100%, 0.4);
      }
      /* below is just for demo styling */

      div {
        display: flex;
        height: 10vh;
        width: 100%;
        background-color: gray;
        line-height: 1.3;
      }
    }
  </style>
  {{-- blade-formatter-enable --}}
</head>

<body>
  @include('layouts.nav')
  <div class="container mx-auto mt-10 mb-10 max-w-4xl">
      @yield('scripts')
      @yield('name')
      @yield('content')
      @yield('projects')
  </div>
  

  <footer>
    <div>
      <ul>
        <li><a href="https://twitter.com/newah9247">X</a></li>
        <li><a href="https://codepen.io/Noah-Taylor">Codepen</a></li>
        <li><a href="mailto:nwtaylor04@gmail.com">Email</a></li>
        <li><a href="https://github.com/newah9247">Github</a></li>
        <li>
          <p>👋</p>
        </li>
      </ul>
    </div>
  </footer>

</body>

</html>