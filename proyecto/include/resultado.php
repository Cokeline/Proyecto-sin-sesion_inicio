
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include "cabecera.php";
    ?>
</head>
<body 
id = <?php
$tema = recogeDatos("tema");
compruebaTema($tema) 
?>
>

<?php
function recogeDatos($dato)
{
    if (isset($_REQUEST["$dato"])) {
        $datorecogido = $_REQUEST["$dato"];
    } else {
        $datorecogido = "";
    }

    return $datorecogido;
}

$nombre = recogeDatos("nombre");
$apellidos = recogeDatos("apellidos");

function compruebaNombreApellido($dato1, $dato2)
{
    $patronNombre = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    $patronApellido = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";

    if (preg_match($patronNombre, trim($dato1)) && preg_match($patronApellido, trim($dato2))) {
        print  "<p class='contenedor'>Nombre y apellidos: $dato1 $dato2</p>";
    } else {
        print "<p class='error'>Ha escrito su nombre/apellidos incorrectamente.</p>";
    }
}

compruebaNombreApellido($nombre, $apellidos);
$tipo = recogeDatos("tipos");
function compruebaTipo($dato)
{
    $patronTipo = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";

    if (preg_match($patronTipo, $dato)) {
        print  "<p class='contenedor'> Tipo de serie: $dato</p>";
    } else {
        print "<p class='error'>No ha marcado el tipo.</p>";
    }
}

compruebaTipo($tipo);
function compruebaTema($dato){
    $patronTema = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    if (preg_match($patronTema, $dato)){
        $valor = print "$dato";
    }else{
       $valor = print "";

    }
    return $valor;
}
$puntuacion = recogeDatos("puntuacion");
$serie = recogeDatos("series");
function compruebaSerie($dato)
{
    $patronSerie = "/[a-zA-ZñáéíóúÁÉÍÓÚ0-9]/";

    if (preg_match($patronSerie, $dato)) {
        $numeroCapitulos = recogeDatos("numero");
        switch ($dato) {
            case "Berserk":
                print "<article class='contenedor'>
                    <p> Serie: Berserk</p>
                    <img alt='Sin imagen' src='../imagenes/berserk.jpg'>
                    <br>
                    <p>Sinopsis: El manga maldito en España. 
                    Editorial que decide comprar sus derechos, 
                    editorial que cierra. 
                    Es por eso que desde hace años no contaba con una 
                    editorial que apostara por ella. 
                    Ahora está siendo publicado por Panini, 
                    y es uno de los mangas más completos que existen. 
                    La trama nos traslada a una oscura, 
                    mística y repleta de demonios y monstruos Europa 
                    Medieval. Allí nos encontramos con Guts, 
                    un terrible caza demonios que porta una espada enorme, 
                    el Matadragones y una armadura espectacular, 
                    y va acompañado de su inseparable compañero, 
                    el elfo Puck. El manga inicialmente nos relata 
                    la infancia y entrenamiento de Guts 
                    (entre los tomos 4 y 13), para posteriormente 
                    relatarnos la búsqueda de venganza de este contra Griffith, 
                    su antiguo mentor, tras el Eclipse. Fantasía, violencia, sangre 
                    por doquier y una trama enrrevesada que nos pasea por los lugares 
                    más tenebrosos de la imaginación de Kentaro Miura, 
                    en Japón ha vendido más de 40 millones de copias y en 2006 fue galardonado 
                    con el Premio Osamu Tezuka a la Excelencia. Cuenta con tres películas anime 
                    estrenadas en febrero y junio de 2012, y febrero de 2013, además de dos series 
                    (también anime); una emitida en 1997, que contó con 12 episodios, y una nueva 
                    que se estrenó en 2016.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "Naruto":
                print "
                <article class='contenedor'>
                <p> Serie: Naruto</p>
                <img alt='Sin imagen' src='../imagenes/naruto.jpg'>
                <br>
                <p>Sinopsis:Siguiendo la estela y el estilo de Dragon Ball, 
                por lo menos en algunos planteamientos muy preconceptuales, 
                rápidamente Naruto se hizo un espacio propio y se convirtió en uno 
                de los mangas más impactantes, emocionantes y completos de la historia. Toda su cosmología de personajes ninja crearon un microcosmos lleno de honor, traición, esfuerzo y artes marciales, con combates apabullantes y un impacto visual que todavía perdura. El personaje de Naruto fue creado en un one-shot publicado en la revista Akamaru Jump en 1997, y dos años después comenzó a publicarse la serie del personaje. La historia nos relata la niñez y el paso a adulto de Naruto Uzumaki, un joven que tiene encerrado dentro de sí mismo al  Zorro de Nueve Colas, un ser que atacó la Aldea de la Hoja Oculta, el lugar donde vive Naruto cuando este era un recién nacido. Para poder detenerlo, el líder de la aldea,Minato Namikaze, selló al demonio dentro de Naruto y sacrificó su vida para ello. Es por eso que en los inicios, parte de la población de la aldea tiene denostado al chico, a pesar de no ser realmente el demonio. Y a lo largo de los 72 volúmenes de la serie, publicados durante 15 años, vamos viendo la evolución como ninja de Naruto y los enemigos espectaculares a los que se tiene que enfrentar, siempre teniendo presente la superación personal y combates épicos. El manga ha vendido más de 220 millones de copias y la serie anime ha sido premiada en numerosas ocasiones.</p>
                <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";
                break;
            case "OnePiece":
                print "<article class='contenedor'>
                    <p> Serie: One Piece</p>
                    <img alt='Sin imagen' src='../imagenes/onepiece.jpg'>
                    <br>
                    <p>
                    Sinopsis: One Piece es considerado por muchos aficionados como el mejor manga
                    de estilo shonen que se ha creado nunca. Es un de los mas longevos 
                    (lleva 20 años publicandose de forma ininterrumpida) y nos translada a un mundo 
                    retrofuturista donde la piratería esta propagada por todo el planeta. Todos ellos viven 
                    en la actual Gran Era Pirata y van en busca de un legendario tesoro, el One Piece, que escondió 
                    el gran pirata Gol D. Roger.
                    
                    Dos décadas despues de la muerte de Roger, un joven llamad Monkeu D. Luffy decide emprender la gran 
                    aventura de su vida en busca de este tesoro que le convertiría en el rey de los piratas, 
                    por lo que funda la Banda de los sombreros de paja junto a varios personajes de lo más extravagantes y 
                    carismáticos, como el espadachín Roronoa Zoro, Nami la ladrona, Ussop el francontirador mentider y Sanji, 
                    un cocinero mujeriego.

                    El manga, en una encuesta realizada por la Agencia de Cultura Japonesa , logró colcarse en la primera 
                    posición como el mejor manga de todos los tiempos, y en 2015 entró en la Guiness Record como el cómic que 
                    más copias ha vendido de un mismo autor en toda la historia (320 millones en todo el mundo, y en 2016 superó 
                    los 380, siendo el manga más vendido de la historia).
                    
                    </p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;
                case "Deathnote":
                print "<article class='contenedor'>
                    <p> Serie: Death Note</p>
                    <img alt='Sin imagen' src='../imagenes/narcos.jpg'>
                    <br>
                    <p>Sinopsis:¿Y si cayera en tus manos un libro en el cuál, si escribes el nombre 
                    de una persona, ésta muere en tan sólo 24 horas? Así comienza el 
                    inquietante y perturbador manga de Tsugumi Ohba, en el que un 
                    chico de instituto, Light Yagami, debe decidir quién vive y quién muere. 
                    Pero detrás de este oscuro poder se encuentran fuerzas sobrenaturales que 
                    pondrán en peligro el equilibrio de poder. El verdadero poseedor del libro, 
                    el shinigami Ryuk, se encontrará con Light y le explicará el verdadero origen de 
                    este, mientras poco a poco Light será consumido por la maldad. Estamos sin duda 
                    alguna ante un thriller psicológico de primer nivel que desde el comienzo pone 
                    los pelos de punta. Y a medida que transcurre la historia, mientras el FBI 
                    comienza a indagar quién es el responsable de que cada vez mueran más personas en 
                    extrañas circunstancias (ataques al corazón repentinos), las fuerzas oscuras 
                    relacionadas con el libro irán saliendo a la luz. Se realizó una exitosa serie 
                    anime entre 2006 y 2007 que contó con 37 episodios y se han estrenado varias 
                    películas live-action basadas en el manga, una miniserie, 
                    un musical e incluso en 2017 Netflix pretende comenzar el 
                    rodaje de una película con producción estadounidense. El manga
                    fue galardonado con un Premio Eagle en 2008 a Mejor manga y ha 
                    recibido numerosas nominaciones al Premio Cultural Tezuka Osamu 
                    (en 2007) y Obata fue nominado al Premio Eisner a Mejor 
                    dibujante/entintador en 2008.</p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

                case "dragonball":
                print "<article class='contenedor'>
                    <p> Serie: Dragon Ball</p>
                    <img alt='Sin imagen' src='../imagenes/dragonball.jpg'>
                    <br>
                    <p>Sinopsis: inicialmente Akira Toriyama comenzó el manga de 
                    Dragon Ball como una versión de la historia china de Viaje al Oeste, 
                    con Son Goku siendo la manifestación del hombre mono, y apareciendo 
                    varios de los personajes de aquel mítico cuento, mientras evolucionaba 
                    el personaje la idea de la serie manga cambió radicalmente. 
                    Pasó de ser una versión del Rey Mono a convertirse en un producto totalmente 
                    nuevo que al principio bebió del género de las artes marciales y el misticismo, 
                    apareciendo los Torneos de Artes Marciales en los que un joven Son Goku y sus 
                    amigos (Yamsha, Krilín y Mutenroshi) se enfrentaban entre sí y descubrían a nuevos 
                    combatientes, para pasar a elaboradas tramas en las que descubrimos al peligroso 
                    Ejército de la Red Ribbon o al demonio Piccolo, el mayor enemigo al que se 
                    enfrentó Son Goku cuando era un niño. 
                    Pero el éxito de Dragon Ball fue, precisamente, que sus personajes fueron 
                    evolucionando, creciendo y envejeciendo. De esta forma, Goku se hizo mayor Aunque 
                    en incluso en la siguiente etapa de la serie manga (y anime), titulada 
                    Dragon Ball Z, descubrimos que Son Goku era realmente originario de un alejado 
                    planeta de guerreros del espacio llamado Planeta Vegeta, que había sido destruido 
                    pero del que todavía sobrevivían su hermano, Raditz, y dos saiyanos más, Vegeta 
                    (el príncipe) y Nappa (en las películas basadas en la serie también se descubriría 
                    a Broly, el Super Saiyajin legendario). 
                    Y tres grandes sagas continuarían este descubrimiento, mostrando a los quizá 3 
                    mayores villanos a los que se han enfrentado Goku y sus amigos a lo largo de sus
                    aventuras: 
                    La saga de Freezer, La saga de los Androides y Cell, y La saga de Bú,finalizando 
                    el exitoso manga de Dragon Ball Z en 1995, pero entre 1996 y 1997 Toei Animation 
                    decidió emitir una serie anime nueva basada en los personajes, titulada 
                    Dragon Ball GT en la que habían pasado 5 años desde el final de Dragon Ball Z. 
                    Pero no triunfó como se esperaba y finalizó al cabo de 64 capítulos, hasta 2015, 
                    en el que Akira Toriyama se animó a crear una nueva continuación, desechando lo 
                    ocurrido en Dragon Ball GT creando una continuación a los eventos acaecidos en la 
                    Saga de Bú.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
 </article>";

                break;
                case "Devilman":
                print "<article class='contenedor'>
                    <p> Serie: Devil Man</p>
                    <img alt='Sin imagen' src='../imagenes/devilman.jpg'>
                    <br>
                    <p>Sinopsis: Devilman es uno de los títulos más terroríficos que 
                    se han publicado nunca para la demografía shonen y podría haber 
                    sido encuadrado fácilmente en el seinen. Su autor es Go Nakai, 
                    quien ha manifestado que había puesto mucho más empeño artístico 
                    a la hora de crear esta obra que Mazinger Z, su obra más conocida,
                    pero que le costó mucho menos de crear, argumentalmente hablando. 
                    La historia nos presenta la mítica batalla entre el mundo demoníaco,
                     de la oscuridad, y la luz, donde un joven llamado Akira Fudo es 
                     poseído por un demonio muy poderoso, Amón. Pero realmente Akira 
                     tiene el control del demonio - y no al revés - debido a que posee, 
                     entre otras cosas, un corazón puro. 
                    Es entonces cuando decide comenzar a combatir a los demonios 
                    utilizando el poder oscuro de Amón, empezando una tensa relación 
                    de poder y oscuridad. La violencia gráfica es total y su serie 
                    anime no refleja totalmente la oscuridad del manga.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "aKIRA":
                print "<article class='contenedor'>
                    <p> Serie: Akira</p>
                    <img alt='Sin imagen' src='../imagenes/akira.jpg'>
                    <br>
                    <p>Sinopsis: Más de 2000 páginas contemplan al manga más 
                    influyente de la historia del medio. Gracias a su película 
                    animada, estrenada en 1988 y visionada en numerosos festivales 
                    de ciencia ficción de todo el mundo, se abrió la puerta del cine 
                    animado japonés y el manga al mundo, siendo considerada Akira la 
                    precursora de todas ellas. El mismo creador del manga fue el que 
                    se encargó de dirigir aquella maravillosa película, una historia 
                    que nos traslada al año 2019 (en 1982 se trataba de un futuro 
                    distópico) en el que queda tan solo un año para que se celebren 
                    los Juegos Olímpicos en Neo-Tokyo. La ciudad está reconstruyéndose
                    después de haber sufrido un ataque nuclear debido a la III Guerra 
                    Mundial, y es por ello que el gobierno experimenta con niños para 
                    que tengan poderes capaces de predecir el futuro y mantener la paz.
                    Los dos protagonistas de la trama, Kaneda y Tetsuo, son motoristas 
                    callejeros pertenecientes a bandas que se verán involucrados, 
                    muy a su pesar, en una violenta subtrama política que removerá 
                    los cimientos de su sociedad post-nuclear. El manga fue ganador 
                    del Premio Kodansha de Manga en 1984 y el Premio Harvey a Mejor 
                    edición de material extranjero en 1993.</p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;
            case "Conan":
                print "<article class='contenedor'>
                    <p> Serie: Detective Conan</p>
                    <img alt='Sin imagen' src='../imagenes/conan.jpg'>
                    <br>
                    <p>Sinopsis: Un auténtico clásico. Detective Conan se publica de 
                    forma ininterrumpida desde 1994 y nos relata la historia de 
                    Shinichi Kudo, un joven que resulta ser uno de los más afamados 
                    e inteligentes detectives de todo Japón. Pero unos intrigantes y 
                    misteriosos hombres de negro trataron de envenenarlo, aunque en 
                    vez de matarlo hicieron que su cuerpo menguara hasta parecer un 
                    niño de 7 años, pero su mente se mantuvo intacta. Fue entonces 
                    cuando decidió cambiarse de nombre, llamándose Conan Edogawa, y 
                    no le contó su secreto a nadie con la intención de descubrir 
                    quiénes son los hombres de negro, poder detenerlos y conseguir la 
                    cura de su transformación. Mientras tanto, sigue ayudando a la policía 
                    en sus casos, aunque haciéndose pasar por un niño. Cuando termina cada 
                    caso, Conan hace una explicación completa de cómo fue resolviéndolo. 
                    Gosho Aoyama, el creador del manga, no duda en comentar que sus mayores 
                    influencias son las novelas de Sherlock Holmes, Arsene Lupin y el cine 
                    de Akira Kurosawa, y aunque en 2007 dijo tener un final pensado para la 
                    serie, parece ser que quiere continuar sin una fecha final establecida. 
                    Por otra parte, la serie anime es también un auténtico exitazo, y lleva 
                    emitiéndose desde 1996 contando en la actualidad con más de 800 episodios. 
                    También cuenta con más de 20 películas y una docena de ovas. 
                    Por último, cabe destacar que el manga ha vendido más de 140 millones de 
                    copias en todo el mundo y fue galardonado con el Premio Shogakukan Manga en 
                    la categoría de Mejor shonen en 2001.</p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;
                case "Hunterxhunter":
                print "<article class='contenedor'>
                    <p> Serie: Hunter x Hunter</p>
                    <img alt='Sin imagen' src='../imagenes/hunterxhunter.jpg'>
                    <br>
                    <p>Sinopsis: Uno de los shonen más vendidos de la historia, y 
                    aún en publicación desde que apareciera por primera vez en 1998. 
                    La trama nos presenta a Gon Freecss, un chico que fue abandonado 
                    por su padre, Ging Freecss, ya que éste se había convertido en 
                    un cazador de gran éxito y fue en busca de aventuras. Cuando Gon 
                    descubre que su padre está vivo (creía que había muerto), decide 
                    convertirse también en cazador e ir en busca de aventuras, cazar 
                    monstruos y encontrar tesoros. La trama es un viaje, una 
                    aventura en la que Gon hará amigos inseparables y descubrirá 
                    todo tipo de monstruos legendarios, mientras va mejorando sus 
                    habilidades de combate y lucha. El manga ha vendido más de 66 
                    millones de copias en todo el mundo, y se ha adaptado a dos exitosas
                    series anime y multitud de OVAs. No es la única obra maestra de
                    Yoshihiro Togashi, ya que también creó otros dos shonen de gran 
                    prestigio Yu Yu Hashuko</p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "Ghost":
                print "<article class='contenedor'>
                    <p> Serie: Ghost in the Shell</p>
                    <img alt='Sin imagen' src='../imagenes/Ghostin.jpg'>
                    <br>
                    <p>Sinopsis: Nacida como influencia Blade Runner, este intenso y 
                    filosófico manga de Shirow Masamune consiguió hacerse un espacio 
                    propio creando un estilo bien definido en el que mezcló la mejor 
                    ciencia ficción cyberpunk con una fuerte crítica social, sobre 
                    todo en relación al inexorable avance tecnológico, la globalización
                    y la influencia norteamericana - que se puede ver en muchos de los 
                    elementos futuristas de los personajes. Es por ello que nos 
                    encontramos ante una historia a nivel visual apabullante y 
                    profundamente descriptiva en el aspecto político, mostrando una 
                    gran trama político-social en la que las dudas existencialistas de 
                    la protagonista, la comandante Motoko Kusanagi, una cyborg que cree 
                    tener alma, comienza a imperar por encima de todo. 
                    
                    Cada frase y cada situación nos lleva a lo mismo: 
                    
                    ¿hasta qué punto una máquina puede considerarse viva o no? 
                    ¿cuáles son los límites de la inteligencia artificial? 
                    
                    En 1995 se realizó una película animada dirigida por el propio 
                    guionista del manga, consiguiendo una crítica internacional estupenda
                    debido, entre otras cosas, a su espectacular y fascinante puesta en 
                    escena con unas imágenes bellísimas del Japón del futuro, y su 
                    incesante punto filosófico, más si cabe que el manga original, que se 
                    vio sumergido mayormente en problemas sociales.
                    </p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "Alita":
                print "<article class='contenedor'>
                    <p> Serie: Gunm, Alita Angel de combate</p>
                    <img alt='Sin imagen' src='../imagenes/Alita.jpg'>
                    <br>
                    <p>Sinopsis: 
                    Investigando entre la chatarra arrojada desde la 
                    ciudad flotante de Salem, el Doctor Daisuke Ido descubre un 
                    cyborg estropeado y roto. 

                    Cuando decide reconstruirlo, descubre que realmente es Gally, 
                    una amnésica y poderosa cyborg que le cambiara la vida para 
                    siempre. En un ataque descubre que estimulando 
                    sus habilidades de lucha y supervivencia puede recobrar 
                    poco a poco su memoria para descubrir quién es en realidad. 
                    Es entonces cuando decide comenzar a exponerse a situaciones 
                    que le hagan poner en peligro su vida con el objetivo de 
                    descubrir quién es en realidad. La primera serie tuvo que ser 
                    finalizada apresuradamente debido a que su autor, Yukito Kishiro,
                    sufría problemas nerviosos, pero cinco años después, en el año
                    2000, retomó la historia en su secuela, Gunnm Last Order, 
                    revelando más detalles y cambiando algunos durante catorce años 
                    más de tramas, recopiladas en 19 volúmenes. Los directores James 
                    Cameron y Robert Rodríguez unieron sus fuerzas para realizar una
                    película live-action que se estrenó en 2018. Además, existe una 
                    exitosa OVA de dos episodios que fueron estrenados en 1993.
                    </p>
                     <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;

            case "Evangelion":
                print "<article class='contenedor'>
                    <p> Serie: Neo Génesis Evangelion </p>
                    <img alt='Sin imagen' src='../imagenes/eva.jpg'>
                    <br>
                    <p>Sinopsis: Curiosamente, en este caso el anime fue primero que el manga, 
                    por lo que estamos ante una adaptación a manga del anime homónimo. 
                    Pero rápidamente ganó protagonismo este manga y acabó finalizando 
                    su historia 15 años después de que se emitiera el último capítulo 
                    de la afamada serie anime, lo que demuestra la importancia de esta 
                    publicación. La trama nos sitúa en un futuro distópico en el que 
                    la Tierra está siendo atacada por seres de origen desconocido, 
                    los cuales son denominados como 'ángeles'. 
                    Por ello, una organización paramilitar llamada NERV ha construido 
                    unos robots gigantes llamados EVA, que se unen a patrones humanos 
                    que los guían en combate. 
                    Es el máximo representante del género mecha, de ciencia ficción, 
                    aunque presenta un sinfín de planteamientos filosóficos y psicológicos, 
                    puesto que los humanos que se montan en los EVA acaban trastocados e 
                    inestables a nivel mental. 
                    Esta serie, junto a Mazinger Z, fue considerada como una de las mayores 
                    influencias para realizar la película Pacific Rim y los Super Robots 
                    (mecha) en el manga y anime.
                    </p>
                    <p>Numero de Capitulos semanales: $numeroCapitulos</p>
</article>";

                break;


        }
    } else {
        print "<p class='error'>No ha marcado ninguna serie.</p>";
    }
}

compruebaSerie($serie);

$puntuacion = recogeDatos("puntuacion");
function compruebaValoracion($dato){
$patronValoracion = "/[0-9]/";

if (preg_match($patronValoracion, $dato)) {

    print "<article id ='valoracion'>
    <p>Tu valoración:</p>
   <img alt='Sin imagen' src=\"../imagenes/".$dato.".jpg\" \">
   </article>";

}else{
    print "<p class='error'>Por favor introduzca una valoración.</p>";
}


}
compruebaValoracion($puntuacion);
$mensaje = recogeDatos("mensajes");

function compruebaMensaje($dato){
    if ($dato!=""){
        $numeroPalabras=count(explode(" ", $dato));
        $palabras = preg_split("/[\s,]+/",$dato);
        mostrarPalabras($palabras, $numeroPalabras);
    }

}
function mostrarPalabras($dato, $contador){

    print" <p class='contenedor'>Tus comentarios:</p>";
    for($i = 0; $i < $contador; $i++){
        if ($i==0){
            print "<p style='display: inline-block; border: 3px black solid; background-color: rgb(11, 70, 180); color:white; text-align: center;margin-left: 45%'><b> $dato[$i] </b></p></>";
        }else{
            print "<p style='display: inline-block; border: 3px black solid; background-color: rgb(11, 70, 180); color:white; text-align: center;margin: 6px;'><b> $dato[$i] </b></p></>";

        }

    }
    print "<p class='contenedor'>Has escrito $contador palabras.</p>";

}

compruebaMensaje($mensaje);

    $fecha=date('d-m-Y');
    print"<article  class='contenedor'><p> Fecha: $fecha</p></article>";




?>


<a href="index.php" class="enlaces">Volver al formulario</a>
<footer>
    <?php
    include "pie.php";
    ?>
</footer>


</body>
</html>
