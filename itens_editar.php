<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>
<?php include 'includes/header.php' ?>
<body class="fixed-left">
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>
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
                            <h3 class="page-title">Management Panel :: Items :: Edit</h3>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <form class="card-body" action="functions/itens_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Items</h4>
                                                <p class="text-muted m-b-30 font-14">Edit items</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select id,item,comodo FROM itens where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Item</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='item' type='text' value='$row[item]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Convenient</label>";
                                        echo "<div class='col-sm-10'>";

                                        if ($row['comodo'] == 1) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Livind room'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 2) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Dining room'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 3) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Kitchen'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 4) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Bedroom'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 5) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Bathroom'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 6) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Office'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 7) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Garden'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 8) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Balcony'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 9) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Garage'
                                                   id='example-text-input' readonly>";
                                        } else if ($row['comodo'] == 10) {
                                            echo "<input class='form-control' name='comodo' type='text' value='Lobby'
                                                   id='example-text-input' readonly>";
                                        } else {
                                            echo "<input class='form-control' name='comodo' type='text' value='Others'
                                                   id='example-text-input' readonly>";
                                        }
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Update
                                            </button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>
    <?php include 'includes/rodape.php' ?>
</div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>