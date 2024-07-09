@extends('template-admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-5 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations Admin! 🎉</h5>
                                <p class="mb-4">
                                    Kamu berhasil masuk pada <span class="fw-bold">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</span> ,silahkan manage sistem anda.
                                </p>
                                

                                {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('env') }}/logomts.png" width="130px" srcset="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
    </div>
@endsection