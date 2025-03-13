@extends('layouts.dashboard', ['title' => 'Dashboard'])

@section('content')

<div class="content-body">
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="assets/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{ $user->name }}</h4>
                                    <p>{{$user->role}}</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ $user->name }}</h4>
                                    <!-- <p>Email</p> -->
                                </div>
                                <!-- <div class="dropdown ms-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <!-- <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link">Posts</a>
                                    </li> -->
                                    <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link active show">About Me</a>
                                    </li>
                                    <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Update Your Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">About Me</h4>
                                                <p class="mb-2">{{ $user->about }}</p>
                                            </div>
                                        </div>
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">Achievements</h4>
                                                <p class="mb-2">{{ $user->achievement }}</p>
                                            </div>
                                        </div>
                                        <!-- <div class="profile-skills mb-5">
                                            <h4 class="text-primary mb-2">Skills</h4>
                                            <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                            <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                            <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                            <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                            <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                            <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                        </div> -->
                                        <!-- <div class="profile-lang  mb-5">
                                            <h4 class="text-primary mb-2">Language</h4>
                                            <a href="javascript:void()" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a>
                                            <a href="javascript:void()" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                            <a href="javascript:void()" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                        </div> -->
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">Personal Information</h4>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <h5 class="f-w-500">Name
                                                        <span class="d-none d-sm-block pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-6 mb-1">
                                                    <span>{{ $user->name }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <h5 class="f-w-500">Email
                                                        <span class="d-none d-sm-block pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-6">
                                                    <span>{{ $user->email }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <h5 class="f-w-500">Age
                                                        <span class="d-none d-sm-block pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-6">
                                                    <span>27</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <h5 class="f-w-500">Location
                                                        <span class="d-none d-sm-block pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-6">
                                                    <span>{{ $user->address }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <h5 class="f-w-500">Year Experience
                                                        <span class="d-none d-sm-block pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-6">
                                                    <span>07 Year Experiences</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form action="{{ route('user.profile.update') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>Name</label>
                                                            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Email</label>
                                                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="address" placeholder="1234 Main St" class="form-control" value="{{ auth()->user()->address }}">
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>City</label>
                                                            <input type="text" name="city" class="form-control" value="{{ auth()->user()->city }}">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label>State</label>
                                                            <input type="text" name="state" class="form-control" value="{{ auth()->user()->state }}">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label>Zip</label>
                                                            <input type="text" name="zip" class="form-control" value="{{ auth()->user()->zip }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Achievements</label>
                                                        <textarea name="achievement" class="form-control">{{ auth()->user()->achievement }}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>About</label>
                                                        <textarea name="about" class="form-control">{{ auth()->user()->about }}</textarea>
                                                    </div>

                                                    <button class="btn btn-primary" type="submit">Update Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection