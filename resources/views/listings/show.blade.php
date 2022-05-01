<x-layout>
    @include('partials._search')
    <a href="index.html" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{ asset('images/no-image.png') }}" alt="" />

                <h3 class="text-2xl mb-2">{{ $listing->tite }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                <x-listing-tags :tagsCsv='$listing->tags' />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>{{ $listing->description }}</p>

                        <a href="mailto:{{ $listing->email }}"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="{{ $listing->website }}" target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>

    {{-- <a href="/">
        <h1 class="text-decoration-none font-bold px-6 py-2 w-fit rounded-xl m-3  bg-blue-400 text-xl">Back</h1>
    </a>
    <h2 class="text-md font-bold px-6 py-3 text-blue-600">title</h2>
    <h2 class="text-md font-bold px-6 py-3">{{ $listing['title'] }}</h2>
    <h2 class="text-md font-bold px-6 py-3 text-blue-600">Company</h2>
    <h3 class="text-md font-bold px-6 py-3">{{ $listing['company'] }}</h3>
    <h2 class="text-md font-bold px-6 py-3 text-blue-600">Email</h2>
    <h3 class="text-md font-bold px-6 py-3">{{ $listing['email'] }}</h3>
    <h2 class="text-md font-bold px-6 py-3 text-blue-600">Location</h2>
    <h3 class="text-md font-bold px-6 py-3">{{ $listing['location'] }}</h3>
    <h2 class="text-md font-bold px-6 py-3 text-blue-600">About</h2>
    <p class="text-md font-bold px-6 py-3">{{ $listing['description'] }}</p> --}}
</x-layout>
