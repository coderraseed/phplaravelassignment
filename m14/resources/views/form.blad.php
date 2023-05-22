<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">
        <form action="{{ route('submit-form') }}" method="POST">
            @csrf
            <!-- Include your form fields here, including the 'name' input field -->
            <input type="text" name="name" id="name-input">
            <!-- ... -->
            <button type="submit">Submit</button>
        </form>

    </body>
</html>
