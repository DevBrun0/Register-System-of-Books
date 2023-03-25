<?php
session_start();
5?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="book.png" type="image/x-icon" />
    <title>Quicken</title>

<style>  

    body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: "Jost", sans-serif;
    background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
    }
    .main {
    position: fixed;
    width: 350px;
    height: 500px;
    background: red;
    overflow: hidden;
    background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38")
        no-repeat center/ cover;
    border-radius: 10px;
    box-shadow: 5px 20px 50px slateblue	;
    }
    #chk {
    display: none;

    }
    .signup {
    position: relative;
    width: 100%;
    height: 100%;
    }
    label {
    color: #fff;
    font-size: 2.0em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.5s ease-in-out;
    }
    input {
    position: relative;
    top: -30px;
    width: 60%;
    height: 15px;
    background: #e0dede;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border: none;
    outline: none;
    border-radius: 5px;
    margin-bottom: -35px
    }
    #button {
    width: 60%;
    height: 40px;
    margin-top: 10px ;
    justify-content: center;
    display: block;
    color: #fff;
    background: #573b8a;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: 0.2s ease-in;
    cursor: pointer;
    }
    #button:hover {
    background: #6d44b8;
    }
    .login {
    height: 500px;
    background: #eee;
    border-radius: 60% / 10%;
    transform: translateY(-180px);
    transition: 0.8s ease-in-out;
    font-size: 15px;
    }
    .login label {
    color: #573b8a;
    transform: scale(0.6);
    }

    #chk:checked ~ .login {
    transform: translateY(-500px);
    }
    #chk:checked ~ .login label {
    transform: scale(1);
    }
    #chk:checked ~ .signup label {
    transform: scale(0.6);
    }
    #Titulo{
      position: relative;
      top: -400px;
      left: 110px;
      color: white;
    }
    #subtitulo{
      position: relative;
      top: -350px;
      left: -170px;
      color: white;
    }



</style>
</head>
<body>
<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>


  <h1 id="Titulo">Quicken Venda de Livros</h1>
  <h2 id="subtitulo">Sistema de Cadastro</h2>

    
<div class="main">
   
      <input type="checkbox" id="chk" aria-hidden="true">

      <div class="signup">
  <form method="POST" action="processa.php">
            <label for="chk" aria-hidden="true">Cadastrar Livro</label>
            <input type="text" name="c_nomelivro" id="c_nomelivro" placeholder="Digite o nome do livro" required><br>
            <input type="text" name="c_autor" id="c_autor" placeholder="Digite o nome do autor" required><br>
            <input type="number" name="c_datalivro" id="c_datalivro" placeholder="Digite a data do livro" required><br>
            <input type="number" name="c_npagina" id="c_npagina" placeholder="Digite o numero de paginas do livro" required><br>
            <input type="number" name="c_preco" id="c_preco" placeholder="Digite o preço" required><br>
            <input type="text" name="c_genero" id="c_genero" placeholder="Digite o genêro do livro" required><br>
            <input type="text" name="c_quantidade" id="c_quantidade" placeholder="Digite a quantidade de livros" required>
      </div>

         <div class="login">
            <label for="chk" aria-hidden="true">Cadastrar Cliente</label>
            <input type="text" name="c_nomecli" id="c_nomecli" placeholder="Digite o nome do cliente" maxlength="30" required><br>
            <input type="text" name="c_cpf" id="c_cpf" placeholder="Digite o CPF do cliente" maxlength="12" required><br>
            <input type="text" name="c_cep" id="c_cep" placeholder="Digite o CEP do cliente" maxlength="10" required><br>
            <input type="text" name="c_formapag" id="c_formapag" placeholder="Digite a forma de pagamento" required><br>
            <input type="text" name="c_telefone" id="c_telefone" placeholder="Digite o telefone do cliente" required><br>
            <input type="number" name="c_idade" id="c_idade" placeholder="Digite a idade do cliente" required><br>
            <input type="submit" id='button' value="Cadastrar" name="CadUsuario">
  </form>      
         </div>



</body>
</html>