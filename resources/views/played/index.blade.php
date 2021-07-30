
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>PLAYED</h3>
    <h4>
    <a href="{{ url('/played/create') }}"class="btn btn-primary btn-sm float-left">Tambah Data</a><br>
    </h4>
    <table class="table table-bordered" >
        <tr>
            <th>Artist ID</th>
            <th>Album ID</th>
            <th>Track ID</th>
            <th>Played</th>
            <th>DELETE</th>

        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->album_id }}</td>
            <td>{{ $row->track_id }}</td>
            <td>{{ $row->played }}</td>
    <td><form action="{{ url('/played/' . $row->artist_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            <button>Hapus</button>
    </form></td>
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 