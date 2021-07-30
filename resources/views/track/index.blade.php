
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>TRACK</h3>
    <h4>
    <a href="{{ url('/track/create') }}"class="btn btn-primary btn-sm float-left">Tambah Data</a><br>
    </h4>
    <table class="table table-bordered" >
        <tr>
            <th>Track ID</th>
            <th>Track Nama</th>
            <th>Artist ID</th>
            <th>Album ID</th>
            <th>DELETE</th>

        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->track_id }}</td>
            <td>{{ $row->track_nama }}</td>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->album_id }}</td>
    <td><form action="{{ url('/track/' . $row->track) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
        <button>Hapus</button>
    </form></td>
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 