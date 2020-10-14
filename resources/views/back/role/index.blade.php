@extends('back.master')
@section('content')
<div class="container ">
       
        <div class="rows mt-5">
            <h3 ><strong>User</strong></h3>
            
            <div class="col-md-12 mt-3 ">
                <table class="table table-bordered table-hover" tableborder="20" bordercolor="violet" bgcolor="silver">
                   
                <thead>
                <tr>
                <th  bgcolor="pink" >ID</th>
                <th  bgcolor="pink">Name</th>
               
            </tr>
        </thead>
            <tbody> 
                @foreach($roles as $role)
                <tr>
                    <td><b>{{$role->id}}</b></td>
                    <td><b>{{$role->name}}</b></td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
@endsection