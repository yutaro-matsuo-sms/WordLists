<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <title>@yield('title') - Example-Component</title>
</head>

<body>
<div class="container">
    @yield('content')
</div>
<script src=" {{ mix('js/app.js') }} " defer></script>
</body>

</html>