<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
        	Tela de cadastro 
    	</title>
        <meta charset="utf-8">
    </head>
    	<form>
            <div align="center">
                <h1>Identifique-se</h1>
                <p>
                    <input type="text-area" name="user" placeholder="Usuario">
                </p>
                <p>
                    <input type="password" name="senha"  placeholder="Senha">
                </p>
                <p>
                    <input type="submit" value="Login">
                </p>
            </div>
        </form>
</html>

<?php
	$conn = new PDO("mysql:dbname=db_php; host=localhost", "root", "");
	//$stmt = $conn->prepare("SELECT * FROM tb_users ORDER BY userLogin");
	//$stmt->execute();
?>