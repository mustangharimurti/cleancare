@include('layout.nav')
@section('content')
<div class="container-sm my-5">
<form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
@csrf
@method('put')
<div class="row justify-content-center">
    <div class="p-5 bg-light rounded-3 border col-xl-6">
        <div class="mb-3 text-center">
            <i class="bi bi-archive-fill fs-1"></i>
            <h4>Edit Barang</h4>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" type="text"
                    name="nama" id="nama" value="{{ $barang->Nama }}" placeholder="Enter the nama">
                @error('nama')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input class="form-control @error('nohp') is-invalid
    @enderror" type="number"
                    name="nohp" id="nohp" value="{{ $barang->NoHP }}" placeholder="Enter the no hp">
                @error('nohp')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input class="form-control @error('alamat')
    is-invalid @enderror"
                    type="text" name="alamat" id="alamat" value="{{ $barang->Alamat }}"
                    placeholder="Enter the Alamat">
                @error('alamat')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>

            <div class="col-md-12 mb-3">
                <label for="position" class="form-label">Position</label>
                <select name="position" id="position" class="form-select">
                    @foreach ($position as $position)
                        <option value="{{ $position->id }}"
                            {{ $barang->position_id == $position->id ? 'selected' : '' }}>
                            {{ $position->id . '-' . $position->namaBarang }}
                        </option>
                    @endforeach
                </select>
                @error('position')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 d-grid">
                <a href="{{ route('barang.index') }}" class="btn
    btn-outline-dark btn-lg mt-3"><i
                        class="bi-arrow-left-circle me-2"></i>
                    Cancel</a>
            </div>
            <div class="col-md-6 d-grid">
                <button type="submit" class="btn btn-dark btn-lg mt-3">
                    <i class="bi-check-circle me-2"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>
</form>
</div>
</form>
</div>
@include('layout.footer')
