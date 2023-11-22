<header class="header-container">
    <div id = "header-container-item" class="logo">
        <img src="path/to/your-logo.png" alt="Website Logo">
    </div>
    <div id = "header-container-item">
        <h1 class="header-title">Programming Learning</h1>
    </div>
    
    <div id = "header-container-item">
        <ul class="navigation-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/tests">Tests</a></li>
            <li><a href="/tutorials">Tutorials</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About</a></li>
            @yield('header-items')
        </ul>
    </div>
    
</header>