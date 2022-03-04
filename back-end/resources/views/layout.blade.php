<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <title>admin | @yield('title')</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/homepage.css')}}">
</head> 
<body>

        <div class="sidebar">
            <div class="sidebar-brand">
                 <h2><span class="lab la-accusoft"></span> Admin</h2>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li >
                        <a  href="/dashboard" class={{ $page == 'dashboard' ? 'ativo' : ' ' }}><span class="las la-igloo"></span>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a  href="/custormers" class={{ $page == 'custormers' ? 'ativo' : ' '}}><span class="las la-users"></span>
                            <span>Custormers</span></a>
                    </li>
                    <li>
                        <a href="/projects" class={{ $page == 'projects' ? 'ativo' : ' '}}><span class="las la-clipboard-list"></span>
                            <span>Projects</span></a>
                    </li>
                    <li>
                        <a href="/orders" class={{ $page == 'orders' ? 'ativo' : ' '}}><span class="las la-shopping-bag"></span>
                            <span>Orders</span></a>
                    </li>
                    <li>
                        <a href="/inventory" class={{ $page == 'inventory' ? 'ativo' : ' '}}><span class="las la-receipt"></span>
                            <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href="/accounts" class={{ $page == 'accounts' ? 'ativo' : ' '}}><span class="las la-user-circle"></span>
                            <span>Accounts</span></a>
                    </li>
                    <li>
                        <a href="/tasks" class={{ $page == 'tasks' ? 'ativo' : ' '}}><span class="las la-clipboard-list"></span>
                            <span>Tasks</span></a>
                    </li>
                </ul>
            </div>
        </div>    
        <div class="main-content">
            <header>
                <h2> 
                    <label for="">
                        <span class="las la-bars"></span>
                    </label>
                    @yield('title')
                </h2>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="procure aqui" />
                </div>

                <div class="user-wrapper">
                    <div class="user-profile">
                        <img src="{{asset('asset/image/login.png')}}" >
                        <div class="user-name">
                            <h4>usuario</h4>
                            <small>Super admin</small>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                @yield('main')
            </main>
        </div>
</body>
</html>