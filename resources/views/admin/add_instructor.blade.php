@extends('admin.templates.layout')
@section('content')
    <form action="{{ route('add-instructor') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Card -->
        <div id="addUserStepProfile" class="card card-lg active">
            <!-- Body -->
            <div class="card-body">
                <!-- Form Group -->
                <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Avatar</label>

                    <div class="col-sm-9">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                <img id="avatarImg" class="avatar-img" src="assets\img\160x160\img1.jpg"
                                    alt="Image Description">

                                <input type="file" name="avatar" class="js-file-attach avatar-uploader-input"
                                    id="avatarUploader"
                                    data-hs-file-attach-options="{
                            &quot;textTarget&quot;: &quot;#avatarImg&quot;,
                            &quot;mode&quot;: &quot;image&quot;,
                            &quot;targetAttr&quot;: &quot;src&quot;,
                            &quot;resetTarget&quot;: &quot;.js-file-attach-reset-img&quot;,
                            &quot;resetImg&quot;: &quot;./assets/img/160x160/img1.jpg&quot;,
                            &quot;allowTypes&quot;: [&quot;.png&quot;, &quot;.jpeg&quot;, &quot;.jpg&quot;]
                            }">
                                <span class="avatar-uploader-trigger">
                                    <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                </span>
                            </label>
                            <!-- End Avatar -->

                            <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i
                            class="tio-help-outlined text-body ml-1"></i></label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break">
                            <input type="text" class="form-control" name="name" placeholder="Name...">
                        </div>
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="emailLabel" placeholder="Email...">
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="emailLabel" placeholder="Password">
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Check Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="emailLabel"
                            placeholder="Check password">
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="bio" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <!-- End Form Group -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-end align-items-center">
                <input type="submit" class="btn btn-primary" value="ADD">
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </form>
@endsection
