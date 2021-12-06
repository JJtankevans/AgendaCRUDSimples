<?php
    include_once("./templates/header.php");
?>
    <div class="container">
        <?php include_once("./templates/backbtn.html"); ?>
        <h1 id="main-title">Editar contato</h1>
        <form id="edit-form" action="./config/proccess.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id']?>">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" 
                placeholder="Digite o nome aqui" value="<?= $contact["name"]?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Digite seu numero de telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" 
                placeholder="Digite o telefone para contato" value="<?= $contact["phone"]?>" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" 
                placeholder="Digite suas observações" rows="3"><?= $contact["observations"]?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php");
?>