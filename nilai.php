<?php
    // membuat koneksi ke Databse
    include_once("data/connection.php");

    // Mengambil data dari databse
    $result = mysqli_query($connection, "SELECT * FROM nilai ORDER BY id ASC");

?>

<html>
    <head>
        <title>Homepage</title>
    </head>

    <body>
        <table width='88%' border="1">
            <tr>
                <th>ID</th> <th>Nama</th> <th>Nilai 1</th> <th>Nilai 2</th>
            </tr>

            <?php
                while($student = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $student['id'] . "</td>";
                    echo "<td>" . $student['nama'] . "</td>";
                    echo "<td>" . $student['nilai1'] . "</td>";
                    echo "<td>" . $student['nilai2'] . "</td>";
                    echo "</tr>" ;
                }

            ?>     

        </table>

    </body>

</html>