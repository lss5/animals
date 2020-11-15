@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('admin.users.destroy', $user) }}" class="btn btn-danger btn-sm">Delete</a>
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
@endsection
