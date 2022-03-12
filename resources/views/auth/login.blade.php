<x-guest-layout>
    <div class="container max-w-sm mt-2xl">

        <h2 class="text-center">Log in</h2>
        <p class="text-center mt-md mx-auto text-contrast-500">
            Log in to your account.
        </p>

        @if($errors->any())
            <ul class="text-error-500 text-center mt-lg">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="mt-lg">
                <label class="mb-3xs" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full" value="{{old('email')}}" required autofocus>
            </div>

            <div class="mt-md">
                <div class="flex justify-between mb-3xs">
                    <label class="mb-3xs" for="password">Password</label>
                    <a class="text-sm" href="{{route('password.request')}}">Forgot?</a>
                </div>
                <input type="password" id="password" name="password" class="w-full" required autocomplete="current-password">
            </div>

            <div class="mt-md">
                <label class="mb-3xs flex items-center" for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="text-sm">Remember me</span>
                </label>
            </div>

            <button class="btn mt-md w-full bg-primary-500 text-primary-50 hover:bg-primary-600">Login</button>

            <div class="text-center mt-md">
                <p class="text-sm">Don't have an account? <a href="{{route('register')}}">Get started</a></p>
            </div>
        </form>
    </div>
</x-guest-layout>
