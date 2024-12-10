<main id="register">
    <div class="lodz">
        <header>
           
            <br>
        </header>
        <div class="registrate">

            <form action="driver_register.php" method="POST">
                 <h1>Regístrate</h1><br>
                <p style="font-size:12px;">¡Registra tu cuenta para seguir sumando más historia al arte!</p>
                 <div class="input-box">
                    <input type="text" name="username" placeholder="Nombre de Usuario" required>
                    <i class='bx bxs-user'></i>
                 </div>

                 <div class="input-box">
                    <input type="email" name="email" placeholder="Correo Eléctrónico" required>
                    <i class='bx bxs-envelope' ></i>
                 </div>

                 <div class="input-box">
                    <input type="password" name="password" placeholder="Ingrese Una Contraseña" required>
                    <i class='bx bxs-lock-alt' ></i>
                 </div>

                <button type="submit" class="btn">Registrarme</button>
           
                 <div class="register-link">
                    <p>¿Ya tienes cuenta? <a href="login.php">Logueate</a></p>
                 </div>
            </form>
            
        </div>

    </div>
 
</main>        