<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Free_4.2.0/css/mdb.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="dark-theme collapse d-lg-block sidebar collapse">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="/admin" class="nav-text list-group-item list-group-item-action ripple active" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                    </a>
                    <a href="#" class="nav-text list-group-item list-group-item-action ripple active">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Traffic</span>
                    </a>
                    <a href="#" class="nav-text list-group-item list-group-item-action ripple active">
                        <i class="fas fa-building fa-fw me-3"></i><span>Partners</span>
                    </a>

                    <a class="nav-text list-group-item list-group-item-action ripple active" aria-current="true" data-mdb-toggle="collapse" href="#tables" aria-expanded="true" aria-controls="tables">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Database</span>
                    </a>
                    <!-- Collapsed content -->
                    <div id="tables" class="collapse list-group list-group-flush" >
                        @foreach($tables_array['tables'] as $table)
                            <a class="nav-text list-group-item list-group-item-action ripple active" href="/database/{{$table->Tables_in_krtya}}">
                                <i class="fa-solid fa-arrow-right-long fa-fw me-3"></i>
                                <span style="text-transform: capitalize">{{$table->Tables_in_krtya}}</span>
                            </a>              
                        @endforeach
                    </div>
                    
                    <a href="#" class="nav-text list-group-item list-group-item-action ripple active">
                        <i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span>
                    </a>
                    <a href="#" class="nav-text list-group-item list-group-item-action ripple active">
                        <i class="fas fa-users fa-fw me-3"></i><span>Admin</span>
                    </a>
                    <a href="#" class="nav-text list-group-item list-group-item-action ripple active">
                        <i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="top-navbar navbar navbar-expand-lg fixed-top">
            <!-- Container wrapper -->
            <div class="nav-container container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <span>Admin</span>
                </a>
    
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <li class="nav-item">
                        <a class="nav-link me-3 me-lg-2" href="/home">
                            <i class="fa-solid fa-house fa-2x" style="color: #485461;"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-2">
                        <a class="nav-link" href="/logout">
                            <i class="fa-solid fa-arrow-right-from-bracket fa-2x" style="color: #485461;"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    