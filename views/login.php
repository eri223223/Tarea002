<main id="login">
    
    <div class="login-container">
        
        <form action="driver_login.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <div class="input-box">
                <input type="text" id="username" name="username" 
                required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box"> 
            <input type="password" id="password" name="password" 
            required>
            <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">recordar contra</label>
                <a href="#">Olvidase la contra?</a>
            </div><br>

            <button type="submit" class="btn">Ingresar</button>
            
            <div class="register-link">
                <p>¿No tienes cuenta? <a 
                href="register.php">Registrate</a></p>
            </div>

            <?php 	

                error_reporting(0);
                $Mensaje = $_GET['error'];
                echo $Mensaje;

            ?>
        </form>
    </div>
</main>