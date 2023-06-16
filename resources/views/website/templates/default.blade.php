<!DOCTYPE html>
<html lang="en">
    @include('admin.templates.partials.head')
    <body id="kt_app_body"
    data-kt-app-layout="dark-sidebar"
    data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true"
    data-kt-app-toolbar-enabled="true"
    class="app-default
    ">
    @include('admin.templates.partials.theme')

        @yield('content')

        @include('admin.templates.partials.scrolltop')
        @include('admin.templates.partials.script')
	</body>
</html>
