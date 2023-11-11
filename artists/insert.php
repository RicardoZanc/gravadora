<?php
//name, band_aritst, birth_formation
?>

<form action="insert.php" method="post">
    <label for="name">Nome: </label>
    <input type="text" name="bname">
    <br>
    <label for="band_artist">Tipo: </label>
    <input type="text" name="bband_artist">
    <br>
    <label for="birth_formation">Ano de Nascimento/Formação: </label>
    <input type="numeric" name="bbirth_formation">
    <br>
    <input type="submit" value="enviar">
</form>

<?php

    include("../connection.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['bname'];
        $band_artist = $_POST['bband_artist'];
        $birth_formation = $_POST['bbirth_formation'];

        $sql = "
            INSERT INTO
                artists
                (name, band_artist, birth_formation)
            VALUES
                ('$name', '$band_artist', '$birth_formation')
                ;
            ";

        $conn->query($sql);
    }

?>