@extends('layouts.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row d-flex">
                <h1 class="text-center">Data Fasilitas</h1>
                <div class="col-sm-4">
                    <a href="" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalAddFasilitas">Tambah +</a>
                </div>
            </div>

            <div class="row bg-white shadow rounded">
                <div class="table-responsive p-3">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NAMA FASILITAS</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($fasilitas) > 0)
                                @foreach($fasilitas as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nama_fasilitas }}</td>
                                        <td>
                                            <form action="{{ route('admin.destroyfasilitas', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                            <a href="#editFasilitas{{ $item->id }}" data-bs-toggle="modal" class="btn btn-secondary btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                    {{-- EDIT MODAL --}}
                                    <div class="modal fade" id="editFasilitas{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Fasilitas</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.updatefasilitas', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                                                            <input type="text" name="nama_fasilitas" id="nama_fasilitas" class="form-control" value="{{ $item->nama_fasilitas }}" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAddFasilitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Fasilitas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.storefasilitas') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas" id="nama_fasilitas" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
    @endif
</script>
@endsection