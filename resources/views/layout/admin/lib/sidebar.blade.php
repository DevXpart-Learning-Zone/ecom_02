<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title">Dashboard</li>
            <li class="">
            <a class="has-arrow" href="{{ url('/') }}" target="_blank">
                    <i class="nav-icon ti ti-menu"></i>
                    <span class="nav-title">View Site</span>
                    <!-- <span class="nav-label label label-danger">9</span> -->
                </a>

            </li>
            <li class="">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="nav-icon ti ti-menu"></i>
                    <span class="nav-title">Category</span>
                    <!-- <span class="nav-label label label-danger">9</span> -->
                </a>
                <ul aria-expanded="false">
                    <li class="active"> <a href="{{ route('admin.category.create') }}">Add Category</a> </li>
                    <li> <a href='{{ route('admin.category.index') }}'>Category List</a> </li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="nav-icon ti ti-menu"></i>
                    <span class="nav-title">Brand</span>
                    <!-- <span class="nav-label label label-danger">9</span> -->
                </a>
                <ul aria-expanded="false">
                    <li class="active"> <a href="{{ route('admin.brand.create') }}">Add Brand</a> </li>
                    <li> <a href='{{ route('admin.brand.index') }}'>Brand List</a> </li>

                </ul>
            </li>

            <li class="">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="nav-icon ti ti-menu"></i>
                    <span class="nav-title">Proudct</span>
                    <!-- <span class="nav-label label label-danger">9</span> -->
                </a>
                <ul aria-expanded="false">
                    <li class="active"> <a href="{{ route('admin.product.create') }}">Add Proudct</a> </li>
                    <li> <a href='{{ route('admin.product.index') }}'>Brand List</a> </li>

                </ul>
            </li>



        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
