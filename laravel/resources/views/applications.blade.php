<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Anmeldung</title>
</head>

<body>
<div>
<h1>Mein super Event!</h1>
    <p>Melde dich hier für den besten Event aller Zeiten an!
    <br/>
     Datum: 1. März um 16:53 Uhr
    </p>
    <p>
        <a href="/event/applications">Anmeldungen ansehen</a>
    </p>

    <h1> Anmeldung</h1>
    <ul>
    @foreach($applications as $application)
    <li>{{ $application->firstname }} {{ $application->lastname }}</li>

    @endforeach
    </ul>
    <div>
        <small>({{ $declinedApplications }}) Abmeldungen</small>
    </div>

</div>
</body>

</html>
