<form action="login.php" method="post">
<div>
    <label for="username">Nombre de usuario: </label>
    <input type="text" id="username" name="username">
</div>

<div>
    <label for="password">Contrasena: </label>
    <input type="password" id="password" name="password">
</div>
<input type="submit" value="Iniciar sesion">
</form>

<?php if (in_array("edit_profile", $permissions)): ?>
<?php endif; ?>