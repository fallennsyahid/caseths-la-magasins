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
                    <!-- Navbar Header -->
                    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                        <div class="container-fluid">
                            <x-marquee></x-marquee>
                            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                                <x-action-product></x-action-product>
                                <x-navbar-admin></x-navbar-admin>
                            </ul>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>

                <div class="container">
                    <div class="page-inner">
                        <div class="row">
                            <a href="{{ route('admin.product.product') }}">
                                <button type="button" class="sub-btn">Back</button>
                            </a>
                            <div class="body">
                                <div class="table-container-show">
                                    <table class="product-table">
                                        <thead>
                                            <tr>
                                                <th>Feature</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Product Name</td>
                                                <td>{{ $products->product }}</td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td>Rp {{ $products->price }}</td>
                                            </tr>
                                            <tr>
                                                <td>Picture</td>
                                                <td><img src="{{ asset('img/' . $products->picture) }}"
                                                        alt="{{ $products->product }}" height="100px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td>{{ $products->category }}</td>
                                            </tr>
                                            <tr>
                                                <td>Created At</td>
                                                <td>
                                                    {{ $products->created_at->format('F j Y') }}
                                                    ({{ $products->created_at->diffForHumans() }})
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Stock</td>
                                                <td>In Stock</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
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
