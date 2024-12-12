<!DOCTYPE html>
<html lang="en">

<x-header-admin></x-header-admin>

<style>
    .coquette-table thead tr th {
        text-align: center;
    }

    .icon {
        color: #333;
    }

    .icon:hover {
        color: #555;
    }
</style>

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

                {{ $slot }}

                <x-footer-admin></x-footer-admin>

            </div>
        </div>
    </div>

    <x-link-js></x-link-js>

</body>

</html>
