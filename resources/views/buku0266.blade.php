<head>
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
    <style>
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width:100%;
            border: 1px solid #ddd;
        }
        thead{
            background-color: #f2f2f2;
        }
        th, td {
            text-align:left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah {
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x: auto">
        <a class="tambah Buku" href="{{route('buku0266.create')}}">Tambah Data</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>kode buku</th>
                    <th>kode kategori</th>
                    <th>kode penerbit</th>
                    <th>judul buku</th>
                    <th>jumlah buku</th>
                    <th>Pengarang buku</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach ($databuku as $buku)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$buku->kode_buku}}</td>
                    <td>{{$buku->kode_kategori}}</td>
                    <td>{{$buku->kode_penerbit}}</td>
                    <td>{{$buku->judul_buku}}</td>
                    <td>{{$buku->jumlah_buku}}</td>
                    <td>{{$buku->pengarang_buku}}</td>
                    <td>{{$buku->tahun_terbit_buku}}</td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>