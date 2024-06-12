@extends('layouts.layout')

@section('content')
       
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Begin Page Content -->
                    <div class="container-fluid  mt-5">
    
                        <!-- Content Row -->
                        <div class="row">
    
                            @if (auth()->user()->role_id == 1)
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Total Mahasiswa Terdaftar</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$studentRegister}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Mahasiswa Dikonfirmasi</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $studentConfirm }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Pending Requests</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $studentPending }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @else
                            <div class="col-lg-12 mt-5 text-center">
                                <div class="card py-5">
                                    <h4>Silahkan lengkapi data anda dimenu formulir pendaftaran, Hati-hati dalam mengisi data. Perubahan hanya bisa dilakukan oleh admin!!</h4>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                    <!-- /.container-fluid -->
    
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