<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Status</th>
                <th style="width: 25%">Title</th>
                <th style="width: 17%">Neighborhood</th>
                <th style="width: 17%">City</th>
                <th style="width: 17%">State</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM imoveis";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                if($row['status'] == 1){
                    echo "<td><a href='functions/imovel_status_1.php?id=$row[id]'><button type='button' class='btn btn-success'>Active property</button></a></td>";
                }
                else{
                    echo "<td><a href='functions/imovel_status_2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Inactive property</button></a></td>";

                }
                echo "<td>$row[titulo]</td>";
                echo "<td>$row[bairro]</td>";
                echo "<td>$row[cidade]</td>";
                echo "<td>$row[estado]</td>";
                echo "<td><a href='imoveis_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Edit</button></a></td>";
                echo "<td><a href='functions/imoveis_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>