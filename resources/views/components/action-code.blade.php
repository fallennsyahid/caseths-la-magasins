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
                    <a class="col-6 col-md-4 p-0" href="{{ route('code.create') }}">
                        <div class="quick-actions-item">
                            <div class="avatar-item bg-danger rounded-circle">
                                <i class="far fa-solid fa-plus"></i>
                            </div>
                            <span class="text">Create</span>
                        </div>
                    </a>
                    <a class="col-6 col-md-4 p-0" href="{{ route('code.export') }}">
                        <div class="quick-actions-item">
                            <div class="avatar-item bg-success rounded-circle">
                                <i class="fas fa-file-excel"></i>
                            </div>
                            <span class="text">Export</span>
                        </div>
                    </a>
                    <form action="{{ route('code.destroyAll') }}" method="POST"
                        onclick="return confirm('Are you sure delete all data?')" class="col-6 col-md-4 p-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="quick-actions-item" style="border: none; background: none;">
                            <div class="avatar-item bg-warning rounded-circle">
                                <i class="fas fa-trash"></i>
                            </div>
                            <span class="text">Delete All</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</li>
