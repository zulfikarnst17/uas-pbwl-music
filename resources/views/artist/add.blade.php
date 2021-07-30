@extends('layouts.app')

@section('content')

 <div class="container">

 <h3>Tambah Data Artist</h3>
 <form action="{{ url('/artist') }}" method="POST">
 @csrf
        <table>
            <tr>
                <td>Artist ID</td>
                <td><input type="text" name="artist_id"></td>
            </tr>
            <tr>
                <td>Nama Artist</td>
                <td><input type="text" name="artist_nama"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</div>

 @endsection