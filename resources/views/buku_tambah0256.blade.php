  
<form action="{{ route('buku0256.store') }}" method="post">
    @csrf
    id: <input type="text" name="id">
    Judul Buku: <input type="text" name="judul">
    Tahun Terbit: <input type="text" name="tahun_terbit">
    <button type="Submit">Simpan Data</button>
</form>