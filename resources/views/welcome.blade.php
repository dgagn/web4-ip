<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{mix('css/main.css')}}">
    </head>
    <body class="antialiased">
    <div class="container max-w-sm mt-2xl">
        <h2 class="text-center">Forgot your password?</h2>
        <p class="text-center mt-md mx-auto text-contrast-500">
            We will email you a password reset link that will allow you to choose a new one.
        </p>

        <form action="" method="post">
            <div class="mt-lg">
                <label class="mb-3xs" for="input-email">Email</label>
                <input class="w-full" type="email" name="input-email" id="input-email" required>
            </div>

            <button class="btn mt-md w-full bg-primary-600 text-primary-50 hover:bg-primary-500">Request reset link</button>
            <div class="text-center mt-sm">
                <p class="text-sm"><a href="#">&larr; Back to login</a></p>
            </div>
        </form>
    </div>
    </body>
</html>
