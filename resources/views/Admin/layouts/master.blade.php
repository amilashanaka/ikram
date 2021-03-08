<!DOCTYPE html>
<html lang="en">
@include('Admin.layouts.includes.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('Admin.layouts.includes.navbar')

<!-- Main Sidebar Container -->
@include('Admin.layouts.includes.sidebar')

<!-- Content Wrapper. Contains page content -->
@yield('content')


<!-- /.content-wrapper -->
@include('Admin.layouts.includes.footer')

<!-- Control Sidebar -->
@include('Admin.layouts.includes.control-sidebar')
<!-- /.control-sidebar -->
</div>
@include('Admin.layouts.includes.foot')
</body>
</html>
