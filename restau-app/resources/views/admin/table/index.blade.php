<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 mb-10">
                    Table Page
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-20 px-5">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                VIP
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(\App\Models\Table::exists())
                            @foreach($table as $tables)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $tables->name }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if($tables->vip == true)
                                            YES
                                        @else
                                        NO
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.table.edit', $tables->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.table.destroy', $tables->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure?')"
                                                  class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" >
                                                    Delete
                                                </button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td colspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Nothing to show here
                                </td>
                                <td>
                                    <a href="{{ route('admin.table.create') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                                        Add a Table
                                    </a>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                @if(\App\Models\Table::exists())
                    <div class="flex justify-end m-2 p-2">
                        <a href="{{ route('admin.table.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">
                            Add Table
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>



</x-admin-layout>
