<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Cadastro de Produtos</h1>
        <div id="envio">
            <form action="" method="post">
                <label for="nome">Nome do Produto:</label>
                <input id="nome" class="input" type="text" required name="Nome">
                <label for="fab">Fabricante:</label>
                <input class="input" type="text" required name="Fabricante">
                <label for="value">Preço:</label>
                <input class="input" type="text" required name="Preço">
                <label for="val">Data de Validade:</label>
                <input class="input" type="date" value="2020-10-07" required name="Validade">
                <label for="qnt">Quantidade:</label>
                <input class="input" type="number" value="0" required name="Quantidade">
                <input type="submit" class="button" value="Cadastrar"><br>
                <?php

                #Edite aqui as informações do seu banco de dados
                $server = "sql10.freesqldatabase.com";
                $user = "sql10369431";
                $pass = "lVM4wgcYPd"; 
                $db = "sql10369431";
                #Conexão
                $connect = mysqli_connect($server, $user, $pass, $db);
                #Pegando dados dos inputs
                $nome = $_POST['Nome'];
                $fabricante = $_POST['Fabricante'];
                $preco = $_POST['Preço'];
                $validade = $_POST['Validade'];
                $quantidade = $_POST['Quantidade'];
                #Inserindo os Dados no Banco de dados
                $query = "INSERT INTO produtos (nome,fabricante,preco,validade,quantidade) VALUES ('$nome','$fabricante','$preco','$validade','$quantidade')";
                if($envio = mysqli_query($connect,$query)){
                    echo "Cadastrado com Sucesso";
                } else {
                    echo "Error" . $envio ."<br>". mysqli_error($connect);
                }

                ?>
            </form>
        </div>
        <div>
            <table id="tabela">
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Fabricante</td>
                    <td>Valor</td>
                    <td>Data de Vencimento</td>
                    <td>Quantidade</td>
                </tr>
                <?php 
                $consulta = "SELECT * FROM produtos";
                $con = mysqli_query($connect,$consulta);
                while($dados = $con->fetch_array()) { ?>
                <tr>
                    <td><?php echo $dados['id'];?></td>
                    <td><?php echo $dados['nome'];?></td>
                    <td><?php echo $dados['fabricante'];?></td>
                    <td><?php echo $dados['preco'];?></td>
                    <td><?php echo $dados['validade'];?></td>
                    <td><?php echo $dados['quantidade'];?></td>
                </tr>

            <?php }
            mysqli_close($connect)
            ?>
            </table>
        </div>
    </section>
</body>

</html>
