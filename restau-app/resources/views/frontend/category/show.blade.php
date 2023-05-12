<x-guest-layout>
    <section class="my-8 bg-white" style="border-radius: 25px;padding-top: 80px;padding-bottom: 80px;">
        <div class="mt-4 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 pt-320" >
                Our Menu</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach($category->menu as $menu)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg" style="border-radius: 10px;">
                        <img class="w-full h-48" src="{{ Storage::url($menu->image) }}"
                             alt="Image" />
                        <div class="flex m-2 py-2">
                            <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">{{ $category->name }}</span>
                        </div>
                        <div class="px-6 py-4">
                            <a href="#"><h4 class="mb-3 text-xl font-semibold tracking-tight text-cyan-500 hover:text-blue-500
                         uppercase">{{ $menu->name }}</h4></a>
                            <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-xl text-green-600">${{ $menu->price }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="p-2 bg-slate-300 rounded dark:bg-gray-700">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 my-10" style="margin-left: auto; margin-right: auto;">
                <form method="POST" action="{{ route('admin.order.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{--                        <div class="sm:col-span-6 my-4">--}}
                    {{--                            <label for="table_id" class="block text-sm font-medium text-white"> Table Number: </label>--}}
                    {{--                            <div class="mt-1">--}}
                    {{--                                <input type="number" name="table_id" id="table_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('table_id') border-red-500 @enderror" />--}}
                    {{--                            </div>--}}
                    {{--                            @error('table_id')--}}
                    {{--                            <div class="text-sm text-danger">--}}
                    {{--                                {{ $message }}--}}
                    {{--                            </div>--}}
                    {{--                            @enderror--}}
                    {{--                        </div>--}}
                    <div class="sm:col-span-6 my-4">
                        <label for="order_items" class="block text-sm font-medium text-white">Order Items</label>
                        <div class="mt-1">
                            <input type="text" name="order_items" id="order_items" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('order_items') border-red-500 @enderror" />
                        </div>
                        @error('order_items')
                        <div class="text-sm text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <label for="table_id" class="block text-sm font-medium text-gray-700">Table Number</label>
                        <div class="mt-1">
                            <select id="tables" name = "tables[]" class="form-multiselect block w-full mt-1">
                                @foreach($tables as $table)
                                    <option value="{{ $table->id }}"> {{ $table->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-6 p-4">
                        <button type="submit" class="rounded-lg px-10 py-2 bg-indigo-500 hover:bg-indigo-700">
                            Save
                        </button></div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
