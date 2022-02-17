<?php
    require 'actions/indexAction.php';
?>

<link rel="stylesheet" href="assets/css/style.css" type="text/css"> 
<body>
    <div class="container">
        <h1>DIGITE O CEP</h1>
        <div class="container">
            <form action="index.php" method="POST">
                <div>
                    <input class="input" type="text" name="cep"><br>
                </div>
                <div class="button-input">
                    <button class="btn" type="submit">ENVIAR</button><br>
                </div>
            </form>
        </div>
        <br>
        <div class="container">
            <table border="1">
                <tr>
                    <td><strong>CEP</strong></td>
                    <td><?php echo $json->cep; ?></td>
                </tr>
                <tr>
                    <td><strong>LOGRADOURO</strong></td>
                    <td><?php echo $json->logradouro; ?></td>
                </tr>
                <tr>
                    <td><strong>COMPLEMENTO</strong></td>
                    <td><?php echo $json->complemento; ?></td>
                </tr>
                <tr>
                    <td><strong>BAIRRO</strong></td>
                    <td><?php echo $json->bairro; ?></td>
                </tr>
                <tr>
                    <td><strong>MUNICÍPIO</strong></td>
                    <td><?php echo $json->localidade; ?></td>
                </tr>
                <tr>
                    <td><strong>UF</strong></td>
                    <td><?php echo $json->uf; ?></td>
                </tr>
                <tr>
                    <td><strong>IBGE</strong></td>
                    <td><?php echo $json->ibge; ?></td>
                </tr>
                <tr>
                    <td><strong>DDD</strong></td>
                    <td><?php echo $json->ddd; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>