<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("home") }}" class="nav-link">
                     <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                    <strong>Dashbord</strong>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("event") }}" class="nav-link">
                <i class="fa-solid fa-bullhorn"></i>
                    <strong>Event</strong>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("event") }}" class="nav-link">
                <i class="fa-solid fa-bullhorn"></i>
                    <strong>Block</strong>
                </a>
            </li>            <li class="nav-item">
                <a href="{{ route("event") }}" class="nav-link">
                <i class="fa-solid fa-bullhorn"></i>
                    <strong>Unblock</strong>
                </a>
            </li>            <li class="nav-item">
                <a href="{{ route("event") }}" class="nav-link">
                <i class="fa-solid fa-bullhorn"></i>
                    <strong>Remove user</strong>
                </a>
            </li>





            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <!-- <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i> -->
                    Logout
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
