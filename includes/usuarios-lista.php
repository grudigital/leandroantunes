<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 15%">Status</th>
                <th style="width: 23%">Name</th>
                <th style="width: 23%">Mail</th>
                <th style="width: 16%">Profile</th>
                <th style="width: 19%">Registration date</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM usuarios";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

                if($row['status'] == 1){
                    echo "<td><a href='functions/usuario_status_1.php?id=$row[id]'><button type='button' class='btn btn-success'>Active user</button></a></td>";
                }
                else{
                    echo "<td><a href='functions/usuario_status_2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Inactive user</button></a></td>";

                }
                echo "<td>$row[nome]</td>";
                echo "<td>$row[email]</td>";

                if($row['perfil'] == '1'){
                    echo "<td>Administrator</td>";
                }
                else if($row['perfil'] == '2'){
                    echo "<td>Operational team</td>";
                }
                else{
                    echo "<td>Delivery team</td>";
                }



                echo "<td>$row[datacadastro]</td>";
                echo "<td><a href='usuarios_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Edit</button></a></td>";
                echo "<td><a href='functions/usuarios_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>