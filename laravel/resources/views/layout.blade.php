<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Events</title>
</head>
<body>
<header>
    <span>Mein Eventportal</span>
    <div>
        <a href="/" >Alle Events </a>
    @auth
        <a href="/logout">Ausloggen</a>
    @else
        <a href="/login">Einloggen</a>
        <a href="/register">Registrieren</a>
    @endauth
    @yield('content')
    </div>
</header>
</body>
