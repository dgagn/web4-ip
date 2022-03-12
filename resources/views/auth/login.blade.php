<x-guest-layout>
    <div class="container max-w-sm mt-2xl">
        <div class="main-glow absolute h-[12rem] w-[12rem] "></div>
        <h2 class="text-center">Log in</h2>
        <p class="text-center mt-md mx-auto text-contrast-500">
            Log in to your account.
        </p>

        <x-error class="mt-md" :error="$errors"></x-error>

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

            <x-button class="w-full mt-md">Log in</x-button>

            <div class="text-center mt-md">
                <p class="text-sm">Don't have an account? <a href="{{route('register')}}">Get started</a></p>
            </div>
        </form>
    </div>
</x-guest-layout>
