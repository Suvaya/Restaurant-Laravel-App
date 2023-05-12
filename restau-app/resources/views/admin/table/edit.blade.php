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
                    Create Table
                </div>
            </div>
            <div class="p-2 bg-slate-300 rounded dark:bg-gray-700">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 my-10" style="margin-left: auto; margin-right: auto;">
                    <form method="POST" action="{{ route('admin.table.update', $table->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-white"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $table->name }}" class="block w-full transition duration-150 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="vip" class="block text-sm font-medium text-white">VIP</label>
                            <div class="mt-1">
                                <select id="vip" name = "vip" class="form-multiselect block w-full mt-1">
                                    <option value="0"> No </option>
                                    <option value="1"> Yes </option>
                                </select>
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
