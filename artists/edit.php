<?php
//id, name, band_artist, birth_formation
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $band_artist = $_POST['band_artist'];
    $birth_formation = $_POST['birth_formation'];

    $sql = "
    UPDATE 
        artists
    SET
        name='$name', 
        band_artist='$band_artist',
        birth_formation='$birth_formation'
    WHERE
        id=$id
    ;";

    if ($conn->query($sql)){
        header("Location: read");
    } else {
        echo "Erro ao atualizar: " . $conn->erro;
    }
    ;
}

?>