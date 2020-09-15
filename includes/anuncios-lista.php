<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 25%">Titulo</th>
                <th style="width: 22%">Local</th>
                <th style="width: 25%">Preview</th>
                <th style="width: 20%">Data de Publicação</th>
                <th style="width: 2%">Status</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM publicidade_anuncio";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[titulo]</td>";
                echo "<td>$row[local]</td>";
                if ($row['imagem'] == null) {
                    echo "<td><a href='functions/anuncios_imagem.php?id=$row[id]'>Imagem não adicionada</a></td>";
                } else {
                    echo "<td><img style='height: 50px' src='uploads/anuncios/$row[imagem]'></td>";
                }
                echo "<td>$row[datapublicacao]</td>";
                if ($row['status'] == '1') {
                    echo "<td><a href='functions/anuncios-status1.php?id=$row[id]'><button type='button' class='btn btn-success'>Ativo</button></a></td>";
                } else {
                    echo "<td><a href='functions/anuncios-status2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Inativo</button></a></td>";
                }
                echo "<td><a href='anuncios_imagem.php?id=$row[id]'><button type='button' class='btn btn-primary'>Imagem</button></a></td>";
                echo "<td><a href='anuncios_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/anuncios_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>