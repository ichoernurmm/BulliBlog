@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/lsapp/public/posts/create" class="btn btn-primary">Create Post</a>
                        <hr>
                        <h3>Your Blog Posts</h3>
            
                        @if($posts)
                        <table class="table table-striped">
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="{{ route('posts.edit',$post->id) }}" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <form class="pull-right" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                       @else 
                        <p>You have no posts.</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
