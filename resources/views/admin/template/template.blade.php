<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@include('admin.template.head')
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
@include('admin.template.page-wrapper')

<!-- BEGIN QUICK NAV -->
{{--@include('admin.template.quick-nav')--}}
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="admin/assets/global/plugins/respond.min.js"></script>
<script src="admin/assets/global/plugins/excanvas.min.js"></script>
<script src="admin/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('page-level-plugins')
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="admin/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('page-level-scripts')
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="admin/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="admin/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="admin/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="admin/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN NAMNH CUSTOM SCRIPTS -->
@yield('scripts')
<!-- END NAMNH CUSTOM SCRIPTS -->
</body>

</html>