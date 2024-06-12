@extends('layouts.layout')

@section('content')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
                    <div class="container py-4">
                        <div class="bg-color container-fluid py-2 text-center" style="background-color: white;">
                            <h1 class="display-5 fw-bold" style="text-shadow: 1px 1px 1px #008374;">
                                Form Pendaftaran Mahasiswa
                            </h1>
                            <h2 class="fw-bold text-center" style="text-shadow: 1px 1px 1px #008374;">
                                Universitas Pakuan
                            </h2>
                        </div>
                
                        <div class="col-md-12 mt-3 mb-3 mx-auto form-box">
                            <form action="/panel/student" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" >
                                <input type="hidden" name="status" value="0" >
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-form mb-3 form-box mt-3" style="font-family: 'Open Sans', sans-serif;">
                                            <h3 style="font-size: 25px; font-weight: bold; text-shadow: 5px 5px 5px rgb(15, 15, 15); ">
                                                Form Calon Mahasiswa
                                            </h3>
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">Nama Peserta Calon Mahasiswa</label>
                                            <input type="text" class="form-control" readonly value="{{auth()->user()->name}}" placeholder="Nama Peserta">
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="1">
                                                <label class="form-check-label" for="jenis_kelamin1">Laki Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="0">
                                                <label class="form-check-label" for="jenis_kelamin2">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-box">
                                            <div class="row">
                                                <label for="exampleInputEmail1" class="form-label">Tempat, Tanggal Lahir</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control" name="tempat_lahir"
                                                        placeholder="Tempat Lahir">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" name="tanggal_lahir">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                                            <textarea class="form-control" name="alamat" placeholder="Alamat lengkap"></textarea>
                                        </div>
                                        <div class="form-box">
                                            <div class="row">
                                                <label for="exampleInputEmail1" class="form-label">Kecamatan, Kota/Kabupaten</label>
                
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="kecamatan_domisili" placeholder="Kecamatan">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="kota_domisili"
                                                        placeholder="Kota/Kabupaten">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-md-12">
                                        <div class="bg-form mb-3 form-box mt-5" style="font-family: 'Open Sans', sans-serif;">
                                            <h3 style="font-size: 25px; font-weight: bold; text-shadow: 5px 5px 5px rgb(15, 14, 14);">
                                                Form Orang Tua
                                            </h3>
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">Nama Ayah Mahasiswa</label>
                                            <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah">
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">Pekerjaan Ayah</label>
                                            <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">No Telpon Ayah</label>
                                            <input type="text" class="form-control" name="no_telpon_ayah" placeholder="No Telpon">
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">Nama Ibu Mahasiswa</label>
                                            <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu">
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">Pekerjaan Ibu</label>
                                            <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
                                        </div>
                                        <div class="form-box">
                                            <label for="exampleInputEmail1" class="form-label">No telpon Ibu</label>
                                            <input type="text" class="form-control" name="no_telpon_ibu" placeholder="No Telpon">
                                        </div>
                
                                        <div class="col-md-12 mt-3 mb-3">
                                            <div class="form-box">
                                                <label for="formFile" class="form-label">Foto Bukti Pembayaran Pendaftaran</label>
                                                <br>
                                                <small>*Biaya sebesar Rp. 3.000.000,-</small>
                                                <input class="form-control" type="file" name="bukti_bayar" id="bukti_bayar">
                                            </div>
                                            <div class="d-grid gap-2 d-md-block align-self-end text-center mt-4">
                                                <button class="bg-button btn btn-success" type="submit">Kirim</button>
                                                <button class="bg-button btn btn-danger" type="reset">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
    
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website {{date('Y')}}</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
@endsection