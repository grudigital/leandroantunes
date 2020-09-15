<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 70%">Item name</th>
                <th style="width: 26%">Convenient</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM itens";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[item]</td>";

                if($row['comodo'] == '1'){
                    echo "<td>Living room</td>";
                }
                else if($row['comodo'] == '2'){
                    echo "<td>Dining room</td>";
                }
                else if($row['comodo'] == '3'){
                    echo "<td>Kitchen</td>";
                }
                else if($row['comodo'] == '4'){
                    echo "<td>Bedroom</td>";
                }
                else if($row['comodo'] == '5'){
                    echo "<td>Bathroom</td>";
                }
                else if($row['comodo'] == '6'){
                    echo "<td>Office</td>";
                }
                else if($row['comodo'] == '7'){
                    echo "<td>Garden</td>";
                }
                else if($row['comodo'] == '8'){
                    echo "<td>Balcony</td>";
                }
                else if($row['comodo'] == '9'){
                    echo "<td>Garage</td>";
                }
                else if($row['comodo'] == '10'){
                    echo "<td>Lobby</td>";
                }
                else{
                    echo "<td>Others</td>";
                }

                echo "<td><a href='itens_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Edit</button></a></td>";
                echo "<td><a href='functions/itens_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>