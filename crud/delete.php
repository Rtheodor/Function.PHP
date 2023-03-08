<?php
session_start();

include_once "conexao_a.php";
//Recebendo ID via GET


$id_usuario = filter_input(INPUT_GET, "id_usuario", FILTER_SANITIZE_NUMBER_INT);

if ($id_usuario) {
    try {
        $query_usuario = "DELETE FROM usuarios WHERE id=:id LIMIT 1";
        $delet_usuario = $conn->prepare($query_usuario);
        $delet_usuario->bindParam(':id', $id_usuario, PDO::PARAM_INT);

        if ($delet_usuario->execute()) {
            $_SESSION['msg'] = "<p style='color: green;'>Usuario deletado com sucesso!<br></p>";
            header("Location: index.php");
        } else {
            $_SESSION['msg'] = "<p style='color: red;'>Erro: Usuario não deletado com sucesso<br></p>";
            header("Location: index.php");
        }
    } catch (PDOException $erro) {
        $_SESSION['msg'] = "<p style='color: purple;'>Erro: Usuario não deletado com sucesso<br></p>";
        header("Location: index.php");
        //$_SESSION['msg'] = "<p style='color: purple;'>Erro: Usuario não deletado com sucesso:".$erro->getMessage()."<br></p>";
        header("Location: index.php");

    }


} else {
    $_SESSION['msg'] = "<p style='color: Purple;'>Erro: Usuario não encontrado!<br></p>";
    header("Location: index.php");
}

?>