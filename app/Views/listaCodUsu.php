<form method="Post">
    <div>
        <label for="codusu" class="form-label">Digite o Código do usuário</label>
        <input type="number" name="codUsu" id="codusu"class="form-control" placeholder="Exemplo: 123">
    </div>
    <div class="col-12">
        <button type='Submit' class="btn btn-primary">Buscar</button>
    </div>
</form>
<table class="table">
    <thead>
        <th>Código</th>
        <th>Email</th>
    </thead>
    <tbody>
<?php
$codusu = isset($usuario->codusu)?$usuario->codusu:"";
$emailusu = isset($usuario->emailUsu)?$usuario->emailUsu : "";
?>
    <tr>
        <td><?php echo($codusu)?> </td>
        <td><?php echo($emailusu)?></td>
    </tr>

    </tbody>
</table>
