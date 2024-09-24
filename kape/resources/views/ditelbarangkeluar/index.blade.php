<table class="table">
    <tr>
        <th>tanggal</th>
        <th></th>
        <th>Jumlah</th>
        <th>kondisi</th>
    </tr>
    @foreach ($hasil as $row)
        <tr>
            <td>
                {{$row['Barang_Masuk_id']}}
            </td>
            <td>
                {{$row['Barang_id']}}
            </td>
            <td>
                {{$row['Jumlah<']}}
            </td>
            <td>
                {{$row['kondisi<']}}
            </td>
        </tr>
    @endforeach
</table>