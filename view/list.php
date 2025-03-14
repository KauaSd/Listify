<table>
            <thead>
                <tr>
                    <th></th>
                    <th>afazer</th>

                </tr>
            </thead>
            <tbody>
                <?php
        while($linha=mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td> <input type='checkbox'> </td>";
            echo "<td>".$linha['afazer']."</td>";
            echo "</tr>";
        ?>
                <?php
        }
        ?>
            </tbody>
        </table>