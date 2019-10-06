<html>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> List Kategori Artikel</div>

                <div class="card-body">
                <a href="{!! route('artikel.create') !!}" class="btn btn-success">Tambah Data
                            </a>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Kategori Id</td>
                        <td>Users</td>
                        <td>Create</td>
                        <td>Aksi</td>
                    </tr>
                    
                    @foreach($listiArtikel as $item)
                    
                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->Judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_artikel_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:s:i') !!}</td>


                        <td>
                            <a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-sm btn-primary">
                            lihat
                            </a>
                        </td>
                    </tr>


                    @endforeach

                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


