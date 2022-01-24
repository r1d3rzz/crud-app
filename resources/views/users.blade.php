<x-layout>
    <x-slot name="title">
        Users
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <a href="/store" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    {{-- <th scope="col">password</th> --}}
                                    <th scope="col">gender</th>
                                    <th scope="col">mobile</th>
                                    <th scope="col">Update || Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    {{-- <td>{{$user->password}}</td> --}}
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>
                                        <a href="/edit/{{$user->id}}" class="btn btn-sm btn-secondary">Edit</a>
                                        <a href="/delete/{{$user->id}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
