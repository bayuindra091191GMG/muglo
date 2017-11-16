<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('landing') }}" class="site_title"><i class="fa fa-paw"></i> <span>Tangerine</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ URL::asset('admin_images/user.png') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>{{ \Illuminate\Support\Facades\Auth::guard('user_admins')->user()->first_name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('admin-dashboard') }}"><i class="fa fa-home"></i> Dashbor </a>
                    </li>
                    <li>
                        <a href="{{ route('new-order-list') }}">
                            <i class="fa fa-exclamation-triangle"></i> Pemesanan Baru
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('payment-list') }}">
                            <i class="fa fa-money"></i> Status Pembayaran
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('customer-list') }}">
                            <i class="fa fa-users"></i> Daftar Pelanggan
                        </a>
                    </li>
                    <li><a><i class="fa fa-tags"></i> Produk <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('product-list') }}">Daftar Produk</a></li>
                            <li><a href="{{ route('product-create') }}">Tambah Baru</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Spanduk Iklan <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>Slider Banner<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub-menu"><a href="{{ route('slider-banner-list') }}">Show</a></li>
                                    <li><a href="{{ route('slider-banner-create') }}">Create</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('side-banner-list') }}">Side Banner</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-shopping-cart"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('delivery-list') }}">Konfirmasi Pengiriman</a></li>
                            <li><a href="{{ route('transaction-list') }}">Daftar Transaksi</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-list"></i> Kategori <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('category-list') }}">Daftar Kategori</a></li>
                            <li><a href="{{ route('category-create') }}">Tambah Baru</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bank"></i> Metode Pembayaran <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('payment-method-show') }}">Daftar Metode Pembayaran</a></li>
                            <li><a href="{{ route('payment-method-create') }}">Tambah Baru</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-truck"></i> Kurir <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('courier-list') }}">Daftar Kurir</a></li>
                            <li><a href="{{ route('courier-create') }}">Tambah Baru</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-truck"></i> Paket Pengiriman <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('delivery-type-list') }}">Daftar Paket Pengiriman</a></li>
                            <li><a href="{{ route('delivery-type-create') }}">Tambah Baru</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('report-form') }}"><i class="fa fa-bar-chart"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Status <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('status-list') }}">Daftar Status</a></li>
                            <li><a href="{{ route('status-create') }}">Tambah Baru</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> Admin <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin-list') }}">Daftar Admin</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('store-option') }}"><i class="fa fa-gear"></i> Pengaturan Toko </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin-logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>