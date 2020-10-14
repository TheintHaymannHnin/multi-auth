@extends('back.master')
@section('content')
<div class="container ">
       
        <div class="rows mt-5">
            <h3 ><strong>Users</strong></h3>
            
            <div class="col-md-12 mt-3 ">
                <table class="table table-bordered table-hover" tableborder="20" bordercolor="violet" bgcolor="silver">
                   
                <thead>
                <tr>
                <th  bgcolor="pink">ID</th>
                <th  bgcolor="pink">Name</th>
                <th  bgcolor="pink">Email</th>
                <th  bgcolor="pink">Roles</th>
                <th  bgcolor="pink">Action</th>
            </tr>
        </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td><b>{{$user->id}}</b></td>
                    <td><b>{{$user->name}}</b></td>
                    <td><b>{{$user->email}}</b></td>
                    <td>
                        @foreach($user->roles as $role)
                        <span class="badge badge-primary">
                        {{$role->name}}
                    </span>
                        @endforeach
                    </td>
                    <td>
                        @foreach(Auth::user()->roles as $role)
                        @if($role->name == 'Manager') 
                        <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-sm btn-info">
                            Manage Roles</a>
                        @endif
                        @endforeach
                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
@endsection