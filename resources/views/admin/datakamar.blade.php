@extends('layouts.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <h1 class="text-center">Form Tambah Kamar</h1>

            <!-- Card Layout for Form -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('storekamar') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- No Kamar -->
                        <div class="mb-3">
                            <label for="noKamar" class="form-label">No Kamar</label>
                            <input type="text" class="form-control" name="noKamar" placeholder="Masukkan No Kamar" required>
                        </div>

                        <!-- Harga Kamar -->
                        <div class="mb-3">
                            <label for="hargaKamar" class="form-label">Harga Kamar</label>
                            <input type="number" class="form-control" name="hargaKamar" placeholder="Masukkan Harga Kamar" required>
                        </div>

                        <!-- Status Kamar -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" required>
                                <option value="" disabled selected>Pilih Status Kamar</option>
                                <option value="Kosong">Kosong</option>
                                <option value="Isi">Isi</option>
                            </select>
                        </div>

                        <!-- Fasilitas Kamar -->
                        <h3>Fasilitas Kamar</h3>
                        <div id="fasilitasContainer">
                            <div class="mb-3 row">
                                <div class="col">
                                    <select class="form-select" name="fasilitas[]" required>
                                        <option value="" disabled selected>Pilih Fasilitas</option>
                                        @foreach($fasilitas as $f)
                                            <option value="{{ $f->id }}">{{ $f->nama_fasilitas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger" onclick="removeFasilitas(this)">Hapus</button>
                                </div>
                            </div>
                        </div>

                        <!-- Add Fasilitas Button -->
                        <button type="button" id="addFasilitas" class="btn btn-primary mb-3">Tambah Fasilitas +</button>

                        <!-- Gambar Kamar -->
                        <h3>Gambar Kamar</h3>
                        <div id="gambarContainer">
                            <div class="mb-3 row">
                                <div class="col">
                                    <input type="file" class="form-control" name="gambar[]" accept="image/*" required>
                                </div>
                                <div class="col">
                                    <select class="form-select" name="tipe_gambar[]" required>
                                        <option value="" disabled selected>Pilih Tipe Gambar</option>
                                        <option value="interior">Interior</option>
                                        <option value="eksterior">Eksterior</option>
                                        <option value="fasilitas">Fasilitas</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger" onclick="removeGambar(this)">Hapus</button>
                                </div>
                            </div>
                        </div>

                        <!-- Add Gambar Button -->
                        <button type="button" id="addGambar" class="btn btn-primary mb-3">Tambah Gambar +</button>

                        <!-- Footer with Submit Button -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Add Fasilitas Row
    document.getElementById('addFasilitas').addEventListener('click', function() {
        const container = document.getElementById('fasilitasContainer');
        const newRow = document.createElement('div');
        newRow.classList.add('mb-3', 'row');
        newRow.innerHTML = `
            <div class="col">
                <select class="form-select" name="fasilitas[]" required>
                    <option value="" disabled selected>Pilih Fasilitas</option>
                    @foreach($fasilitas as $f)
                        <option value="{{ $f->id }}">{{ $f->nama_fasilitas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <button type="button" class="btn btn-danger" onclick="removeFasilitas(this)">Hapus</button>
            </div>
        `;
        container.appendChild(newRow);
    });

    // Remove Fasilitas Row
    function removeFasilitas(button) {
        const row = button.closest('.row');
        row.remove();
    }

    // Add Gambar Row
    document.getElementById('addGambar').addEventListener('click', function() {
        const container = document.getElementById('gambarContainer');
        const newRow = document.createElement('div');
        newRow.classList.add('mb-3', 'row');
        newRow.innerHTML = `
            <div class="col">
                <input type="file" class="form-control" name="gambar[]" accept="image/*" required>
            </div>
            <div class="col">
                <select class="form-select" name="tipe_gambar[]" required>
                    <option value="" disabled selected>Pilih Tipe Gambar</option>
                    <option value="interior">Interior</option>
                    <option value="eksterior">Eksterior</option>
                    <option value="fasilitas">Fasilitas</option>
                </select>
            </div>
            <div class="col">
                <button type="button" class="btn btn-danger" onclick="removeGambar(this)">Hapus</button>
            </div>
        `;
        container.appendChild(newRow);
    });

    // Remove Gambar Row
    function removeGambar(button) {
        const row = button.closest('.row');
        row.remove();
    }
</script>
@endsection
