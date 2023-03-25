<?php


session_start();

ob_start();

include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

if(!empty($dados['CadUsuario'])){
    $query_usu = "INSERT INTO books
                (name_book, author, a_date, n_page, price, genre, amount) VALUES
                (:name_book, :author, :a_date, :n_page, :price, :genre, :amount)";

    $cad_usu = $conn->prepare($query_usu);

    $cad_usu->bindParam(':name_book', $dados['c_nomelivro'], PDO::PARAM_STR);
    $cad_usu->bindParam(':author', $dados['c_autor'], PDO::PARAM_STR);
    $cad_usu->bindParam(':a_date', $dados['c_datalivro'], PDO::PARAM_INT);
    $cad_usu->bindParam(':n_page', $dados['c_npagina'], PDO::PARAM_INT);
    $cad_usu->bindParam(':price', $dados['c_preco'], PDO::PARAM_INT);
    $cad_usu->bindParam(':genre', $dados['c_genero'], PDO::PARAM_STR);
    $cad_usu->bindParam(':amount', $dados['c_quantidade'], PDO::PARAM_INT);
    $cad_usu->execute();
    
    var_dump($conn->lastInsertId());
    $id_customers = $conn->lastInsertId();

    $query_customers = "INSERT INTO customers
                (name_cus, cpf, zipcode, payment, id_books, phone, age) VALUES
                (:name_cus, :cpf, :zipcode, :payment, :id_books, :phone, :age)";

    $cad_customers = $conn->prepare($query_customers);

    $cad_customers->bindParam(':name_cus', $dados['c_nomecli'], PDO::PARAM_STR);
    $cad_customers->bindParam(':cpf', $dados['c_cpf'], PDO::PARAM_INT);
    $cad_customers->bindParam(':zipcode', $dados['c_cep'], PDO::PARAM_INT);
    $cad_customers->bindParam(':payment', $dados['c_formapag'], PDO::PARAM_STR);
    $cad_customers->bindParam(':id_books', $id_customers, PDO::PARAM_INT);
    $cad_customers->bindParam(':phone', $dados['c_telefone'], PDO::PARAM_STR);
    $cad_customers->bindParam(':age', $dados['c_idade'], PDO::PARAM_INT);
    $cad_customers->execute();

    $_SESSION['msg'] = "<div style='color: #53FD29;position: fixed; margin-top: 650px; margin-left: 25px'>Cliente e Livro cadastro com sucesso</div>";


    header("Location: index.php");

}else{
    $_SESSION['msg'] = "<div style='color: #F60808;position: fixed; margin-top: 650px; margin-left: 25px'>Erro: Usuario e Livro não cadastro com sucesso</div>";
    header("Location: index.php");
}
?>
