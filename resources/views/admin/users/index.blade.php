@extends('layouts.admin')




@section('content')

    <h1>Users</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>

    @if($users)

        @foreach($users as $user)

          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name == null ? 'User has no Role' : $user->role->name}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
            <td>{{$user->is_active == 1 ? 'Yes' : 'No'}}</td>
          </tr>

      @endforeach

    @endif
    </tbody>
  </table>


@stop