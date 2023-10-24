<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table td:nth-child(1),
        table td:nth-child(4),
        table td:nth-child(5),
        table td:nth-child(6) {
            text-align: center
        }
    </style>
</head>
<body>

    <table class="table table-striped" width="100%" border="1" cellpadding="5px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $buku -> judul }}</td>
                    <td>{{ $buku -> penulis }}</td>
                    <td>{{ "Rp " . number_format($buku -> harga, 2, ',', '.')  }}</td>
                    <td>{{ $buku -> tgl_terbit }}</td>
                    <td>
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
