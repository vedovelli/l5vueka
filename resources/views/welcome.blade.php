<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bem vindos ao curso!</title>
    <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
    <div class="container" id="app">
        <h1>
            <i class="fa fa-fw fa-github"></i>
            Curso Laravel e Vue.js</h1>

        <primeiro-componente></primeiro-componente>

    </div>
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>