<?php

//servidor que vc vai se conectar

$host = "localhost";

//usuario do sql

$username = "root";

$password = "";

$database = "db_aulaphp"

$message = "";


    //valores do input

    //pegando os dados e passsando pra variavel, foi feito uma filtragem

    $botao = filter_input(INPUT_POST, "gravar", filter_sanitize_spacial_chars);

    $usuario = filter_input(INPUT_POST, "nome", filter_sanitize_spacial_chars);//recebe o nome do form

    $email = filter_input(INPUT_POST, "email", filter_sanitize_spacial_chars);//recebe o email

    $password = filter_input(INPUT_POST, "psw", filter_sanitize_spacial_chars);//recebe a senha

    $password2 = filter_input(INPUT_POST, "psw2", filter_sanitize_spacial_chars);


    //tenta executar um comando

    try {

        $conexao = new PDO("mysql:host=$host; db_name=$database", $username, $password);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_EXCEPTION);


        //se apertar o botao

        if($botao)

        {

            if($pws == $psw2)

            {

                $dados = "insert into tb_user(nome, email, password) values ('$username', '$email', '$senha')";

                $grava_dados = $conexao->prepare($dados);

                if($grava_dados->execute()) {

                    ?>
                    <script>alert("Dados gravados com sucesso!");</script>
                    <?php

                }

                else

                {

                ?>
                <script>alert("Dados não gravados!");</script>
                <?php

                }

            }

            else{

                echo "As senhas devem ser iguais!";

            }

        }


    }

    catch(PDOExecption $error)

    {

        $message = $error->getMessage();

    }

    ?>