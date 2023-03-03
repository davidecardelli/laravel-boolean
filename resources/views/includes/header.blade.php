<header>
    <nav class="navbar navbar-expand-lg bg-primary mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('tools.index') }}">TOOLS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about_us') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact_us') }}">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('privacy_policy') }}">PRIVACY POLICY</a>
                    </li>
            </div>
        </div>
    </nav>
</header>
