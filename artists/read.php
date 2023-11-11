<?php

    include("../connection.php");

    $sql = "select * from artists;";

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
                <th>
                    Tipo
                </th>
                <th>
                    Nascimento/Formação
                </th>
            </tr>
    ";

    while($artist = $results->fetch_array()){
        $id = $artist['id'];
        $name = $artist['name'];
        $band_artist = ($artist['band_artist'] == 'a') ? "Artista": "Banda";
        $birth_formation = $artist['birth_formation'];

        echo "
        <tr>
            <td>
                $id
            </td>
            <td>
                $name
            </td>
            <td>
                $band_artist
            </td>
            <td>
                $birth_formation
            </td>
            <td>
                <a href='edit.php?id=$id'>Editar</a>
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