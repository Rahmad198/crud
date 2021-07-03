<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Universitas Muhammadiyah Malang | dari Muhammadiyah untuk Bangsa</title>
  <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
  <link rel="shortcut icon" type="image/ico" href="{{asset('admin/assets/img/favicon.ico')}}">
</head>

<body>
<div class="header">
   <!-- TOP NAV BAR -->
   @include('layouts.includes._header')  
   </div>  
    <!-- SIDEBAR KIRI -->
    @include('layouts.includes._barkiri')  

   <!-- SIDEBAR KANAN -->
   @include('layouts.includes._barkanan')  
    

   <div class="main">
   @yield('content')
  </div> 
        

    <!-- FOOTER -->
    @include('layouts.includes._footer') 
 
   </body>
   <script src="{{asset('admin/assets/js/injs.js')}}"></script>
   </html>