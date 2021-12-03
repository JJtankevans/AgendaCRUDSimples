<?php
    include_once("templates/header.php")
?>
    <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Criar contato</h1>
        <form action="./config/proccess.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome aqui" required>
            </div>
            <div class="form-group">
                <label for="phone">Digite seu numero de telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone para contato" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite suas observações" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php")
?>