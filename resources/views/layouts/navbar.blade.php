<header role="banner">
	<nav class="navbar navbar-expand-md navbar-dark bg-light">
		<div class="container">
			<a class="navbar-brand absolute" href="index.html">Skwela</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
				@if(Auth::guest())
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{ url('/tools') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item">Coming Soon</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/blog') }}">Growth Tips</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
					</li>
				</ul>
				<ul class="navbar-nav absolute-right">
					<li class="nav-item">
						<a href="{{ url('/members/login') }}" class="nav-link">Login</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/members/register') }}" class="nav-link">Register</a>
					</li>
				</ul>
				@else
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{ url('/tools') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item">Coming Soon</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{ url('/my-apps') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Apps</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item">Coming Soon</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/blog') }}">Growth Tips</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
					</li>
				</ul>
				<ul class="navbar-nav absolute-right">
					<li class="nav-item">
						<a href="{{ url('/login') }}" class="nav-link">Logout</a>
					</li>
				</ul>
				@endif
			</div>
		</div>
	</nav>
</header>