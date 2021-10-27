<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <style>
        ul {
            list-style: none;
        }
        li {
            display: inline-block;
        }
    </style>
    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="/contacts">Contacts</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div>
            Hello World
        </div>
        <div>
            {{ $nome . ' ' .$cognome }}
        </div>


    </body>
</html>
