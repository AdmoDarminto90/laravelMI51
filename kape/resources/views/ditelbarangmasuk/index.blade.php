<table class="table">
    <tr>
        <th>Barang_Masuk_id</th>
        <th>Barang_id</th>
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