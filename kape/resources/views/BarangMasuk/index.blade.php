<table class="table">
    <tr>
        <th>Pengirim</th>
        <th>User_id_Penerima</th>
        <th>Tanggal</th>
    </tr>
    @foreach ($hasil as $row)
        <tr>
            <td>
                {{$row['Pengirim']}}

            </td>
            <td>
                {{$row['User_id_Penerima']}}

            </td>
            <td>
                {{$row['tanggal']}}

            </td>
        </tr>
    @endforeach
</table>