@extends('layouts.app')

@section('title', 'Create User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Home</a></div>
                    <div class="breadcrumb-item"><a href="#">Doctor</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create Doctor</h2>



                <div class="card">
                    <form action="{{ route('doctors.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Doctor</h4>
                        </div>
                        <div class="card-body">
                            {{-- input doctor name --}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control
                                    @error('name') is-invalid @enderror"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- input doctor specialist --}}
                            <div class="form-group">
                                <label>Specialist</label>
                                <input type="text"
                                    class="form-control @error('specialist') is-invalid @enderror"
                                    name="specialist">
                                @error('specialist')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- input doctor email --}}
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- input doctor phone --}}
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    name="phone"
                                >
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            {{-- input doctor sip --}}
                            <div class="form-group">
                                <label for="sip">SIP</label>
                                <input type="text"
                                    class="form-control @error('sip') is-invalid @enderror"
                                    name="sip"
                                    id="sip"
                                >
                                @error('sip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>    
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush