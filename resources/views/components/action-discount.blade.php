<li class="nav-item topbar-icon dropdown hidden-caret">
    <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
        <i class="fas fa-layer-group"></i>
    </a>
    <div class="dropdown-menu quick-actions animated fadeIn">
        <div class="quick-actions-header">
            <span class="title mb-1">Actions</span>
            <span class="subtitle op-7">Choose Action</span>
        </div>
        <div class="quick-actions-scroll scrollbar-outer">
            <div class="quick-actions-items">
                <div class="row m-0">
                    <a class="col-6 col-md-4 p-0" href="{{ route('admin.discount.create') }}">
                        <div class="quick-actions-item">
                            <div class="avatar-item bg-danger rounded-circle">
                                <i class="far fa-solid fa-plus"></i>
                            </div>
                            <span class="text">Create</span>
                        </div>
                    </a>
                    <a class="col-6 col-md-4 p-0" href="">
                        <div class="quick-actions-item">
                            <div class="avatar-item bg-success rounded-circle">
                                <i class="fas fa-file-excel"></i>
                            </div>
                            <span class="text">Export</span>
                        </div>
                    </a>

                    <!-- Dropdown for Maps -->
                    <div class="col-6 col-md-4 p-0 dropdown">
                        <a class="dropdown-toggle quick-actions-item" href="#" id="dropdownMenuButton"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar-item bg-warning rounded-circle">
                                <i class="fas fa-map"></i>
                            </div>
                            <span class="text">Maps</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="">Google Maps</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Bing Maps</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">OpenStreetMap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
