<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = ($_POST["telefone"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, telefone, data_nasc) VALUES ('{$nome}', '{$email}', '{$telefone}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            else{
                print "<script>alert('Não foi possivel');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = ($_POST["telefone"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        telefone='{$telefone}',
                        data_nasc='{$data_nasc}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            else{
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':

            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            else{
                print "<script>alert('Não foi possivel excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        default:
        break;
    }

?>