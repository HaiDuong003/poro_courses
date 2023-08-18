@extends('admin.templates.layout')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Dashboard</h1>
                </div>

                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal">
                        <i class="tio-user-add mr-1"></i> Invite users
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Total Users</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">72,540</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="js-chart chartjs-render-monitor"
                                        data-hs-chartjs-options="{
                            &quot;type&quot;: &quot;line&quot;,
                            &quot;data&quot;: {
                               &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                               &quot;datasets&quot;: [{
                                &quot;data&quot;: [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                &quot;borderColor&quot;: &quot;#377dff&quot;,
                                &quot;borderWidth&quot;: 2,
                                &quot;pointRadius&quot;: 0,
                                &quot;pointHoverRadius&quot;: 0
                              }]
                            },
                            &quot;options&quot;: {
                               &quot;scales&quot;: {
                                 &quot;yAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }],
                                 &quot;xAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }]
                               },
                              &quot;hover&quot;: {
                                &quot;mode&quot;: &quot;nearest&quot;,
                                &quot;intersect&quot;: false
                              },
                              &quot;tooltips&quot;: {
                                &quot;postfix&quot;: &quot;k&quot;,
                                &quot;hasIndicator&quot;: true,
                                &quot;intersect&quot;: false
                              }
                            }
                          }"
                                        style="display: block; height: 48px; width: 106px;" width="132" height="60">
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <span class="badge badge-soft-success">
                            <i class="tio-trending-up"></i> 12.5%
                        </span>
                        <span class="text-body font-size-sm ml-1">from 70,104</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Sessions</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">29.4%</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="js-chart chartjs-render-monitor"
                                        data-hs-chartjs-options="{
                            &quot;type&quot;: &quot;line&quot;,
                            &quot;data&quot;: {
                               &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                               &quot;datasets&quot;: [{
                                &quot;data&quot;: [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                &quot;borderColor&quot;: &quot;#377dff&quot;,
                                &quot;borderWidth&quot;: 2,
                                &quot;pointRadius&quot;: 0,
                                &quot;pointHoverRadius&quot;: 0
                              }]
                            },
                            &quot;options&quot;: {
                               &quot;scales&quot;: {
                                 &quot;yAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }],
                                 &quot;xAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }]
                               },
                              &quot;hover&quot;: {
                                &quot;mode&quot;: &quot;nearest&quot;,
                                &quot;intersect&quot;: false
                              },
                              &quot;tooltips&quot;: {
                                &quot;postfix&quot;: &quot;%&quot;,
                                &quot;hasIndicator&quot;: true,
                                &quot;intersect&quot;: false
                              }
                            }
                          }"
                                        width="132" height="60" style="display: block; height: 48px; width: 106px;">
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <span class="badge badge-soft-success">
                            <i class="tio-trending-up"></i> 1.7%
                        </span>
                        <span class="text-body font-size-sm ml-1">from 29.1%</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Avg. Click Rate</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">56.8%</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="js-chart chartjs-render-monitor"
                                        data-hs-chartjs-options="{
                            &quot;type&quot;: &quot;line&quot;,
                            &quot;data&quot;: {
                               &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                               &quot;datasets&quot;: [{
                                &quot;data&quot;: [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                &quot;borderColor&quot;: &quot;#377dff&quot;,
                                &quot;borderWidth&quot;: 2,
                                &quot;pointRadius&quot;: 0,
                                &quot;pointHoverRadius&quot;: 0
                              }]
                            },
                            &quot;options&quot;: {
                               &quot;scales&quot;: {
                                 &quot;yAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }],
                                 &quot;xAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }]
                               },
                              &quot;hover&quot;: {
                                &quot;mode&quot;: &quot;nearest&quot;,
                                &quot;intersect&quot;: false
                              },
                              &quot;tooltips&quot;: {
                                &quot;postfix&quot;: &quot;%&quot;,
                                &quot;hasIndicator&quot;: true,
                                &quot;intersect&quot;: false
                              }
                            }
                          }"
                                        width="132" height="60" style="display: block; height: 48px; width: 106px;">
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <span class="badge badge-soft-danger">
                            <i class="tio-trending-down"></i> 4.4%
                        </span>
                        <span class="text-body font-size-sm ml-1">from 61.2%</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Pageviews</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">92,913</span>
                            </div>

                            <div class="col-6">
                                <!-- Chart -->
                                <div class="chartjs-custom" style="height: 3rem;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas class="js-chart chartjs-render-monitor"
                                        data-hs-chartjs-options="{
                            &quot;type&quot;: &quot;line&quot;,
                            &quot;data&quot;: {
                               &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                               &quot;datasets&quot;: [{
                                &quot;data&quot;: [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                &quot;borderColor&quot;: &quot;#377dff&quot;,
                                &quot;borderWidth&quot;: 2,
                                &quot;pointRadius&quot;: 0,
                                &quot;pointHoverRadius&quot;: 0
                              }]
                            },
                            &quot;options&quot;: {
                               &quot;scales&quot;: {
                                 &quot;yAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }],
                                 &quot;xAxes&quot;: [{
                                   &quot;display&quot;: false
                                 }]
                               },
                              &quot;hover&quot;: {
                                &quot;mode&quot;: &quot;nearest&quot;,
                                &quot;intersect&quot;: false
                              },
                              &quot;tooltips&quot;: {
                                &quot;postfix&quot;: &quot;k&quot;,
                                &quot;hasIndicator&quot;: true,
                                &quot;intersect&quot;: false
                              }
                            }
                          }"
                                        width="132" height="60"
                                        style="display: block; height: 48px; width: 106px;">
                                    </canvas>
                                </div>
                                <!-- End Chart -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <span class="badge badge-soft-secondary">0.0%</span>
                        <span class="text-body font-size-sm ml-1">from 2,913</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Stats -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-12 col-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header-title">Users</h5>

                            <!-- Datatable Info -->
                            <div id="datatableCounterInfo" style="display: none;">
                                <div class="d-flex align-items-center">
                                    <span class="font-size-sm mr-3">
                                        <span id="datatableCounter">0</span>
                                        Selected
                                    </span>
                                    <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                                        <i class="tio-delete-outlined"></i> Delete
                                    </a>
                                </div>
                            </div>
                            <!-- End Datatable Info -->
                        </div>
                    </div>

                    <div class="col-auto">
                        <!-- Filter -->
                        <div class="row align-items-sm-center">
                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center mr-2">
                                    <span class="text-secondary mr-2">Status:</span>

                                    <!-- Select -->
                                    <select
                                        class="js-select2-custom js-datatable-filter custom-select-sm select2-hidden-accessible"
                                        size="1" style="opacity: 0;" data-target-column-index="2"
                                        data-hs-select2-options="{
                            &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                            &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless&quot;,
                            &quot;dropdownAutoWidth&quot;: true,
                            &quot;width&quot;: true
                          }"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="3">All</option>
                                        <option value="successful" data-select2-id="4">Successful</option>
                                        <option value="overdue" data-select2-id="5">Overdue</option>
                                        <option value="pending" data-select2-id="6">Pending</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="2"><span class="selection"><span
                                                class="select2-selection custom-select custom-select-sm custom-select-borderless"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-xoe0-container"><span
                                                    class="select2-selection__rendered" id="select2-xoe0-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="All"><span>All</span></span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!-- End Select -->
                                </div>
                            </div>

                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center mr-2">
                                    <span class="text-secondary mr-2">Signed up:</span>

                                    <!-- Select -->
                                    <select
                                        class="js-select2-custom js-datatable-filter custom-select-sm select2-hidden-accessible"
                                        size="1" style="opacity: 0;" data-target-column-index="5"
                                        data-hs-select2-options="{
                            &quot;minimumResultsForSearch&quot;: &quot;Infinity&quot;,
                            &quot;customClass&quot;: &quot;custom-select custom-select-sm custom-select-borderless&quot;,
                            &quot;dropdownAutoWidth&quot;: true,
                            &quot;width&quot;: true
                          }"
                                        data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="9">All</option>
                                        <option value="1 year ago" data-select2-id="10">1 year ago</option>
                                        <option value="6 months ago" data-select2-id="11">6 months ago</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="8"><span class="selection"><span
                                                class="select2-selection custom-select custom-select-sm custom-select-borderless"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="0" aria-disabled="false"
                                                aria-labelledby="select2-j5re-container"><span
                                                    class="select2-selection__rendered" id="select2-j5re-container"
                                                    role="textbox" aria-readonly="true"
                                                    title="All"><span>All</span></span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!-- End Select -->
                                </div>
                            </div>

                            <div class="col-md">
                                <form>
                                    <!-- Search -->
                                    <div class="input-group input-group-merge input-group-flush">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch" type="search" class="form-control"
                                            placeholder="Search users" aria-label="Search users">
                                    </div>
                                    <!-- End Search -->
                                </form>
                            </div>
                        </div>
                        <!-- End Filter -->
                    </div>
                </div>
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
                    &quot;targets&quot;: [0, 1, 4],
                    &quot;orderable&quot;: false
                  }],
                 &quot;order&quot;: [],
                 &quot;info&quot;: {
                   &quot;totalQty&quot;: &quot;#datatableWithPaginationInfoTotalQty&quot;
                 },
                 &quot;search&quot;: &quot;#datatableSearch&quot;,
                 &quot;entries&quot;: &quot;#datatableEntries&quot;,
                 &quot;pageLength&quot;: 8,
                 &quot;isResponsive&quot;: false,
                 &quot;isShowPaging&quot;: false,
                 &quot;pagination&quot;: &quot;datatablePagination&quot;
               }"
                        role="grid" aria-describedby="datatable_info">
                        <thead class="thead-light">
                            <tr role="row">
                                <th scope="col" class="table-column-pr-0 sorting_disabled" rowspan="1"
                                    colspan="1"
                                    aria-label="
                
                  
                  
                
              "
                                    style="width: 35.7875px;">
                                    <div class="custom-control custom-checkbox">
                                        <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label" for="datatableCheckAll"></label>
                                    </div>
                                </th>
                                <th class="table-column-pl-0 sorting_disabled" rowspan="1" colspan="1"
                                    aria-label="Full name" style="width: 215.925px;">Full name</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="Status: activate to sort column ascending"
                                    style="width: 115.4px;">Status</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="Type: activate to sort column ascending"
                                    style="width: 153.15px;">Type</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Email"
                                    style="width: 204.962px;">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="Signed up: activate to sort column ascending"
                                    style="width: 123.725px;">Signed up</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-label="User ID: activate to sort column ascending"
                                    style="width: 92.65px;">User ID</th>
                            </tr>
                        </thead>

                        <tbody>

































                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                                        <label class="custom-control-label" for="usersDataCheck2"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="assets\img\160x160\img10.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">Amanda Harvey <i
                                                    class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-original-title="Top endorsed"></i></span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Successful
                                </td>
                                <td>Unassigned</td>
                                <td>amanda@example.com</td>
                                <td>1 year ago</td>
                                <td>67989</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck3">
                                        <label class="custom-control-label" for="usersDataCheck3"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                                            <span class="avatar-initials">A</span>
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">Anne Richard</span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Successful
                                </td>
                                <td>Subscription</td>
                                <td>anne@example.com</td>
                                <td>6 months ago</td>
                                <td>67326</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck4">
                                        <label class="custom-control-label" for="usersDataCheck4"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="assets\img\160x160\img3.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">David Harrison</span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-danger"></span>Overdue
                                </td>
                                <td>Non-subscription</td>
                                <td>david@example.com</td>
                                <td>6 months ago</td>
                                <td>55821</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck5">
                                        <label class="custom-control-label" for="usersDataCheck5"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="assets\img\160x160\img5.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">Finch Hoot</span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-warning"></span>Pending
                                </td>
                                <td>Subscription</td>
                                <td>finch@example.com</td>
                                <td>1 year ago</td>
                                <td>85214</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck6">
                                        <label class="custom-control-label" for="usersDataCheck6"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                                            <span class="avatar-initials">B</span>
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">Bob Dean</span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Successful
                                </td>
                                <td>Subscription</td>
                                <td>bob@example.com</td>
                                <td>6 months ago</td>
                                <td>75470</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck7">
                                        <label class="custom-control-label" for="usersDataCheck7"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="assets\img\160x160\img9.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">Ella Lauda <i
                                                    class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-original-title="Top endorsed"></i></span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-warning"></span>Pending
                                </td>
                                <td>Subscription</td>
                                <td>Ella@example.com</td>
                                <td>1 year ago</td>
                                <td>37534</td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck8">
                                        <label class="custom-control-label" for="usersDataCheck8"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="assets\img\160x160\img4.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">Sam Kart</span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Successful
                                </td>
                                <td>Non-subscription</td>
                                <td>sam@example.com</td>
                                <td>1 year ago</td>
                                <td>57300</td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck9">
                                        <label class="custom-control-label" for="usersDataCheck9"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="assets\img\160x160\img6.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">Costa Quinn</span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="legend-indicator bg-danger"></span>Overdue
                                </td>
                                <td>Unassigned</td>
                                <td>costa@example.com</td>
                                <td>1 year ago</td>
                                <td>71288</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 8 of
                        17 entries</div>
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
                                <option value="4" data-select2-id="13">4</option>
                                <option value="6" data-select2-id="14">6</option>
                                <option value="8" selected="" data-select2-id="15">8</option>
                                <option value="12" data-select2-id="16">12</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="12"><span class="selection"><span
                                        class="select2-selection custom-select custom-select-sm custom-select-borderless"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-datatableEntries-container"><span
                                            class="select2-selection__rendered" id="select2-datatableEntries-container"
                                            role="textbox" aria-readonly="true" title="8"><span>8</span></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <!-- End Select -->

                            <span class="text-secondary mr-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty">17</span>
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
                                        <li class="paginate_item page-item"><a class="paginate_button page-link"
                                                aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li>
                                        <li class="paginate_item page-item"><a class="paginate_button next page-link"
                                                aria-controls="datatable" data-dt-idx="4" tabindex="0"
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
