<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Edit Menu Item
                </div>
            </div>
            <div class="p-2 bg-slate-300 rounded dark:bg-gray-600">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 my-10" style="margin-left: auto; margin-right: auto;">
                    <form method="POST" action="{{ route('admin.menu.update', $menu->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-white"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $menu->name }}" class="block w-full transition duration-150 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-6 my-4">
                            <label for="image" class="block text-sm font-medium text-white"> Image </label>
                            <div>
                                <img src="{{ Storage::url($menu->image) }}" alt="" class="w-32 h-32">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image" name="image" class="block w-full transition duration-150 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="categories" class="block text-sm font-medium text-gray-700">Category</label>
                            <div class="mt-1">
                                <select id="categories" name = "categories[]" class="form-multiselect block w-full mt-1">
{{--                                    @foreach($categories as $category)--}}
{{--                                        <option value="{{ $category->id }}"> {{ $category->name }}</option>--}}
{{--                                    @endforeach--}}
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @selected($menu->category->contains($category))> {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="description" class="block text-sm font-medium text-white">Description</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $menu -> description }}  </textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="price" class="block text-sm font-medium text-white">Price</label>
                            <div class="mt-1">
                                <textarea id="price" rows="3" name="price" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $menu -> price }}  </textarea>
                            </div>
                        </div>
                        <div class="mt-6 p-4" >
                            <button type="submit" class="rounded-lg px-4 py-2 bg-indigo-500 hover:bg-indigo-700">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
