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
             <?php 	
                if (isset($_GET['mensaje'])) {
                    echo "<p style='color: red; text-align:center; 
                    margin: 18px 0px 0px 0px;'>" . $_GET['mensaje'] . "</p>";
                }
            ?>
            <div class="register-link">
                <p>¿No tienes cuenta? <a 
                href="register.php">Registrate</a></p>
            </div>
            
        </form>
    </div>
</main>