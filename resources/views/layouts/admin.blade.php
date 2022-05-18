<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @stack('head')
</head>
<body>
    <div class="container-fluid mx-0">
        <div class="row">
          <div class="col-2 ml-0 p-3 text-white bg-dark overflow-auto vh-100">
            @include('incs.navbar')
          </div>
          <div class="col-10 mr-0 p-0 vh-100 overflow-auto">
            @yield('content') 
          </div>
        </div>
    </div>
    <!--script-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/chart.js')}}"></script>
</body>
</html>
