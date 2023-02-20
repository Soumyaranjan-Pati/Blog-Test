@extends('admin.layouts.master')
@section('title', 'Admin Dashboard Page')
@section('content')

 <table style="width:100%" ; class="data-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($user_datas as $user_data)
        <tr>
            <td>{{$user_data->first_name.' '.$user_data->last_name}} </td>
            <td>{{$user_data->email}} </td>
            <td> <a href="{{route('admin.user_edit',['user_id'=>$user_data->id])}}" class="btn btn-info">Edit</a></td>
            <td> <a href='user_delete/ {{$user_data->id}}' class="btn btn-danger">Delete</a></td>

        </tr>
        @endforeach
    </table>

 @endsection