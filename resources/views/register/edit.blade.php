<x-layout>
    <x-slot name="title">
        Edit User
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto my-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <p class="display-6">Edit User</p>
                        </div>
                        <div><a href="/" class="btn btn-secondary">Home</a></div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/update/{{$user->id}}">@csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input value="{{$user->name}}" name="name" type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input value="{{$user->email}}" name="email" type="email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                <p class="text-danger">Email can't Edit</p>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input value="{{$user->password}}" name="password" type="password" class="form-control"
                                    id="exampleInputPassword1">
                                @error('password')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gender</label>
                                <select name="gender" class="form-select form-select-lg mb-3"
                                    aria-label=".form-select-lg example">
                                    <option selected disabled value="{{$user->gender}}">{{ucfirst($user->gender)}}
                                    </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                                <input value="{{$user->mobile}}" name="mobile" type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('mobile')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
