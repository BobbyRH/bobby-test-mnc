@extends('template')
 
@section('content')

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CURD Soal Test</h2>
            </div>
            
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered" id="datatbl">
        <thead>
            <tr>
                <th width="20px" class="text-center">ID</th>
                <th>Title</th>
                <th>Publish Date</th>
                <th width="280px"class="text-center">
                <div class="float-right">
                    <a class="btn btn-warning" href="{{ route('posts.create') }}"> Create Post</a>
                </div>
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            <td class="text-center">{{ $post->id }}</td>
            <td><span title="{{ $post->description }}">{{ $post->title }}</span></td>
            <td><span>{{ $post->publish_date }}</span></td>
            <td class="text-center">
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
 
 
@endsection