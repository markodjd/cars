<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        main {
            padding: 2rem;
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 1.3rem 2rem;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li:not(:last-of-type) {
            margin-right: 20px;
        }

        header a {
            color: rgb(46, 46, 46);
            text-decoration: none;
            font-weight: 700;
        }

    </style>
</head>

<body>
    <header>
        <div><a href="/">Cars</a></div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
