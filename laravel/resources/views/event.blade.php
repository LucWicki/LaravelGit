<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Anmeldung</title>
</head>

<body>
<form action="?" method="POST" class="form">
    @csrf
    <title>Anmeldung für Event</title><br><br>
    <div>
        <p>Sind Sie dabei?:</p><br>
        <input type="radio" id="yes" name="answer" value="yes">
        <label for="yes">Ja,ich bin dabei</label>
        <input type="radio" id="no" name="answer" value="no">
        <label for="no">Nein, ich möchte nicht</label><br>
    </div>
    <br><br>

    <label for="email">E-Mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="firstname">Vorname:</label><br>
    <input type="text" id="firstname" name="firstname" required><br><br>
    <label for="lastname">Nachname:</label><br>
    <input type="text" id="lastname" name="lastname" required><br><br>
    <label for="bemerkungen">Bemerkungen:</label><br>
    <textarea id="bemerkungen" name="bemerkungen" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Abschicken">
</form>

<div>
    <a href="/event/applications">Anmeldungen Ansehen</a>
</div>
</body>

</html>
