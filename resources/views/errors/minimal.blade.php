<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="description" content="tritoncreative.id" />
        <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
        @include('admin.templates.partials.theme')
        <div class="d-flex flex-column flex-root" id="kt_app_root">
			<style>
                body { background-image: url( {{asset('assets/media/bg/bg1.jpg')}} ); }
                [data-bs-theme="dark"]
                body { background-image: url( {{asset('assets/media/bg/bg1-dark.jpg')}} ); }
            </style>
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<div class="d-flex flex-column flex-center text-center p-10">
					<div class="card card-flush w-lg-650px py-5">
						<div class="card-body py-15 py-lg-20">
							<h1 class="fw-bolder fs-2hx text-gray-900 mb-4">@yield('code')</h1>
							<div class="fw-semibold fs-6 text-gray-500 mb-7">@yield('message')</div>
                            @yield('image')
							<div class="mb-0">
								<a href="/" class="btn btn-sm btn-primary">Return Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    </body>
</html>
