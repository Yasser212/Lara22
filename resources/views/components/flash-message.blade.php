@if (session()->has('message'))
    {{-- using AlpineJs to show the message as flash message (disappear after while), see: https://alpinejs.dev/ --}}
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
        class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3 rounded-b-xl shadow-lg">
        <p>{{ session('message') }}</p>
    </div>
@endif
