<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="CEYC Online" /> 
    <meta property="og:type" content="article" /> 
    <meta property="og:url" content="http://live.ceycairportcity.org" />
    <meta property="og:description" content="You're warmly invited to our online church. Join us have an amazing time in the presense of God" />
    <meta name="twitter:image" content="https://ceycairportcity.org/wp-content/uploads/2020/01/ceyc_logo-e1578178440895.png" />
    <meta property="og:image" content="https://ceycairportcity.org/wp-content/uploads/2020/01/ceyc_logo-e1578178440895.png"  />

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @include('partials.website.styles')
        
        <script src="{{ asset('js/app.js') }}" ></script>


        <title>@yield('title') {{ config('app.name', 'CEYC Live') }}</title>
    </head>
    <body>
        <div id="myapp">
         @include('partials.website.nav')
         @include('partials.website.header')
          <main>
            @stack('page-content')
          </main>
          @include('partials.website.footer')
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @include('partials.website.scripts')

    </body>
</html>
