<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Combrow Creative</title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    @vite('../resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>

    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700"
      rel="stylesheet"
    />
    <style>
      .gradient {
        background-color: #88a8fa;
        /* background: linear-gradient(90deg, #d53369 0%, #daae51 100%); */
      }
    </style>
  </head>
  <body
    class="leading-normal tracking-normal text-white gradient"
    style="font-family: 'Source Sans Pro', sans-serif"
    x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)"
  >

    <!--Nav-->
    <x-nav></x-nav>

    <!-- Content -->
    <main>
        {{ $slot }}
    </main>

    <!--Footer-->
    <x-footer></x-footer>

    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>

  </body>
</html>