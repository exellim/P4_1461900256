<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>P4_1461900256</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
        .button1 {
        border: none;
        color: white;
        font: bolder;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        background-color: #4CAF50;
        }
    </style>
</head>
<body>
  <div style="overflow-x: auto;">
            <a class="tambahtugas" href="{{ route('buku0256.create') }}"><button type="button" class="button1">Tambah Tugas</button></a>
  <form action="/pasien/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari Buku .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
  <table>
      <thead>
          <tr>
              <th>id</th>
              <th>judul</th>
              <th>tahun terbit</th>
              <th>Jenis Buku</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach($kirim as $bk)
        <tr>
            <td>{{$bk->id}}</td>
            <td>{{$bk->judul}}</td>
            <td>{{$bk->tahun_terbit}}</td>
            <td>{{$bk->jenis}}</td>
            <td><a href="{{ url('buku0256/'.$bk->id. '/edit') }}">Edit</a>
            |
            <form action="{{ url('buku0256/'. $bk->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
  <a href="/bukuc/export_excel" class="btn btn-success my-3" target="_blank"><button type="button" class="button1">EXPORT EXCEL</button></a>
</div>
</body>