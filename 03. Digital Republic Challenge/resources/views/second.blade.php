<!DOCTYPE html>
<html>

<head>
    <title>Digital Republic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
</head>

<body>
    <header>
        <h3>PAINT CANS CALCULATOR</h3>
    </header>
    <main>
        <h2 class="h2_edited">Cans needed:</h2>
        <ul>
            @foreach ($cans_needed as $can)
                <li>{{ $can['quantity'] }} x {{ $can['size'] }}L can(s)</li>
            @endforeach
        </ul>
        <a href="{{ route('first') }}"><button type="button">Go back to Home Page</button></a>
    </main>
    <footer>
        <p>© 2023 All rights reserved</p>
    </footer>
</body>

</html>
