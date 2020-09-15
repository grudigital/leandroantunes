<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 45%">Titulo</th>
                <th style="width: 18%">Categoria</th>
                <th style="width: 25%">Data de Publicação</th>
                <th style="width: 2%">Status</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select p.id pid, p.titulo ptitulo, p.categoria pcategoria, p.resumo presumo, p.texto ptexto, p.imagem pimagem, p.status pstatus, p.datapublicacao pdatapublicacao, c.id cid, c.categoria ccategoria  FROM blog_publicacao as p inner join blog_categorias as c on p.categoria = c.id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[ptitulo]</td>";
                echo "<td>$row[ccategoria]</td>";

                echo "<td>$row[pdatapublicacao]</td>";
                if ($row['pstatus'] == '1') {
                    echo "<td><a href='functions/publicacoes_status1.php?id=$row[pid]'><button type='button' class='btn btn-success'>Ativo</button></a></td>";
                } else {
                    echo "<td><a href='functions/publicacoes_status2.php?id=$row[pid]'><button type='button' class='btn btn-danger'>Inativo</button></a></td>";
                }
                echo "<td><a href='publicacoes_imagem.php?id=$row[pid]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td><a href='publicacoes_video.php?id=$row[pid]'><button type='button' class='btn btn-secondary'>Vídeo</button></a></td>";
                echo "<td><a href='publicacoes_comentarios.php?id=$row[pid]'><button type='button' class='btn btn-primary'>Comentários</button></a></td>";
                echo "<td><a href='publicacoes_editar.php?id=$row[pid]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/publicacoes_excluir.php?id=$row[pid]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>