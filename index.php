<html>
    <?php
    include("head.html");
    ?>

	<body>
    <?php
    include("header.html");
    ?>

		<div class="container">
			<div class="card">
				<form action="menu.php">
					<div class="cardlogo">
						<img src="assets/png/logo.png" width="250px" alt="Logo de UPQROO">
					</div>
					<br>
					<br>
					<label class="form-label" for="student">Matrícula</label>
					<br>
					<input type="text" id="username" name="student" placeholder="Introduzca matricula">
					<br>
					<label class="form-label" for="pw">Contraseña:</label>
					<br>
					<input type="password" name="pw" placeholder="Introduzca Contraseña">
					<br>
					 <button class="login-btn">Iniciar sesión</button>
					<br>
					<a href="recovery.php">Recuperar contraseña</a>
				</form>
			</div>
		</div>
	</body>
</html>