<x-guest-layout>
    <section class="my-8 bg-white" style="border-radius: 25px;padding-top: 80px;padding-bottom: 80px;">
        <div class="mt-4 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 pt-320" >{{ $category->name }} Menu</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach($category->menu as $menu)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg" style="border-radius: 10px;">
                        <img class="w-full h-48" src="{{ Storage::url($menu->image) }}"
                             alt="Image" />
{{--                        <div class="flex m-2 py-2">--}}
{{--                            <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">{{ $category->name }}</span>--}}
{{--                        </div>--}}
                        <div class="px-6 py-4">
                            <a href="#"><h4 class="mb-3 text-xl font-semibold tracking-tight text-cyan-500 hover:text-blue-500
                         uppercase">{{ $menu->name }}</h4></a>
                            <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-xl text-green-600">${{ $menu->price }}</span>
                        </div>
                        <div class="flex items-center p-4">

                           <form action="{{ url('/addcart', $menu->id) }}"
                                  method="POST">
                                @csrf
                               <input type="number" name = "quantity" min="1" class="w-28">
                               <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg ml-10">
                                    Add to Cart
                                </button>

                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
