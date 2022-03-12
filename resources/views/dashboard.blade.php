<x-app-layout>
    <x-alert type="info">hello world mate</x-alert>

    <div class="py-12">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">logout</a>
        </form>
    </div>
</x-app-layout>
