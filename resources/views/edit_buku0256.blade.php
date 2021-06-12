<form action="{{ url('buku0256/update/'.$ambil->id) }}" method="post">
    @csrf
    <input type="hidden" name="method" value="patch">
    <input type="hidden" name="id" value="{{ $ambil->id }}">
    Judul: <input type="text" name="judul" value="{{ $ambil->judul }}">
    Tahun Terbit: <input type="text" name="tahun_terbit" value="{{ $ambil->tahun_terbit }}">
    <button type="Submit">Simpan Data</button>
</form>