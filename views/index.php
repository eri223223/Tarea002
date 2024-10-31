<body>
    <header class="header">
        <div class="logo">
            <img src="views/src/logo.png" alt="LODZ">
        </div>
        <nav>
            <ul class="links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>
        <a href="#" class="btn"><button>Contacto</button></a>
    </header>
    <a href="<?php echo APP_URL ?>aa.php/">aa</a>    

    <main id="index">
        <div class="main-top">
        <div class="sub-top">
       
            <div class="present"> BIENVENIDOS </div>
            
            <div class="sub-present">La Enciclopedia de Arte e Historia Moderna</div>
        </div> 
    </div>
        <br><br><br><br><br><br><br><br>

        <section class="hero">
            <div class="hero-text">
                
                <p id="contexto-inicio">Explora, descubre y aprende sobre los grandes movimientos artísticos y hechos históricos que dieron forma al mundo moderno.</p>
                <a href="#explorar" class="cta-button">Explorar ahora</a>
            </div> <br>
          
            <div class="galeria">
                <div class="imagen">
                    <img src="<?php echo 'views/src/arte-antiguo.png'; ?>" alt="Imagen 1">
                    <div class="descripcion">Arte Antiguo </div>
                </div>
                <div class="imagen">
                    <img src="<?php echo 'views/src/arte-clasico.png'; ?>" alt="Imagen 2">
                    <div class="descripcion">Arte Clasico</div>
                </div>
                <div class="imagen">
                    <img src="<?php echo 'views/src/arte-medieval.png'; ?>" alt="Imagen 3">
                    <div class="descripcion">Arte medieval</div>
                </div>
                <div class="imagen">
                    <img src="<?php echo 'views/src/edad-moderna.png'; ?>" alt="Imagen 4">
                    <div class="descripcion">Edad Moderna</div>
                </div>
                <div class="imagen">
                    <img src="<?php echo 'views/src/JAJASJASJSA-JHON.png'; ?>" alt="Imagen 5">
                    <div class="descripcion">Edad Contemporanea</div>
                </div>
            </div>

        </section>

        <br><br><br><br><br><br><br><br><br><br><br><br>


        <!-- Sección de categorías destacadas -->
        <section class="featured-categories">
        <h2>Categorías destacadas</h2>
        <div class="categories-container">
            <div class="category-card">
                <img src="arte.jpg" alt="Categoría Arte">
                <h3>Arte</h3>
                <p>Explora las principales obras de arte y movimientos artísticos.</p>
            </div>
            <div class="category-card">
                <img src="historia.jpg" alt="Categoría Historia">
                <h3>Historia</h3>
                <p>Sumérgete en los eventos históricos más importantes.</p>
            </div>
            <div class="category-card">
                <img src="colecciones.jpg" alt="Categoría Colecciones">
                <h3>Colecciones</h3>
                <p>Descubre colecciones de arte y documentos históricos únicos.</p>
            </div>
        </div>
        </section>

        <!-- Sección de novedades -->
        <section class="latest-news">
        <h2>Novedades</h2>
        <div class="news-container">
            <article class="news-item">
                <img src="noticia1.jpg" alt="Noticia 1">
                <h3>Exposición sobre el Renacimiento</h3>
                <p>Una nueva exposición de arte renacentista ha llegado a nuestra enciclopedia.</p>
                <a href="#">Leer más</a>
            </article>
            <article class="news-item">
                <img src="noticia2.jpg" alt="Noticia 2">
                <h3>El legado de las civilizaciones antiguas</h3>
                <p>Explora cómo las civilizaciones antiguas influenciaron el arte moderno.</p>
                <a href="#">Leer más</a>
            </article>
        </div>
     </section>
    </main>

</body>

