@extends('back.master')
@section('content')
<div class="container ">
       
        <div class="rows mt-5">
            
            
            <div class="col-md-3"></div>
            <div class="col-md-6">
                    <h3 class="text-success"><strong>User</strong></h3>
                <form action="{{url('admin/users/'.$user->id.'/update')}}" method="POST">
                    @csrf 
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$user->name}}">
                    </div>
                    
                    <h3 class="text-success"><strong>Role</strong></h3>
                    @foreach($roles as $role)
                    <div>
                    <input type="checkbox" name="role_ids[]" value="{{$role->id}}" id="label{{$role->id}}">

                    @foreach($user->roles as $userRole)
                    @if($userRole->name == $role->name)
                    {{-- checked --}}
                    @endif
                    @endforeach
                    <label for="label{{$role->id}}">{{$role->name}}</label>
                    </div>
                    @endforeach
                    <br>
                    <button class="btn btn-success btn-sm">Add Role</button>
               

            </div>
            <div class="col-md-3"></div>

            
           
           
        </div>
    </div>
@endsection