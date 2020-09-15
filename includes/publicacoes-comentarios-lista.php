<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 58%">Publicação</th>
                <th style="width: 18%">Assinante</th>
                <th style="width: 20%">Data do comentário</th>
                <th style="width: 2%">Status</th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select p.id pid, p.titulo ptitulo, p.categoria pcategoria, p.resumo presumo, p.texto ptexto, p.imagem pimagem, p.status pstatus, p.datapublicacao pdatapublicacao, c.id cid, c.publicacao cpublicacao, c.assinante cassinante, c.mensagem cmensagem, c.status cstatus, c.datacomentario cdatacomentario, a.id aid, a.nome anome, a.email aemail  FROM blog_publicacao as p inner join blog_comentarios as c on p.id = c.publicacao left join assinantes as a on c.assinante = a.id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[ptitulo]</td>";
                echo "<td>$row[anome]</td>";
                echo "<td>$row[cdatacomentario]</td>";
                if ($row['cstatus'] == '1') {
                    echo "<td><a href='functions/publicacoes_comentarios1.php?id=$row[pid]'><button type='button' class='btn btn-success'>Liberado</button></a></td>";
                } else {
                    echo "<td><a href='functions/publicacoes_comentarios2.php?id=$row[pid]'><button type='button' class='btn btn-danger'>Bloqueado</button></a></td>";
                }
                echo "<td><a href='publicacoes_comentarios_visualizar.php?id=$row[pid]'><button type='button' class='btn btn-info'>Visualizar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>