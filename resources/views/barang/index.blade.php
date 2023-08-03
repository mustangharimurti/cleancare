<br><br><br>
@include('layout.nav')
<div class="row mb-0">
    <div class="col-lg-3 col-xl-6">
        <ul class="list-inline mb-0 float-end">
            <li class="list-inline-item">
                <a href="{{ route('barangs.exportExcel') }}" class="btn btn-outline-success">
                    <i class="bi bi-download me-1"></i> to Excel
                </a>
            </li>
        </ul>
    </div>
</div>
<table class="table table-light">
    <thead>
      <tr >
        {{-- <th scope="col">Kode barang</th> --}}
        <th scope="col">Nama</th>
        <th scope="col">No HP</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jenis Pesanan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barang as $barang)
        <tr>
        {{-- <td>{{ $barang->id }}</td> --}}
        <td>{{ $barang->Nama }}</td>
        <td>{{ $barang->NoHP }}</td>
        <td>{{ $barang->Alamat }}</td>
        <td>
            @if($barang->position_id == 1)
                residential cleaning
            @elseif ($barang->position_id == 2)
                move in-out cleaning
            @else
                InActive
            @endif
        </td>
        <td>

            {{-- ACTIONS SECTION --}}
            @include('barang/action')
        </td>
        </tr>
        @endforeach
    </tbody>

  </table>
@include('layout.footer')
