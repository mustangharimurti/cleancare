<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NoHP</th>
            <th>Alamat</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $index => $barang)
            <tr>
                <td>{{ $index + 1 }}</td>
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
            </tr>
        @endforeach
    </tbody>
</table>
