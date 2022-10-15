<x-app-layout>
    <x-slot name="header">
        <a href="/add" class="btn btn-primary">Add item</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @forelse($todoList AS $key => $todoItem)
                        <table class="table">
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $todoItem->subject }}</td>
                                <td>{{ $todoItem->description }}</td>
                                <td>{{ $todoItem->priority }}</td>
                                <td>{{ $todoItem->start_at }}</td>
                                <td>{{ $todoItem->finish_at }}</td>
                                <td><a href="{{ route("edit_item") }}" class="btn btn-info">Edit </a></td>
                            </tr>
                        </table>
                    @empty
                        No item on the list
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
