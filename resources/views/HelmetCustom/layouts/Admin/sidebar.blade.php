<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/img/helm.png') }}" alt="Admin Helmet Custom"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size: 18px">Admin Helmet Custom </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                    {{-- {{ Auth::user()->name }} --}}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-footer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Table Admin --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-folder"></i>&nbsp;
                        <p>
                            Table Admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{route('kodepos.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Kode Pos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('metodetransaksi.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Metode Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('produk.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('province.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Provinsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Kota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('status.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Status</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('warna.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Warna</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Tutup admin --}}

                {{-- Table Customer --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-folder"></i>&nbsp;
                        <p>
                            Table Customer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{route('customer.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Customer Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('order.index')}}" class="nav-link">
                                <i class="fa fa-table"></i> &nbsp;
                                <p>Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('carousel.index')}}" class="nav-link">
                                    <i class="fa fa-table"></i> &nbsp;
                                    <p>Carousel</p>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('footer')}}" class="nav-link">
                                    <i class="fa fa-table"></i> &nbsp;
                                    <p>Footer</p>
                                </a>
                        </li>
                    </ul>
                </li>
                {{-- Tutup Customer --}}

                <li class="nav-header">FEATURES</li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/invoice.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/profile.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
