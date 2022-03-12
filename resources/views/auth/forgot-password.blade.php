<x-guest-layout>
    <div class="container max-w-sm mt-2xl">
        <div class="main-glow absolute h-[12rem] w-[12rem] "></div>

        <h2 class="text-center">Forgot your password?</h2>
        <p class="text-center mt-md mx-auto text-contrast-500">
            We will email you a password reset link that will allow you to choose a new one.
        </p>

        <x-error class="mt-md" :error="$errors"></x-error>

        @if (session('status'))
            <x-alert type="success" class="mt-md">{{session('status')}}</x-alert>
        @endif


        <form action="{{ route('password.email') }}" method="post">
            @csrf

            <div class="mt-lg">
                <label class="mb-3xs" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full" value="{{old('email')}}" required autofocus>
            </div>

            <x-button class="w-full mt-md">Request reset link</x-button>

            <div class="text-center mt-sm">
                <p class="text-sm"><a href="{{route('login')}}">&larr; Back to login</a></p>
            </div>
        </form>
    </div>

</x-guest-layout>
