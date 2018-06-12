<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">@yield('title_header_section', 'Starter Page')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">@yield('breadcrumb-item', 'Home')</a>
                    </li>
                    <li class="breadcrumb-item active">
                        @yield('breadcrumb-item-active', 'Starter Page')
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>