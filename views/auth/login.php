<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Iniciar Sesion con tus Datos</p>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu Password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesion">
</form>

<div class="crear-cuenta">
    <a href="/crear-cuenta">¿No tienes una cuenta?  Crear Cuenta</a>
</div>

<div class="olvide-password">
    <a href="/olvide">¿Olvidaste tu Password?  Recuperar Password</a>
</div>
