<?php

    include("../connection.php");

    $sql = "SELECT * FROM genres;";

    $results = $conn->query($sql);

    echo "
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
            </tr>
    ";

    while($genre = $results->fetch_array()){
        $id = $genre['id'];
        $name = $genre['name'];
        echo "
        <tr>
            <td>
                $id
            </td>
            <td>
                $name
            </td>
        </tr>";
    }

    echo "</table>";

?>

<style>
    table, tr, td, th {
        border: 1px solid black;
    }
</style>