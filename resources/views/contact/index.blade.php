@extends('layouts.app')

@section('title', 'Data contact')

@section('content')

<div class="container">
    <a href="/contact/create" class="btn btn-info mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Succes</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Description</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0
                    @endphp
                    @foreach ($contact as $contact)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $contact->title }}</td>
                        <td>{{ $contact->description }}</td>
                        <td>
                            <img src="/image/{{ $contact->image }}" alt="" class="" width="100">
                        </td>
                        <td>
                            <a href="{{route('contact.edit', $contact->id)}}" class="btn btn-warning">Edit</a>
                            
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </tr>
        </table>
    </div>
</div>

@endsection