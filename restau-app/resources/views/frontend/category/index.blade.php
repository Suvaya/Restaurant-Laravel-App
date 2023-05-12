<x-guest-layout>
    <section class="my-8 py-4 bg-white" style="border-radius: 12px;">
        <div class="mt-4 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIALS</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach($categories as $category)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg" style="border-radius: 25px;">
                    <img class="w-full h-48" src="{{ Storage::url($category->image) }}"
                         alt="Image" />

                    <div class="px-6 py-4">
                        <a href="{{ route('categories.show', $category->id) }}"><h4 class="mb-3 text-xl font-semibold tracking-tight text-cyan-500 hover:text-blue-500
                         uppercase">{{ $category->name }}</h4></a>
                        <p class="leading-normal text-gray-700">{{ $category->description }}.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
