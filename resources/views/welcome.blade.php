<x-guest-layout>
    <div class="secondary-glow"></div>
    <div class="container max-w-sm min-h-screen flex items-center justify-center">
        <div class="w-full">
            <h2>Search an IP</h2>
            <p class="mt-md mx-auto text-contrast-500">
                Search fraudulent servers to make sure of it's integrity.
            </p>

            <form method="POST">
                @csrf

                <div class="mt-lg">
                    <label class="mb-3xs" for="search">Search</label>
                    <input class="w-full" type="search" name="search" id="search">
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
