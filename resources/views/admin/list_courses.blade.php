@extends('admin.templates.layout')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center mb-3">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Products <span class="badge badge-soft-dark ml-2">72,031</span></h1>
                    <div class="mt-2">
                        <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#exportProductsModal">
                            <i class="tio-download-to mr-1"></i> Export
                        </a>
                        <a class="text-body" href="javascript:;" data-toggle="modal" data-target="#importProductsModal">
                            <i class="tio-publish mr-1"></i> Import
                        </a>
                    </div>
                </div>

                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="ecommerce-add-product.html">Add product</a>
                </div>
            </div>
            <!-- End Row -->

            <!-- Nav Scroller -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-left"></i>
                    </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-right"></i>
                    </a>
                </span>

                <!-- Nav -->
                <ul class="nav nav-tabs page-header-tabs" id="pageHeaderTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Archived</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Publish</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unpublish</a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>
            <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->

        <div class="row justify-content-end mb-3">
            <div class="col-lg">
                <!-- Datatable Info -->
                <div id="datatableCounterInfo" style="display: none;">
                    <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
                        <span class="d-block d-sm-inline-block font-size-sm mr-3 mb-2 mb-sm-0">
                            <span id="datatableCounter">0</span>
                            Selected
                        </span>
                        <a class="btn btn-sm btn-outline-danger mb-2 mb-sm-0 mr-2" href="javascript:;">
                            <i class="tio-delete-outlined"></i> Delete
                        </a>
                        <a class="btn btn-sm btn-white mb-2 mb-sm-0 mr-2" href="javascript:;">
                            <i class="tio-archive"></i> Archive
                        </a>
                        <a class="btn btn-sm btn-white mb-2 mb-sm-0 mr-2" href="javascript:;">
                            <i class="tio-publish"></i> Publish
                        </a>
                        <a class="btn btn-sm btn-white mb-2 mb-sm-0" href="javascript:;">
                            <i class="tio-clear"></i> Unpublish
                        </a>
                    </div>
                </div>
                <!-- End Datatable Info -->
            </div>
        </div>
        <!-- End Row -->

        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <form>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Search users"
                                    aria-label="Search users">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>

                    <div class="col-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold mr-2">
                            <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;"
                                data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#datatableFilterSidebar&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                  &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                  &quot;hasOverlay&quot;: true,
                  &quot;smartPositionOff&quot;: true
                 }"
                                data-hs-unfold-target="#datatableFilterSidebar" data-hs-unfold-invoker="">
                                <i class="tio-filter-list mr-1"></i> Filters
                            </a>
                        </div>
                        <!-- End Unfold -->

                        <!-- Unfold -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;"
                                data-hs-unfold-options="{
                   &quot;target&quot;: &quot;#showHideDropdown&quot;,
                   &quot;type&quot;: &quot;css-animation&quot;
                 }"
                                data-hs-unfold-target="#showHideDropdown" data-hs-unfold-invoker="">
                                <i class="tio-table mr-1"></i> Columns <span
                                    class="badge badge-soft-dark rounded-circle ml-1">6</span>
                            </a>

                            <div id="showHideDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated"
                                style="width: 15rem; animation-duration: 300ms;" data-hs-target-height="352"
                                data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInUp"
                                data-hs-unfold-content-animation-out="fadeOut">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="mr-2">Product</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_product">
                                                <input type="checkbox" class="toggle-switch-input"
                                                    id="toggleColumn_product" checked="">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="mr-2">Type</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_type">
                                                <input type="checkbox" class="toggle-switch-input" id="toggleColumn_type"
                                                    checked="">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="mr-2">Vendor</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_vendor">
                                                <input type="checkbox" class="toggle-switch-input"
                                                    id="toggleColumn_vendor">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="mr-2">Stocks</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_stocks">
                                                <input type="checkbox" class="toggle-switch-input"
                                                    id="toggleColumn_stocks" checked="">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="mr-2">SKU</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_sku">
                                                <input type="checkbox" class="toggle-switch-input" id="toggleColumn_sku"
                                                    checked="">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="mr-2">Price</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_price">
                                                <input type="checkbox" class="toggle-switch-input"
                                                    id="toggleColumn_price" checked="">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="mr-2">Quantity</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_quantity">
                                                <input type="checkbox" class="toggle-switch-input"
                                                    id="toggleColumn_quantity">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="mr-2">Variants</span>

                                            <!-- Checkbox Switch -->
                                            <label class="toggle-switch toggle-switch-sm" for="toggleColumn_variants">
                                                <input type="checkbox" class="toggle-switch-input"
                                                    id="toggleColumn_variants" checked="">
                                                <span class="toggle-switch-label">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </label>
                                            <!-- End Checkbox Switch -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Unfold -->
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length"
                                aria-controls="datatable" class="">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                    <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                class="" placeholder="" aria-controls="datatable"></label></div>
                    <table id="datatable"
                        class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer"
                        data-hs-datatables-options="{
                 &quot;columnDefs&quot;: [{
                    &quot;targets&quot;: [0, 4, 9],
                    &quot;width&quot;: &quot;5%&quot;,
                    &quot;orderable&quot;: false
                  }],
                 &quot;order&quot;: [],
                 &quot;info&quot;: {
                   &quot;totalQty&quot;: &quot;#datatableWithPaginationInfoTotalQty&quot;
                 },
                 &quot;search&quot;: &quot;#datatableSearch&quot;,
                 &quot;entries&quot;: &quot;#datatableEntries&quot;,
                 &quot;pageLength&quot;: 12,
                 &quot;isResponsive&quot;: false,
                 &quot;isShowPaging&quot;: false,
                 &quot;pagination&quot;: &quot;datatablePagination&quot;
               }"
                        role="grid" aria-describedby="datatable_info" style="width: 1238px;">
                        <thead class="thead-light">
                            <tr role="row">
                                <th scope="col" class="table-column-pr-0 sorting_disabled" rowspan="1"
                                    colspan="1"
                                    aria-label="
                
                  
                  
                
              "
                                    style="width: 41px;">
                                    <div class="custom-control custom-checkbox">
                                        <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label" for="datatableCheckAll"></label>
                                    </div>
                                </th>
                                <th class="table-column-pl-0 sorting" tabindex="0" aria-controls="datatable"
                                    rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending"
                                    style="width: 330px;">Product</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="Type: activate to sort column ascending"
                                    style="width: 104px;">Type</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Stocks"
                                    style="width: 50px;">Stocks</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="SKU: activate to sort column ascending"
                                    style="width: 117px;">SKU</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="Price: activate to sort column ascending"
                                    style="width: 88px;">Price</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="Variants: activate to sort column ascending"
                                    style="width: 119px;">Variants</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                                    style="width: 95px;">Actions</th>
                            </tr>
                        </thead>

                        <tbody>







































                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck1">
                                        <label class="custom-control-label" for="productsCheck1"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img4.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Photive wireless speakers</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Electronics</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox1">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox1"
                                            checked="">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>2384741241</td>
                                <td>$65</td>

                                <td>2</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown1&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown1"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown1"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-hidden"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck2">
                                        <label class="custom-control-label" for="productsCheck2"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img26.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Topman shoe</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Shoes</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox2">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox2"
                                            checked="">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>4124123847</td>
                                <td>$21</td>

                                <td>4</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown2&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown2"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown2"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck3">
                                        <label class="custom-control-label" for="productsCheck3"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img25.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">RayBan black sunglasses</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Accessories</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox3">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox3"
                                            checked="">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>8472341241</td>
                                <td>$37</td>

                                <td>1</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown3&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown3"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown3"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck4">
                                        <label class="custom-control-label" for="productsCheck4"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img6.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Mango Women's shoe</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Shoes</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox4">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox4">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>2412384741</td>
                                <td>$65</td>

                                <td>3</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown4&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown4"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown4"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck5">
                                        <label class="custom-control-label" for="productsCheck5"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img3.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Calvin Klein t-shirts</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Clothing</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox5">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox5">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>8234741241</td>
                                <td>$89</td>

                                <td>7</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown5&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown5"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown5"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck6">
                                        <label class="custom-control-label" for="productsCheck6"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img5.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Givenchy perfume</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Clothing</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox6">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox6"
                                            checked="">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>9984741241</td>
                                <td>$99</td>

                                <td>1</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown6&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown6"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown6"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck7">
                                        <label class="custom-control-label" for="productsCheck7"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img11.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Asos t-shirts</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Clothing</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox7">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox7">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>7184741241</td>
                                <td>$17</td>

                                <td>4</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown7&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown7"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown7"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck8">
                                        <label class="custom-control-label" for="productsCheck8"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img12.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Apple AirPods 2</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Electronics</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox8">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox8"
                                            checked="">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>1084741241</td>
                                <td>$249</td>

                                <td>1</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown8&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown8"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown8"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck9">
                                        <label class="custom-control-label" for="productsCheck9"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img13.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Timex Watch</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Accessories</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox9">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox9"
                                            checked="">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>4831441241</td>
                                <td>$68</td>

                                <td>2</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown9&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown9"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown9"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck10">
                                        <label class="custom-control-label" for="productsCheck10"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img14.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Air Jordan 1</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Shoes</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox10">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox10"
                                            checked="">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>1223847441</td>
                                <td>$139</td>

                                <td>9</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown10&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown10"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown10"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck11">
                                        <label class="custom-control-label" for="productsCheck11"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img15.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">RayBan sunglasses</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Accessories</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox11">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox11">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>1242384741</td>
                                <td>$14</td>

                                <td>1</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown11&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown11"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown11"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck12">
                                        <label class="custom-control-label" for="productsCheck12"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="ecommerce-product-details.html">
                                        <img class="avatar avatar-lg mr-3" src="assets\img\400x400\img17.jpg"
                                            alt="Image Description">
                                        <div class="media-body">
                                            <h5 class="text-hover-primary mb-0">Gray and yellow cap</h5>
                                        </div>
                                    </a>
                                </td>
                                <td>Accessories</td>

                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox12">
                                        <input type="checkbox" class="toggle-switch-input" id="stocksCheckbox12">
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>8311741241</td>
                                <td>$9</td>

                                <td>1</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="ecommerce-product-details.html">
                                            <i class="tio-edit"></i> Edit
                                        </a>

                                        <!-- Unfold -->
                                        <div class="hs-unfold btn-group">
                                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty"
                                                href="javascript:;"
                                                data-hs-unfold-options="{
                         &quot;target&quot;: &quot;#productsEditDropdown12&quot;,
                         &quot;type&quot;: &quot;css-animation&quot;,
                         &quot;smartPositionOffEl&quot;: &quot;#datatable&quot;
                       }"
                                                data-hs-unfold-target="#productsEditDropdown12"
                                                data-hs-unfold-invoker=""></a>

                                            <div id="productsEditDropdown12"
                                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y"
                                                data-hs-target-height="163.2" data-hs-unfold-content=""
                                                data-hs-unfold-content-animation-in="slideInUp"
                                                data-hs-unfold-content-animation-out="fadeOut"
                                                style="animation-duration: 300ms;">
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-archive dropdown-item-icon"></i> Archive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-publish dropdown-item-icon"></i> Publish
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="tio-clear dropdown-item-icon"></i> Unpublish
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Unfold -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 12
                        of 20 entries</div>
                </div>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <!-- Pagination -->
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="mr-2">Showing:</span>

                            <!-- Select -->
                            <select id="datatableEntries" class="js-select2-custom select2-hidden-accessible"
                                data-hs-select2-options="{
                        &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                        &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless&quot;,
                        &quot;dropdownAutoWidth&quot;: true,
                        &quot;width&quot;: true
                      }"
                                data-select2-id="datatableEntries" tabindex="-1" aria-hidden="true">
                                <option value="12" selected="" data-select2-id="2">12</option>
                                <option value="14" data-select2-id="3">14</option>
                                <option value="16" data-select2-id="4">16</option>
                                <option value="18" data-select2-id="5">18</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="1"><span class="selection"><span
                                        class="select2-selection custom-select custom-select-sm custom-select-borderless"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-datatableEntries-container"><span
                                            class="select2-selection__rendered" id="select2-datatableEntries-container"
                                            role="textbox" aria-readonly="true"
                                            title="12"><span>12</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!-- End Select -->

                            <span class="text-secondary mr-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty">20</span>
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <nav id="datatablePagination" aria-label="Activity pagination">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                    <ul id="datatable_pagination" class="pagination datatable-custom-pagination">
                                        <li class="paginate_item page-item disabled"><a
                                                class="paginate_button previous page-link" aria-controls="datatable"
                                                data-dt-idx="0" tabindex="0" id="datatable_previous"><span
                                                    aria-hidden="true">Prev</span></a></li>
                                        <li class="paginate_item page-item active"><a class="paginate_button page-link"
                                                aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li>
                                        <li class="paginate_item page-item"><a class="paginate_button page-link"
                                                aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li>
                                        <li class="paginate_item page-item"><a class="paginate_button next page-link"
                                                aria-controls="datatable" data-dt-idx="3" tabindex="0"
                                                id="datatable_next"><span aria-hidden="true">Next</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
@endsection
