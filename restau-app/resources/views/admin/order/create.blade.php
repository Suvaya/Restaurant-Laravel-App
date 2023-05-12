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
                    Create Order
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
        </div>
    </div>
</x-admin-layout>
