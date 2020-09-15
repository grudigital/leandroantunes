<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>

<?php include 'includes/header.php' ?>

<body class="fixed-left">
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<div id="wrapper">
    <?php include 'includes/menu.php' ?>
    <div class="content-page">
        <div class="content">
            <div class="topbar">
                <nav class="navbar-custom">
                    <!-- Page title -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">Management panel</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ==================
                 PAGE CONTENT START
                 ================== -->

            <div class="page-content-wrapper">

                <div class="container-fluid">

                    <!--<div style="background-color: #000; height: 200px; width: 100%">-->
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">25.140</span>
                                    Registered properties
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">65.241</span>
                                    Schedules made
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">14.412</span>
                                    Delivery Collaborators
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">20.544</span>
                                    Operational Collaborators
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-30 header-title">Latest registered properties</h4>

                                    <div class="table-responsive">
                                        <table class="table table-vertical mb-0">

                                            <tbody>




                                            <tr>
                                                <td>
                                                    4 bedroom house
                                                </td>
                                                <td>
                                                    New York City
                                                </td>
                                                <td>
                                                    New York
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    5/12/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Apartment in the center
                                                </td>
                                                <td>
                                                    Los Angeles
                                                </td>
                                                <td>
                                                    California
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    10/11/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    House with yard
                                                </td>
                                                <td>
                                                    Filadélfia
                                                </td>
                                                <td>
                                                    Pensilvânia
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    8/11/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    House with accessibility
                                                </td>
                                                <td>
                                                    San Antonio
                                                </td>
                                                <td>
                                                    Texas
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    7/11/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Beautiful apartment
                                                </td>
                                                <td>
                                                    Houston
                                                </td>
                                                <td>
                                                    Texas
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    1/11/2016
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-30 header-title">Latest appointments</h4>

                                    <div class="table-responsive">
                                        <table class="table table-vertical mb-0">

                                            <tbody>




                                            <tr>
                                                <td>
                                                    Name of the street
                                                </td>
                                                <td>
                                                    New York City
                                                </td>
                                                <td>
                                                    New York
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    5/12/2016 - 14pm
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Name of the street
                                                </td>
                                                <td>
                                                    Los Angeles
                                                </td>
                                                <td>
                                                    California
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    10/11/2016 - 8am
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Name of the street
                                                </td>
                                                <td>
                                                    Filadélfia
                                                </td>
                                                <td>
                                                    Pensilvânia
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    8/11/2016 -5pm
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Name of the street
                                                </td>
                                                <td>
                                                    San Antonio
                                                </td>
                                                <td>
                                                    Texas
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    7/11/2016 - 1pm
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Name of the street
                                                </td>
                                                <td>
                                                    Houston
                                                </td>
                                                <td>
                                                    Texas
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    1/11/2016 - 2pm
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/rodape.php' ?>
    </div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>