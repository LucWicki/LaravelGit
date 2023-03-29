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
        <a href="/">Alle Events </a>
        </br>


        @auth
            <a href="/logout">Ausloggen</a>
            </br>
            <a href="/eventcreator">Event erstellen</a>
            </br>
        @else
            <a href="/login">Einloggen</a>
            </br>

            <a href="/register">Registrieren</a>
            </br>
        @endauth
        @yield('content')
    </div>
</header>
</body>
