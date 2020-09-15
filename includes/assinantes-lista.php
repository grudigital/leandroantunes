<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 40%">Nome</th>
                <th style="width: 40%">E-mail</th>
                <th style="width: 15%">Data cadastro</th>
                <th style="width: 5%">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM assinantes";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[nome]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[datacadastro]</td>";
                if($row['status'] == 1){
                    echo "<td><a href='functions/assinantes-status1.php?id=$row[id]'><button type='button' class='btn btn-success'>Ativo</button></a></td>";
                }
                else{
                    echo "<td><a href='functions/assinantes-status2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Bloqueado</button></a></td>";
                }

                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>