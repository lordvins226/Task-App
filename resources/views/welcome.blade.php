<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravue</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Tasks Manager</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <router-link to="/home" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/tasks" class="nav-link">Tasks List</router-link>
                    </li>
                
                </div>
              </nav>
              <div class="container">
                <router-view></router-view>
              </div>
        </div>
        
        <script src="{{asset('js/app.js')}}">
  
        </script>
    </body>
</html>
