<?php

	require 'config.php';

	$id_imovel = filter_input(INPUT_POST, 'id');
    $nome_imovel = filter_input(INPUT_POST, 'nome');
    $dormitorio_imovel = filter_input(INPUT_POST, 'dormitorio');
    $suite_imovel = filter_input(INPUT_POST, 'suite');
    $sala_imovel = filter_input(INPUT_POST, 'sala');
    $banheiro_imovel = filter_input(INPUT_POST, 'banheiro');
    $cozinha_imovel = filter_input(INPUT_POST, 'cozinha');
    $quintal_imovel = filter_input(INPUT_POST, 'quintal');
    $valor_imovel = filter_input(INPUT_POST, 'valor');

	if($nome && $email){

		$sql = $pdo-.prepare("SELECT * FROM usuario WHERE email = :email");
		$sql->bindValue(':email', $email);
		$sql->execute();

		if($sql->rowCount() === 0){

			$sql = $pdo->prepare("INSERT INT usuario (id_imovel, nm_imovel, qt_dormitorio_imovel,
                                                        qt_suite_imovel, qt_sala_imovel, qt_banheiro_imovel,
                                                        qt_cozinha_imovel, qt_quintal_imovel, vl_imovel)
                                                            VALUES (:id, :nome, :dormitorio,
                                                                    :suite, :sala, :banheiro,
                                                                    :cozinha, quintal, :valor)");
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':nome', $nome);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->execute();

			header("Location: index.php");
			exit;
		}else{
			header("Location: cadastro.php");
		}

	}else{
		header("Location: cadastrar.php")
	}

	
?>