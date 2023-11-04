<form action="insert.php" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="name">
    <input type="submit" value="Adicionar">
</form>

<?php
    include '../connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST['name'];

        $sql = "
            INSERT INTO
                genres (name)
            VALUES
                ('$name');
        ";

        if ($conn->query($sql)===true){
            echo "nice";
        } else {
            echo "Erro: " . $conn->error;
        }

    $conn->close();
    }
?>