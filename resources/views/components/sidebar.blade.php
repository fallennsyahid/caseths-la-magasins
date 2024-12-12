        <!-- Start Sidebar -->
        <div class="sidebar-wrapper scrollbar scrollbar-inner" style="background-color: #FFE3E3;">
            <div class="sidebar-content">
                <ul class="nav nav-secondary">
                    <li class="nav-item">
                        <a {{-- data-bs-toggle="collapse" --}} href="{{ route('admin.index') }}" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home icon"></i>
                            <p class="icon">Home</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Items</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('product.index') }}">
                                        <span class="sub-item">Product</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('ads.index') }}">
                                        <span class="sub-item">Ads</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('code.index') }}">
                                        <span class="sub-item">Codes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.contact.index') }}">
                                        <span class="sub-item">Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/notifications.html">
                                        <span class="sub-item">Notifications</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/sweetalert.html">
                                        <span class="sub-item">Sweet Alert</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/font-awesome-icons.html">
                                        <span class="sub-item">Font Awesome Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/simple-line-icons.html">
                                        <span class="sub-item">Simple Line Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/typography.html">
                                        <span class="sub-item">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <!-- End Sidebar -->
