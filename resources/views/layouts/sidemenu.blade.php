<div class="sidebar" data-color="purple" data-image="/img/sidebar-3.jpg">

    <div class="logo">
        <a href="/" class="simple-text">
            Freelance Management
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">

            @if ($menu === 'dashboard')
            <li class="active">
            @else
            <li>
            @endif
                <a href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            @if ($menu === 'project')
            <li class="active">
            @else
            <li>
            @endif
                <a href="/project">
                    <i class="material-icons">content_paste</i>
                    <p>Projects</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>
