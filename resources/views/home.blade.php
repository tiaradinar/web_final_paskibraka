@extends('template.main')

@section('container')
<div class="row">
    <div class="col">
    <h1>Hai Calon Paskibraka</h1>
    <p>Mari daftarkan diri anda untuk menjadi paskibraka!</p>
    <p class="quote">"Pasukan Pengibar Bendera Pusaka (Paskibraka) merupakan putra-putri terbaik bangsa, kader pemimpin bangsa 
        yang direkrut dan diseleksi secara bertahap dan berjenjang melalui sistem dan mekanisme pendidikan dan pelatihan"</p>
    <button type="button" class="btn btn-outline-primary" onclick ="location.href='/form'">Daftar</button>
    </div>
    <div class="col">
        <img src="img/person.jpg" alt="" width="75%">
    </div>
</div>
@endsection