<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('layouts.success_messages')

                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route("store_item")}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Add Todo item</label>
                            <input type="text" class="form-control" id="subject" name="subject" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <textarea class="form-control"  id="subject" name="description" >

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Priority</label>
                            <select class="form-control" id="priority" name="priority">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for="exampleCheck1">Start date</label>
                            <input type="date" class="form-control" name="startAt" />
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for="exampleCheck1">End date</label>
                            <input type="date" class="form-control" name="finishAt"/>
                        </div>

                        <div class="form-group mt-3">
                        <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
