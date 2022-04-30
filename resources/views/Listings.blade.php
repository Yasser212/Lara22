<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="text-2xl font-bold bg-gray-300 text-red-500 p-6">Listings</div>
@unless(count($Listings) == 0)
    <h2 class="text-xl font-bold text-green-500 p-6">{{ $heading }}</h2>
    @foreach ($Listings as $Listing)
        <a href="/Listings/{{ $Listing['id'] }}">
            <h3 class="text-md font-bold px-6 py-3">{{ $Listing['Title'] }}</h3>
        </a>
        <p class="text-md font-bold px-6 py-3">{{ $Listing['Description'] }}</p>
    @endforeach
@else
    <h1>No Listings found</h1>
@endunless
