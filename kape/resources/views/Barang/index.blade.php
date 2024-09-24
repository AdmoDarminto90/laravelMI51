<table class="table">
    <tr>
        <th>id</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
    </tr>
    @foreach ($hasil as $row)
        <tr>
            <td>
                {{$row['id']}}
            </td>
            <td>
                {{$row['nama_barang']}}
            </td>
            <td>
                {{$row['katagori']}}
            </td>
        </tr>
    @endforeach
</table>