<main id="edad-moderna">
    <div class="edadModerna">
        <br><br><br>
        <h3 style="font-size: 30px;">Pinturas de la Edad Moderna</h3> <br><br>
        <p>La Edad Moderna es el tercer periodo histórico en el que se suele <br>
        dividir la Historia Universal, entre los siglos XV y XVIII, después <br>
        de la Edad Media, y antes de la llamada Edad Contemporánea. <br><br>
        La Edad Moderna es una época de grandes cambios y avances. <br>
        Es una época en la que los ideales de progreso, comunicación y <br>
        razón se han convertido en los valores de la modernidad. Esto <br>
        la asemeja a la Antigüedad y a la Época Clásica, en la que <br>
        florecieron la filosofía y las Bellas Artes. </p>
            <img src="views/src/edad-moderna.png" class="img-edad-moderna-01" alt="moderna">

        <br><br><br><br><br><br>
        <h2 style="font-size:30px">Breve historia del arte en la edad moderna</h2>
        <br><br>
        <p>La edad moderna ve germinar la individualidad del artista. Esto determina rápidamente una abundancia de temas,
            sujetos y estilos. Es así, por ejemplo, que Botticelli pinta un nacimiento de Venus en un mundo donde los otros
            pintan madonas o que Jan Van Eyck se inmortaliza en un espejo cóncavo detrás de los cónyuges Arnolfini. 
        </p>
        <br>
        <p>El pasado se presenta como una fuente de inspiración posible y mejorable; las artes plásticas y la arquitectura
            se desarrollan con inesperada riqueza y complejidad de formas, instalándose un sistema de mecenazgos que
            permiten el surgimiento de artistas que marcarán el imaginario de la humanidad. <br><br>
            Se mira a la antigüedad clásica, al pasado helénico y latino, ya no como algo inalcanzable, sino como una
            fuente de ideas –la cúpula, entre otras– que pueden ser actualizadas e impulsadas, surge la ecuación, belleza
            es igual a armonía, perspectiva y proporción, en Italia se desarrolla la perspectiva y en Flandes se empieza
            a dar profundidad a las pinturas a través de refinados juegos de luz. <br><br>
            Se inicia lo que se ha llamado la “llegada a América” por parte de los europeos, lo que convierte a España en
            una de las mayores potencias del mundo. <br><br>
            El costo es el ejercicio de violencia hacia culturas ancestrales por sed de oro y de ascenso social. En esta
            temporada se fomenta la idea, que alcanzará su pico en los siglos XIX y XX, que una mejor tecnología militar
            determina la superioridad de una civilización respeto a una otra. <br><br>
            Es en este marco cultural se gestan tanto el humanismo como el antropocentrismo, y emerge la idea de la
            individualidad del artista: por lo mismo, la práctica artística empieza a ser valorada como producción no
            solo de cosas bellas sino de pensamiento.
            </p><div class="code-block code-block-9" style="margin: 8px auto; text-align: center; display: block; clear: both;">
       <!-- adaptable2 -->
        <br><br>
        <h4 style="font-size:25px">Periodos de la edad moderna</h4>
        <br><br>
        <p>El Renacimiento se configura como una de las temporadas más contradictorias de la historia: por un lado,
            produce los cimientos de la sociedad actual, el humanismo genera ideas renovadoras y se discute sobre la
            libertad humana, pero simultáneamente nace la inquisición como sistema de control de creencias.
        </p>
        <br><br>
        <div class="cuadro">
        <?php 
            
            // datos de la DB
            $servidor = "localhost";
            $usuario = "root";
            $clave = "";
            $base = "tarea002";

            // conexion a DB
            $Conexion = mysqli_connect($servidor,$usuario,$clave,$base);

            // creando la cadena de consulta
            $Cadena = "SELECT * FROM `periodo_edad_moderna` WHERE 1";
            $Consulta = Mysqli_query($Conexion, $Cadena );

            echo " <table border = 2 cellspacing=2 cellpadding=3 >"; 

                echo "<tr>";
                    echo "<th>N°</th>";
                    echo "<th>Periodo</th>";
                    echo "<th>Siglo</th>";
                echo "</tr>";



            while($Registro = Mysqli_fetch_row($Consulta)){
                echo "<tr>";

                //echo $Registro[0]." ".$Registro[1]." ".$Registro[2]."<br>";
                foreach ($Registro as $Campo) {
                    echo "<td>".$Campo."</td>";
                }

                echo "</tr>";
                //echo "<br>";
            }


            echo "</table>";

        ?>
        </div>

        <br><br><br><br>
        <h4 style="font-size:25px">Características del arte en la edad moderna</h4>
        <br><br>
        <p><li style="text-align: left;">En 1400 Cennino Cennini, presenta su obra Il libro dell’arte sentando las bases de la concepción artística
            del Renacimiento, defendiendo el arte como una actividad intelectual creadora, y no como un simple trabajo
            manual.</li></p> <br>

        <p><li style="text-align: left;">En 1549 Giorgio Vasari escribe el libro Vite dei grandi artisti donde traza análisis y biografías de los
            artistas del momento, se escriben otros tratados sobre arte –cuya difusión es facilitada para invención de
            la estampa– diseñando un sistema que lo institucionaliza y a la vez le otorga el valor de mercancía.</li></p> <br>

        <p><li style="text-align: left;">Es en este contexto que la burguesía pujante desea adquirir obras artísticas surgiendo así el formato
            cuadro que tiene un inicio ubicable en el siglo XV: llamado quadro en italiano, es un objeto geométrico y
            transportable; es en 1435 señalado por Leon Battista Alberti como forma estética en su Trattato della
            pittura, esta forma de la mano de la perspectiva abre a un ordenamiento del mundo, y una inédita mirada al
            mismo.</li></p> <br>
        
        <p><li style="text-align: left;">En los siglos XVI, XVII y XVIII el arte se convierte también en un instrumento
            de poder: el Barroco, con su horror al vacío, con sus excesos, con su opulencia, con sus estucos, esculturas
            y pinturas pródigos en personajes, moviéndose como en una colosal coreografía, hipnotiza a los europeos y,
            mestizándose con elementos del arte prehispánico, es utilizado en América para conmover y convertir. Es
            interesante señalar que la cultura visual de este momento viajaba a través de las estampas o grabados que
            podrían difundirse con más facilidad.</li></p> <br>
        
        <p><li style="text-align: left;">Es así que este despliegue va incrementado su desproporción produciéndose un arte exuberante, pero en un
            peligroso contraste con las clases sociales que no pertenecían a la nobleza o a la alta burguesía, se inicia
            el acercamiento también al Oriente desde una perspectiva de respeto a su tradición, pero también de imitación
            de sus formas y técnicas.</li></p>
        <br><br>
        <h4 style="font-size:25px">Principales artistas del arte en la edad moderna</h4>
        <br><br>
        <p style="text-align:left;">El inicio del Renacimiento, ubicable en el quattrocento italiano, encontramos los primeros pintores y
            escultores que empiezan a estudiar la proporción, la perspectiva y rescatan formas arquitectónicas
            consideradas clásicas.
        </p> <br>

        <p style="text-align:left;">Entre los más destacados: Filippo Brunelleschi, Lorenzo Ghiberti, Fra Angélico, Donatello, Masaccio, Paolo
            Uccello, Piero della Francesca, Domenico Ghirlandaio, Andrea Mantegna entre otros.</p>
        <br><br><br><br>
        <ol>
             <li style="text-align:left;"><strong>Leonardo da Vinci (1452-1519):</strong> Renombrado por su genialidad en diversas disciplinas, da Vinci es célebre por pinturas icónicas como “La Mona Lisa” y “La Última
                Cena”, así como por sus estudios científicos y de anatomía.</li>
             <li style="text-align:left;"><strong>Miguel Ángel Buonarroti (1475-1564):</strong> Conocido por su destreza en la pintura, la escultura y la arquitectura, creó obras maestras como la “Capilla Sixtina” y 
             la escultura “David”.</li>
             <li style="text-align:left;"><strong>Rafael Sanzio (1483-1520):</strong> Reconocido por su armonía y perfección en la pintura, Rafael dejó una huella duradera con obras como “La Escuela de Atenas” y “La 
             irgen del Jilguero”.</li>
             <li style="text-align:left;"><strong>Tiziano Vecellio (c. 1488-1576):</strong> Renovó la pintura veneciana con su uso del color y la pincelada. Sus retratos y obras religiosas, como “Venus del espejo”,
             son ejemplos destacados.</li>
             <li style="text-align:left;"><strong>Hieronymus Bosch (1450-1516):</strong> Conocido por sus obras surrealistas y alegóricas, como “El jardín de las delicias”, Bosch influyó en el arte del simbolismo y el surrealismo.</li>
             <li style="text-align:left;"><strong>Pieter Bruegel el Viejo (c. 1525-1569):</strong> Maestro de la pintura de paisajes y escenas de la vida cotidiana, sus obras, como “La torre de Babel”,
             capturan la vida y la sociedad de su época.</li>
             <li style="text-align:left;"><strong>El Greco (1541-1614):</strong> Sus pinturas alargadas y estilizadas, con colores vibrantes, ejemplifican su estilo distintivo. Obras como “El entierro del Conde de Orgaz”
             reflejan su visión espiritual.</li>
        </ol>


        <br><br><br><br>

        <p style="text-align: left;">Entre los mayores artistas del Renacimiento pleno italiano o cinquecento están Miguel Ángel, Leonardo da
           Vinci, Rafael, Giorgione, Pietro Perugino, Tiziano, Bramante, Palladio. <br><br>
           La lección del Renacimiento se funde con la sensibilidad especial que los flamencos tienen por la luz en las
           obras de Joos Van Cleve, Jan Gossaert, Quinten y Jan Massys, asi como el vigor de los personajes de Alberto
           Durero. <br><br>
           Posteriormente muchos pintores pertenecieron al estilo “manierista” queriendo imitar o pintar a la “maniera”
           de los grandes maestros del renacimiento pleno, surgiendo así Bronzino, Parmigianino y Beccafumi. <br><br>
           Finalmente, y buscando un estilo más naturalista, pero a la vez teatral y sin contención de las emociones,
           se destacan dentro del periodo barroco Caravaggio, Bernini, Borromini, Artemisia Gentileschi, Rembrandt,
           Diego Velasquez, Francisco de Zurbarán, Vermeer, Rubens, Anton Van Dyck entre otros.
        </p> <br><br>

        <h4 style="font-size:25px">Ejemplos de obras artísticas en la edad moderna</h4>
        <br><br>
        <p style="text-align: left;">La edad moderna fue una época de grandes cambios, y esto se refleja en el arte de la época. He aquí las obras
            de arte más importantes del arte de la era moderna.
        </p>
        <br><br><br>
        </div>


</main>