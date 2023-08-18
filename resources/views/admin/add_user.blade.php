@extends('admin.templates.layout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>

                <h1 class="page-header-title">Users</h1>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->
    <form action="{{ route('add-user') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="formFile" class="form-label">Avatar</label>
                <input class="form-control" type="file" id="formFile" name="avatar">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-1">ADD</button>
    </form>
@endsection
