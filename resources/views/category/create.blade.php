@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Tambah Kategori</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('categories') }}">Kategori</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('category.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control @error('name') isinvalid @enderror"
                                placeholder="Nama Kategori" name="name" value="{{ old('name') }}" required onkeypress='return harustext(event)'>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Simpan" required onclick= "return confirm('Yakin ingin menambahkan kategori ini?')">
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
function harustext(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
}
</script>
@endsection
