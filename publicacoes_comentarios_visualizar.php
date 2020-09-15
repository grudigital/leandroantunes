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
                            <h3 class="page-title">Painel de gerenciamento :: Publicações :: Editar</h3>
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
                                <form class="card-body" action="functions/publicacoes_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Publicações</h4>
                                                <p class="text-muted m-b-30 font-14">Editar publicação</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select p.id pid, p.titulo ptitulo, p.categoria pcategoria, p.resumo presumo, p.texto ptexto, p.imagem pimagem, p.status pstatus, p.datapublicacao pdatapublicacao, c.id cid, c.publicacao cpublicacao, c.assinante cassinante, c.mensagem cmensagem, c.status cstatus, c.datacomentario cdatacomentario, a.id aid, a.nome anome, a.email aemail  FROM blog_publicacao as p inner join blog_comentarios as c on p.id = c.publicacao left join assinantes as a on c.assinante = a.id where p.id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Título</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='ptitulo' readonly type='text' value='$row[ptitulo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Texto</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<textarea class='form-control' readonly name='ptexto'>$row[ptexto]</textarea>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<hr>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Comentário</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<textarea class='form-control' readonly name='cmensagem'>$row[cmensagem]</textarea>";
                                        echo "</div>";
                                        echo "</div>";

                                        

                                    }
                                    mysqli_close($conn);
                                    ?>




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