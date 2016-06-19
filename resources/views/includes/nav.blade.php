
    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Main
                </li>
                <li {{{ (Request::is('dashboard') ? 'class=active' : '') }}}>
                    <a href="/dashboard">Dashboard</a>
                </li>
              
                <li {{{ (Request::is('deploy') ? 'class=active' : '') }}}>
                    <a href="/deploy">Deploy</a>
                </li>
              
                <li {{{ (Request::is('blog') ? 'class=active' : '') }}}>
                    <a href="/blog">Company Blog</a>
                </li>
                
                <li class="nav-category">
                    Manage
                </li>
                
                <li {{{ (Request::is('support') ? 'class=active' : '') }}} >
                    <a href="/support">Support</a>
                </li>
                
                <li>
                    <a href="#common" data-toggle="collapse" aria-expanded="false">
                        Account <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="common" class="nav nav-second collapse">
                        <li {{{ (Request::is('profile') ? 'class=active' : '') }}}><a href="/profile">Profile</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                        <li><a href="/forgotpass">Forgot password</a></li>
                        <li><a href="/404">Error page</a></li>
                    </ul>
                </li>
                <li class="nav-info">
                    <i class="pe pe-7s-shield text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">PassPoint</span> application for Windows credential monitoring and auditing with policy verification.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->