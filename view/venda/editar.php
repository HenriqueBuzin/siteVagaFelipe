<?php

?>

<!-- Usar no form modal para editar
<form>
    <?php foreach($vendas as $venda): ?>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["nome"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["nomeMae"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["cpf"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["email"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["fone"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["dataHora"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["parcelas"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["valorParcelas"]; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $venda["valorTotal"]; ?>">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" <?php echo ($venda["checkbox"]) ? "checked" : ""; ?>> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    <?php endforeach; ?>
</form>
