<main id="edad-media">
    <article style="margin-right: 120px; margin-left: 120px; margin: 80px; background-color: #000000d9;    color: white;   padding: 40px;    border-radius: 25px;">
        <br><br><br><br>
        <h3 style="font-size: 30px;">Pinturas de la Edad Media</h3> <br><br>
        <p>La Edad Media, también conocida como período medieval, abarcó <br>aproximadamente
            del siglo V al XV en la historia europea. Durante <br>esta época, el arte jugó un papel
            importante y las pinturas sirvieron <br>para diversos fines, como la devoción religiosa,
            la narración de <br> cuentos y el adorno de espacios sagrados. A continuación se <br> muestran
            algunos tipos y estilos notables de pinturas de la Edad Media:</p>
            <img src="views/src/edad-media.jpg" class="img-edad-media-01" alt="media">
            <br><br><br><br><br><br><br><br><br>
        <h2 style="text-align: center; font-size:25px"> Arte en pinturas de la Edad Media <a href="login.php" style="font-size: 16px;" >Editar</a> </h2>
        <br><br><br>
        <?php 

            // datos de la DB
            $servidor = "localhost";
            $usuario = "root";
            $clave = "";
            $base = "tarea002";

            // conexion a DB
            $Conexion = mysqli_connect($servidor,$usuario,$clave,$base);

            // creando la cadena de consulta
            $Cadena = "SELECT * FROM pinturaem WHERE 1";
            $Consulta = Mysqli_query($Conexion, $Cadena );

            echo "<table  cellspacing=2 cellpadding=3 >"; 

                echo "<tr>";
                    echo "<th>N°</th>";
                    echo "<th>Estilo</th>";
                    echo "<th>Tiempo</th>";
                    echo "<th>Descripción</th>";
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
        <br><br><br><br><br><br>
        <h2 style="font-size:30px">Elementos característicos de la pintura medieval</h2>
        <br>
        <h4 style="font-size:25px">Retablos</h4>
        <br>
        <p>Los retablos eran grandes pinturas o esculturas de múltiples paneles colocadas sobre o detrás del altar 
          de una iglesia o capilla. En el arte plateresco los retablos eran obras de este arte, representaban escenas 
          de la vida de Cristo, la Virgen María o los santos. Los retablos de la Edad Media mostraban detalles intrincados 
          y colores vibrantes, podrían ser bípticos o trípticos y a menudo, eran creados por múltiples artistas, incluidos 
          pintores, escultores y artesanos.
        </p>
        <br>
        <h4 style="font-size:25px">Iluminación de manuscritos</h4>
        <br>
        <p>La iluminación de manuscritos se refiere a la <strong>decoración de manuscritos con ilustraciones pintadas a mano
         </strong>. Monjes y escribas elaboraron meticulosamente estas detalladas y coloridas ilustraciones, que a menudo 
         presentan textos e historias religiosas. Las iluminaciones añadían belleza e interés visual a las páginas y, a menudo, 
         estaban adornadas con pan de oro, pigmentos vibrantes y patrones intrincados.</p><div class="code-block code-block-9" 
         style="margin: 8px auto; text-align: center; display: block; clear: both;">
       <!-- adaptable2 -->
        <br>
        <h4 style="font-size:25px">Pinturas murales</h4>
        <br>
        <p>Las pinturas murales o frescos, dado que se hacían a mano con pintura fresca, se encontraban comúnmente en iglesias, 
            catedrales y otros edificios religiosos durante la Edad Media. Estos frescos a gran escala adornaban las paredes y 
            los cielos rasos. Representaban escenas bíblicas, santos e historias de la grey católica. Las <strong>pinturas 
            murales</strong> proporcionaron narrativas visuales y sirvieron como decoración imponente y a la vez forma de 
            instrucción para la población analfabeta.
        </p>
        <br>
        <h4 style="font-size:25px">Tapices</h4>
        <br>
        <p>Los<strong> tapices</strong> eran tejidos adornados con diseños intrincados y escenas narrativas. Fueron muy valorados 
         durante la Edad Media por su belleza visual y su uso práctico para aislar grandes espacios. Los tapices a menudo <strong>
         representaban historias religiosas, acontecimientos históricos y escenas de la mitología</strong>. Fueron producidos por 
         tejedores expertos utilizando hilos de colores vibrantes, creando obras de arte impresionantes y detalladas.
        </p>
        <br>
        <h4 style="font-size:25px">Vitrales</h4>
        <br>
        <p>Los vitrales eran una elementos destacados de la arquitectura medieval, particularmente en las catedrales góticas. Los 
            dibujos de estas ventanas representaban historias bíblicas, santos e imágenes simbólicas. Los <strong>artistas de 
            vitrales</strong> crearon diseños intrincados utilizando vidrios de colores, que permitieron que la luz se filtrara, 
            creando una atmósfera divina y etérea dentro de la iglesia.
        </p>
        <br>
        <h4 style="font-size:25px">Libro de Horas</h4>
        <br>
        <p>El Libro de Horas era un tipo de libro religioso en la Edad Media. Contenía oraciones, salmos y otros textos religiosos 
            para la devoción personal. El <strong>Libro de Horas</strong> a menudo presentaba páginas iluminadas con intrincadas 
            pinturas en miniatura que representaban escenas de la vida de Cristo, la Virgen María o los santos. Estas pinturas en 
            miniatura estaban meticulosamente detalladas y mostraban las habilidades artísticas de los iluminadores.
        </p>
        <br>
        <h4 style="font-size:25px">Pinturas seculares</h4>
        <br>
        <p>Si bien los temas religiosos dominaron el arte medieval, también hubo algunas <strong>pinturas seculares que representaban 
            escenas de la vida cotidiana, actividades cortesanas, caballerías y romances</strong>. Estas pinturas eran a menudo encargadas 
            por la nobleza y representaban la vida cortesana, escenas de caza y temas alegóricos.
        </p>
        <br>
        <p>A lo largo de la Edad Media, la pintura fue principalmente una forma de expresión religiosa y sirvió para fines de devoción 
            religiosa, instrucción y embellecimiento de espacios sagrados. El arte de este período sentó las bases para el desarrollo 
            de estilos y técnicas artísticas que luego evolucionarían hacia el Renacimiento y los movimientos artísticos posteriores.
        </p>
        <br>
        <p>Es importante señalar que los ejemplos de pinturas medievales que han sobrevivido al paso del tiempo, son relativamente raros 
            debido al paso del tiempo, la destrucción y la preservación limitada. Sin embargo, todavía se pueden encontrar muchas pinturas 
            importantes de la Edad Media en museos, iglesias y otras instituciones culturales de todo el mundo, lo que proporciona información 
            valiosa sobre las expresiones artísticas de esa época.
        </p>
        <br>
        <h2 style="font-size:25px">Influencia del arte medieval en el arte del Renacimiento</h2>
        <br>
        <p>El arte de la Edad Media jugó un papel importante al influir y preparar el escenario para el desarrollo del arte renacentista. A 
            continuación se muestran algunas formas clave en las que el arte de la Edad Media influyó en el Renacimiento:
        </p>
        <br>
        <p style="text-align: left;">1. <strong>Continuidad de Técnicas y Materiales</strong>: Muchas técnicas y materiales artísticos utilizados en la Edad Media 
            persistieron hasta el Renacimiento. Estos incluían aspectos como la pintura al fresco, la iluminación de manuscritos y el uso 
            de pan de oro. Los artistas del Renacimiento a menudo aprovecharon y refinaron estas técnicas, incorporándolas a sus propias 
            prácticas artísticas.</p>
        <br>
        <p style="text-align: left;">2. <strong>Humanismo y naturalismo</strong>: El Renacimiento marcó un cambio hacia un interés renovado en el humanismo, que 
            enfatizó la importancia del conocimiento, los logros y el potencial humanos. El arte de la Edad Media, centrado en temas 
            espirituales y representaciones estilizadas, comenzó a dar paso a un mayor énfasis en el naturalismo y la representación 
            realista de la forma humana. Los artistas del Renacimiento se inspiraron en el arte clásico de la antigua Grecia y Roma, 
            pero también buscaron elementos más naturalistas que se encuentran en el arte medieval.</p>
        <br>
        <p style="text-align: left;">3. <strong>Perspectiva y representación espacial</strong>: Una de las características definitorias del arte renacentista 
            fue el desarrollo y refinamiento de la perspectiva lineal, que creó una sensación de profundidad y tridimensionalidad en 
            las pinturas. Mientras que el arte medieval a menudo empleaba representaciones espaciales estilizadas y aplanadas, los 
            artistas del Renacimiento se basaron en los principios matemáticos de la perspectiva para crear composiciones más realistas 
            e inmersivas. Este cambio en la representación espacial supuso un alejamiento significativo del arte de la Edad Media.</p>
       <br>
        <p style="text-align: left;">4. <strong>Estudio del arte clásico y la antigüedad</strong>: los artistas del Renacimiento desarrollaron un profundo interés 
            en el arte y la cultura de la antigua Grecia y Roma. Esta fascinación por la antigüedad clásica fue impulsada en parte por el 
            descubrimiento y estudio de textos y obras de arte antiguos durante el Renacimiento. A medida que los artistas examinaban y 
            emulaban esculturas, arquitectura y pinturas clásicas, incorporaban motivos, temas y proporciones clásicas a sus propias obras. 
            Este renovado enfoque en los ideales clásicos representó un alejamiento del tema predominantemente religioso del arte medieval.</p>
        <br>
        <p style="text-align: left;">5. <strong>Mecenazgo y apoyo</strong>: El sistema de mecenazgo, en el que personas e instituciones adineradas encargaban 
            y apoyaban financieramente a artistas, ya estaba bien establecido durante la Edad Media. Sin embargo, el Renacimiento vio 
            un mayor énfasis en los mecenas individuales y el surgimiento de mecenas de arte influyentes, como la familia Medici en 
            Florencia. Este cambio de mecenazgo permitió a los artistas del Renacimiento una mayor libertad artística y oportunidades 
            de experimentación, lo que llevó al florecimiento de nuevos estilos y técnicas artísticas.</p>
        <br>
        <p style="text-align: left;">Si bien el Renacimiento marcó un alejamiento de muchos aspectos del arte medieval, también se basó en y absorbió elementos 
            del arte de la Edad Media. La transición de la Edad Media al Renacimiento fue un proceso gradual y complejo, con influencias 
            y desarrollos artísticos que evolucionaron con el tiempo. El <strong>arte de la Edad Media</strong> sirvió como sólida base 
            sobre la cual los artistas del Renacimiento construyeron, incorporando y transformando tradiciones e ideas anteriores en el 
            arte innovador y revolucionario del Renacimiento.</p>
        <br><br><br>
    </article>


</main>