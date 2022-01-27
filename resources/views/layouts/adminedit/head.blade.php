<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{asset('admin/assets/img/LOGOthawat.png')}}" rel="icon">
    <title>Admin Thawat Butcher shop</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('admin/assets/css/tailwind.output.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/tailwind.css')}}" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{asset('admin/assets/js/init-alpine.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous">
    </script>
    <script src="{{asset('admin/assets/js/charts-lines.js')}}" defer></script>
    <script src="{{asset('admin/assets/js/charts-pie.js')}}" defer></script>
    <script src="{{asset('admin/assets/js/focus-trap.js')}}" defer></script>
    <script src="{{asset('admin/assets/js/charts-bars.js')}}" defer></script>
    <script src="{{asset('admin/assets/js/init-alpine.js')}}" defer></script>
  </head>
  