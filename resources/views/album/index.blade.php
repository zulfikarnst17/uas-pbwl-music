
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>ALBUM</h3>
    <h4>
    <a href="{{ url('/album/create') }}"class="btn btn-primary btn-sm float-left">Tambah Data</a><br>
    </h4>

    <table class="table table-bordered" >
        <tr>
            <th>Album ID</th>
            <th>Nama Album</th>
            <th>Update at</th>
            <th>created at</th>
            <th>DELETE</th>

        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->album_id }}</td>
            <td>{{ $row->album_nama }}</td>
            <td>{{ $row->update_at }}</td>
            <td>{{ $row->created_at }}</td>
           
            
    <td><form action="{{ url('/album/' . $row->album_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
            <button>DELETE</button>
    </form></td>
        
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 