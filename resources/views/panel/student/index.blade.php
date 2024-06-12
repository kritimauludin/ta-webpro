@extends('layouts.layout')

@section('content')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Begin Page Content -->
                    <div class="container-fluid mt-5">

                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                        <!-- Tabel -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-dark d-inline">Student</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Terdaftar Sejak</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($students as $student)
                                            <tr>
                                                <th>{{$loop->iteration}}</th>
                                                <th>{{$student->name}}</th>
                                                <th>{{$student->email}}</th>
                                                <th>
                                                    @if ($student->status == 0)
                                                        Menunggu Konfirmasi
                                                    @else
                                                        Dikonfirmasi
                                                    @endif
                                                </th>
                                                <th>{{$student->created_at}}</th>
                                                <th>
                                                    <a href="/panel/student/{{$student->id}}" class=""><i class="fas fa-fw fa-book-reader text-info"></i></a>
                                                    <a href="/panel/student/{{$student->id}}/edit" class=""><i class="fas fa-fw fa-edit text-warning"></i></a>
                                                    <form action="/panel/student/{{$student->id}}" method="POST" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="border-0 bg-transparant" style="background-color: transparent;" onclick="return confirm('Delete this student?');"><i class="fas fa-fw fa-trash-alt text-danger"></i></button>
                                                    </form>
                                                </th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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