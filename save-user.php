<?php
    switch($_REQUEST["action"]){
        case 'create':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, 
            email, senha, data_nasc) VALUES ('{$nome}',
            '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Cadastro com sucesso!');</script>";
                print"<script>location.href='?page=list;</script>";
            }
            else{
                print"<script>alert('Erro ao cadastrar!');</script>";
                print"<script>location.href='?page=new';</script>"; 
            }

            break;
        case 'edit':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$senha}',
                        data_nasc='{$data_nasc}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Editado com sucesso!');</script>";
                print"<script>location.href='?page=list;</script>";
            }
            else{
                print"<script>alert('Erro ao editar!');</script>";
                print"<script>location.href='?page=new';</script>"; 
            }

            break;
        case 'delete':

            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print"<script>alert('Excluído com sucesso!');</script>";
                print"<script>location.href='?page=list;</script>";
            }
            else{
                print"<script>alert('Erro ao excluir!');</script>";
                print"<script>location.href='?page=new';</script>"; 
            }

            break;
    }