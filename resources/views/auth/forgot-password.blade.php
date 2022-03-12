<x-guest-layout>
    <div class="container max-w-sm mt-2xl">

        <h2 class="text-center">Forgot your password?</h2>
        <p class="text-center mt-md mx-auto text-contrast-500">
            We will email you a password reset link that will allow you to choose a new one.
        </p>

        @if($errors->any())
            <ul class="text-error-500 text-center mt-lg">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <dgagn-alert message="yO"></dgagn-alert>

        <form action="{{ route('password.email') }}" method="post">
            @csrf

            <div class="mt-lg">
                <label class="mb-3xs" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full @if($errors->any()) border border-error-500/80 !bg-error-50 @endif" value="{{old('email')}}" required autofocus>
            </div>

            <button class="btn mt-md w-full bg-primary-500 text-primary-50 hover:bg-primary-600">Request reset link</button>

            <div class="text-center mt-sm">
                <p class="text-sm"><a href="{{route('login')}}">&larr; Back to login</a></p>
            </div>
        </form>
    </div>

    <h1>{{session('status')}}</h1>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

</x-guest-layout>
