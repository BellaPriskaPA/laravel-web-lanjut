<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPAPO</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    @vite('resources/css/app.css') 
    <script src="{{asset('assets/js/main.js')}}"></script>
</head>
<body>
<!-- Header -->
  <header class="bg-yellow-800 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="flex items-center">
        <span class="text-3xl font-bold text-white">SIPAPO</span>
      </div>
      <div class="flex items-center space-x-4">
        <span>
          <i class="fas fa-envelope"></i>
          info@sipapo.com
        </span>
      </div>
    </div>
  </header>