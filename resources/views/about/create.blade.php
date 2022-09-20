@extends('layouts.app')

@section('title', 'Data about')

@section('content')
<div class="container">
    <a href="/admin/about" class="btn btn-info mb-3">Back</a>
    <div class="row">
        <div class="col-md-8">
            <form action={{ route('about.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>    
                @enderror

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>    
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection