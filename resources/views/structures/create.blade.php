<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Struktur - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('structures.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                            
                                <!-- error message untuk title -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JABATAN</label>
                                {{-- <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" placeholder="Masukkan Judul Post"> --}}
                                <select class="custom-select" @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}">
                                  <option selected>Open this select menu</option>
                                  <option value="Pengasuh">Pengasuh</option>
                                  <option value="Dewan Pengasuh">Dewan Pengasuh</option>
                                  <option value="Dewan Pengasuh">Dewan Pengasuh</option>
                                  <option value="Dewan Pengasuh">Dewan Pengasuh</option>
                                  <option value="Penasehat">Penasehat</option>
                                  <option value="Ketua Pondok">Ketua Pondok</option>
                                  <option value="Sekretaris I">Sekretaris I </option>
                                  <option value="Sekretaris II">Sekretaris II</option>
                                  <option value="Bendahara I">Bendahara I</option>
                                  <option value="Bendahara II">Bendahara II</option>
                                  <option value="Pendidikan I">Pendidikan I</option>
                                  <option value="Pendidikan II">Pendidikan II</option>
                                  <option value="Pendidikan III">Pendidikan III</option>
                                  <option value="Pendidikan IV">Pendidikan IV</option>
                                  <option value="Keamanan I">Keamanan I</option>
                                  <option value="Keamanan II">Keamanan II</option>
                                  <option value="Keamanan III">Keamanan III</option>
                                  <option value="Keamanan III">Keamanan IV</option>
                                  <option value="Kesehatan I">Kesehatan I</option>
                                  <option value="Kesehatan II">Kesehatan II</option>
                                  <option value="Kesehatan III">Kesehatan III</option>
                                  <option value="Kesejahteraan I">Kesejahteraan I</option>
                                  <option value="Kesejahteraan II">Kesejahteraan II</option>
                                  <option value="Kesejahteraan III">Kesejahteraan III</option>
                                  <option value="Kebersihan I">Kebersihan I</option>
                                  <option value="Kebersihan II">Kebersihan II</option>
                                  <option value="Kebersihan III">Kebersihan III</option>
                                  <option value="Kebersihan IV">Kebersihan IV</option>
                                  <option value="Dhalem">Dhalem </option>
                                  <option value="Dhalem">Dhalem </option>
                                  <option value="Dhalem">Dhalem </option>
                                  <option value="Dhalem">Dhalem </option>
                                </select>
                                <!-- error message untuk title -->
                                @error('position')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>