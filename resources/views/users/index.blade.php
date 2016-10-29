<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Usuários</title>
    <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
    <div class="container" id="app">
        <vd-users
            success="{{ Session::get('success') }}"
            token="{{ csrf_token() }}"
            list="{{ $users }}"></vd-users>
    </div>
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>