@extends('layouts.app')

@section('title', 'Data portfolio')

@section('content')

<div class="container">
    <a href="/admin/portfolio" class="btn btn-info mb-3">Back</a>
    <div class="row">
        <div class="col-md-8">
            <form action={{ route('portfolio.update', $portfolio->id) }} method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $portfolio->title }}">
                </div>
                @error('title')
                <small style="color:red">{{ $message }}</small>    
                @enderror

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description">{{ $portfolio->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{ $message }}</small>    
                @enderror
                <img src="/image/{{ $portfolio->image }}" alt="" class="img-fluid">
                
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
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