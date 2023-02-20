@extends('frontend.layouts.admin')
@section('title', 'Home Page')
@section('content')


<div class="container">
@if(!$user_blogs->isEmpty())
    <table style="width:100%" ; class="data-table">
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach($user_blogs as $user_blog)
        <tr>
            <td>{{$user_blog->title}} </td>
            <td>{{$user_blog->content}} </td>
        </tr>
        @endforeach
    </table>
@else
    <h4>You don't have any blogs..</h4>
@endif
</div>

@endsection