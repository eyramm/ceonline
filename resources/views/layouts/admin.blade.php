
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="CEYC Airport City" /> 
    <meta property="og:type" content="article" /> 
    <meta property="og:url" content="http://live.ceycairportcity.org"/>
    <meta property="og:description" content="You're welcome to CEYC Online Church, Join us worship the Lord in the beauty of His Holiness." />
    <meta name="twitter:image" content="https://ceycairportcity.org/wp-content/uploads/2020/01/ceyc_logo-e1578178440895.png"/>
    <meta property="og:image" content="https://ceycairportcity.org/wp-content/uploads/2020/01/ceyc_logo-e1578178440895.png"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <title>@yield('title') {{ config('app.name', 'Field Service') }}</title>
    @include('partials.styles')
    
</head>
<body>
<div class="h-screen flex overflow-hidden bg-gray-100" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
  <!-- Off-canvas menu for mobile -->
  
  @include('partials.sidebar')
  <!-- replace your content here -->
  <div class="py-4">
    @yield('content')
</div>
 <!-- end replace -->
  @include('partials.content')

</div>

@include('partials.scripts')
</body>
</html>