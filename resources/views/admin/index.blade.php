<!DOCTYPE html>
<html lang="en">

<x-header-admin></x-header-admin>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <x-logo-header-admin></x-logo-header-admin>
                <!-- End Logo Header -->
            </div>

            <x-sidebar></x-sidebar>

            <div class="main-panel">
                <div class="main-header">
                    <x-navbar-admin-layout>
                        <x-marquee></x-marquee>
                        <x-navbar-admin></x-navbar-admin>
                    </x-navbar-admin-layout>
                </div>

                <div class="container" style="background-color: rgb(241 245 249);">
                    <div class="page-inner">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                            <div>
                                <h3 class="fw-bold mb-3">Dashboard</h3>
                                <h6 class="op-7 mb-2">Caseths La Magasin's</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                                    {{-- <i class="fas fa-users"></i> --}}
                                                    <i class="fa-solid fa-file"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Total Product</p>
                                                    <h4 class="card-title">{{ $totalProduct }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                                    {{-- <i class="fas fa-user-check"></i> --}}
                                                    <i class="fa-solid fa-box-archive"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Total Ads</p>
                                                    <h4 class="card-title">{{ $totalAds }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-footer-admin></x-footer-admin>
            </div>

        </div>

        <x-link-js></x-link-js>

</body>

</html>
