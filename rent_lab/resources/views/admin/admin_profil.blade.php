@extends('admin.admin_template_navbar')

@section('content')
<div class="card mb-3">
    <div class="card-header position-relative min-vh-25 mb-7">
        <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url({{ asset('admin/assets/img/generic/4.jpg') }});"></div>
        <!--/.bg-holder-->
        <div class="avatar avatar-5xl avatar-profile">
            <img class="rounded-circle img-thumbnail shadow-sm" src="{{ asset('admin/assets/img/team/2.jpg') }}" width="200" alt="Admin Avatar" />
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="mb-1">{{ $admin->name }}
                    <span data-bs-toggle="tooltip" data-bs-placement="right" title="Verified">
                        <small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small>
                    </span>
                </h4>
                <h5 class="fs-0 fw-normal">{{ $admin->email }}</h5>
                <p class="text-500">Admin</p>
                <a class="btn btn-falcon-primary btn-sm px-3" href="#" 
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   Logout
</a>

<form id="logout-form" action="{{ route('admin_logout') }}" method="POST" style="display: none;">
    @csrf
</form>
                <div class="border-bottom border-dashed my-4 d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
@endsection
