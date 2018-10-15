<!DOCTYPE html>
<html>

	<head>
        @include('layouts.app.mainhead')
    </head>

    <body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<section id="main" @yield('ajust')>
                        @include('layouts.app.mainsection')
					</section>

				<!-- Footer -->
					<footer id="footer">
                        @include('layouts.app.mainfooter')
					</footer>
			</div>

		<!-- Scripts -->
			<script>
                @include('layouts.app.script')
			</script>
	</body>

</html>
