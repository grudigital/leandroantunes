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
                            <h3 class="page-title">Painel de gerenciamento :: Publicações :: Editar vídeo</h3>
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
                                <form class="card-body" action="functions/publicacoes_video.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Publicações</h4>
                                                <p class="text-muted m-b-30 font-14">Editar vídeo de publicação</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12">

                                        <?php
                                        require ("connections/conn.php");

                                        $pegaid = (int) $_GET['id'];
                                        $sql = "select * FROM blog_publicacao where id = '$pegaid'";
                                        $result = mysqli_query($conn, $sql);

                                        while($row = mysqli_fetch_assoc($result)) {
                                            if ($row['video'] == '') {
                                                echo "<div class='alert alert-danger' role='alert'>";
                                                    echo "<p>Nenhum vídeo cadastrado!</p>";
                                                echo "</div>";
                                                echo "<input type='hidden' name='id' value='$row[id]'>";
                                                echo "<br/><br/>";
                                            }
                                            else
                                            {
                                                echo "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$row[video]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                                                echo "<input type='hidden' name='id' value='$row[id]'>";
                                                echo "<br/><br/>";
                                            }
                                        }
                                        mysqli_close($conn);
                                        ?>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Vídeo</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="video" placeholder="Inserir após o watch?v=" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <button style="float: right" type='submit' class='btn btn-info'>Atualizar
                                                    video
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