@extends('admin.templates.layout')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-products.html">Course</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add course</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Add Course</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-8">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Product information</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="productNameLabel" class="input-label">Title</label>

                            <input type="text" class="form-control" name="productName" id="productNameLabel"
                                placeholder="Title...">
                        </div>

                        <label class="input-label">Description</label>

                        <!-- Quill -->
                        <textarea class="form-control" name="desc" id="" cols="30" rows="10"></textarea>
                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Media</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Dropzone -->
                        <div id="attachFilesNewProjectLabel"
                            class="js-dropzone dropzone-custom custom-file-boxed dz-clickable">
                            <div class="dz-message custom-file-boxed-label">
                                <img class="avatar avatar-xl avatar-4by3 mb-3" src="assets\svg\illustrations\browse.svg"
                                    alt="Image Description">
                                <h5 class="mb-1">Choose files to upload</h5>
                                <p class="mb-2">or</p>
                                <span class="btn btn-sm btn-primary">Browse files</span>
                            </div>
                        </div>
                        <!-- End Dropzone -->
                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card">
                    <!-- Body -->
                    <div class="card-body">
                        <!-- Add Another Option Input Field -->
                        <div id="addAnotherOptionFieldTemplate" style="display: none;">
                            <!-- Form Group -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group-prepend">
                                            <!-- Select -->
                                            <select class="js-select2-custom-dynamic custom-select" size="1"
                                                style="opacity: 0;"
                                                data-hs-select2-options="{
                                &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;
                              }">
                                                <option value="Size">Size</option>
                                                <option value="Color">Color</option>
                                                <option value="Material">Material</option>
                                                <option value="Style">Style</option>
                                                <option value="Title">Title</option>
                                            </select>
                                            <!-- End Select -->
                                        </div>
                                    </div>

                                    <div class="col-8">
                                        <!-- Select2 -->
                                        <select class="js-select2-custom-dynamic custom-select" size="1"
                                            style="opacity: 0;" multiple=""
                                            data-hs-select2-options="{
                              &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                              &quot;placeholder&quot;: &quot;Separate options with enter&quot;,
                              &quot;tags&quot;: true
                            }">
                                            <option label="empty"></option>
                                        </select>
                                        <!-- End Select2 -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <!-- End Add Another Option Input Field -->
                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Pricing</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="priceNameLabel" class="input-label">Price</label>

                            <div class="input-group">
                                <input type="text" class="form-control" name="priceName" id="priceNameLabel"
                                    placeholder="0.00" aria-label="0.00">
                                <div class="input-group-append">
                                    <!-- Select -->
                                    <div id="priceSelect" class="select2-custom select2-custom-right">
                                        <select class="js-select2-custom custom-select select2-hidden-accessible"
                                            size="1" style="opacity: 0;" data-select2-id="17" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="USD" selected="" data-select2-id="19">USD</option>
                                            <option value="VND" selected="" data-select2-id="20">VND</option>
                                        </select>
                                    </div>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->
                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Organization</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="categoryLabel" class="input-label">Category</label>
                            <!-- Select -->
                            <select class="js-select2-custom custom-select select2-hidden-accessible" size="1"
                                style="opacity: 0;" id="categoryLabel" data-select2-id="categoryLabel" tabindex="-1"
                                aria-hidden="true">
                                <option label="empty" data-select2-id="155"></option>
                                <option value="Clothing" data-select2-id="156">Clothing</option>
                                <option value="Shoes" data-select2-id="157">Shoes</option>
                                <option value="Electronics" data-select2-id="158">Electronics</option>
                                <option value="Others" data-select2-id="159">Others</option>
                            </select>
                            <!-- End Select -->
                        </div>
                        <!-- Form Group -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->

        <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem;">
        </div>
    </div>
@endsection
