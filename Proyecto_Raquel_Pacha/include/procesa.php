<!DOCTYPE html>
<html lang="es">
  <?php
  
  //validamos las decadas del radiobutton
  $decada = recogerVariable("decada");
  
  
  print "<head>";
    print "<meta charset=\"utf-8\">";
    print "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    print "<title>Gustos Musicales</title>";
    print "<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/$decada.css\">";
print "</head>";
print "<body>";


print "<article id=\"nombre\">";
//recoger la variable de nombre 
$nombre = recogerVariable("nombre");
validarVariable($nombre,"nombre");
validarNombre($nombre);
print "</article>";

print "<article id=\"apellidos\">";
//recoge la variable de apellidos
$apellidos= recogerVariable("apellidos");
validarVariable($nombre,"apellidos");
validarApellidos($apellidos);
print "</article>";

print "<article id=\"correo\">";
//recoger la variable de la dirección de email
$direccionemail = recogerVariable("correo");
validarVariable($direccionemail,"correo");
validarDireccionemail($direccionemail);
print "</article>";

print "<article id=\"sexo\">";
//validar la variable de sexo
$sexo = recogerVariable("sexo");
validarVariable($sexo,"sexo");
validarSexo($sexo);
print "</article>";

print "<article id=\"edad\">";
//validar la variable de la edad
$edad = recogerVariable("edad");
validarVariable($edad,"edad");
validarEdad($edad);
print "</article>";

print "<article id=\"genero\">";
//empezamos a recoger y validar las variables del checkbox
$genero1 = recogerVariable ("genero1");
validarCheckbox($genero1);

$genero2 = recogerVariable ("genero2");
validarCheckbox($genero2);

$genero3 = recogerVariable ("genero3");
validarCheckbox($genero3);

$genero4 = recogerVariable ("genero4");
validarCheckbox($genero4);

$genero5 = recogerVariable ("genero5");
validarCheckbox($genero5);

$genero6 = recogerVariable ("genero6");
validarCheckbox($genero6);

$genero7 = recogerVariable ("genero7");
validarCheckbox($genero7);

$genero8 = recogerVariable ("genero8");
validarCheckbox($genero8);

$genero9 = recogerVariable ("genero9");
validarCheckbox($genero9);

$genero10 = recogerVariable ("genero10");
validarCheckbox($genero10);
print "</article>";

print "<article id=\"tiempo\">";
//empezamos a recoger y validar las variables del select
$tiempo = recogerVariable ("tiempo");
validarSelect($tiempo);
print "</article>";

print "<article id=\"animo\">";
//recogemos y validamos las variables del radio
$valores = recogerVariable ("valores");
validarRadio($valores);
print "</article>";

print "<article id=\"categorias\">";
//recogemos y validamos todos los instrumentos del select
$categorias = recogerVariable ("categorias");
validarInstrumentos($categorias);
print "</article>";

print "<article id=\"decada\">";
//validamos las decadas del radiobutton
$decada = recogerVariable("decada");
validarDecadas($decada);
print "</article>";

print "<article id=\"cantidad\">";
//validamos y recogemos la cantidad de instrumentos que toca
$numinstrumento = recogerVariable("numinstrumento");
validarVariable($numinstrumento,"numinstrumento");
validarNumInstrumentos($numinstrumento);
print "</article>";

print "<article id=\"nivel\">";
//validamos y recogemos las variables pertenecientes al nivel musical
$nivel = recogerVariable ("nivel");
validarNivelMusical($nivel);
print "</article>";

print "<article id=\"concierto\">";
//validamos y recogemos las variables del número de veces que ha ido a un concierto
$numconcierto = recogerVariable("numconcierto");
validarVariable($numconcierto,"numconcierto");
validarNumConcierto($numconcierto);
print "</article>";

print "<article id=\"puntuacion\">";
//puntuaciónde la página
$valoracion = recogerVariable("valoracion");
validarVariable($valoracion,"valoracion");
validarValoracion($valoracion);
print "</article>";

print "<article id=\"opinion\">";
//mensaje de opinión
$mensaje = recogerVariable("mensaje");
validarVariable($mensaje,"mensaje");
mostrarMensaje($mensaje);
print "</article>";

function recogerVariable ($variable){//para recoger las variables 
  if (isset($_REQUEST[$variable])){
  $var = $_REQUEST[$variable];

  }
  else {
    $var ="";
  }
return $var;
}

function validarVariable($dato,$nombre){//validamos las variables de los datos personales
  if ($dato!="") {
      return $dato;
  }
  else {
      print "<p>No ha escrito su $nombre</p>";
  }


   }
   
   
   function validarNombre($nombre){
     if ($nombre !="") {
       echo "<p>Nombre:  $nombre</p>";
       
     }
     else {
       echo " ";
     }
   }

   function validarApellidos($apellidos){
    if ($apellidos !="") {
      echo "<p>Apellidos:  $apellidos</p>";
      
    }
    else {
      echo " ";
    }
  }

  function validarDireccionemail($direccionemail){
    if ($direccionemail !="") {
      echo "<p>Correo:  $direccionemail</p>";
      
    }
    else {
      echo " ";
    }
  }

  function validarSexo($sexo){
    if ($sexo !="") {
      echo "<p>Sexo:  $sexo</p>";
      
    }
    else {
      echo " ";
    }
  }

  function validarEdad($edad){
    if ($edad !="") {
      echo "<p>Edad:  $edad</p>";
      
    }
    else {
      echo " ";
    }
  }

  function validarCheckbox($genero1){
    if ($genero1 !=""){
      echo "<img src=\"../imagen/$genero1.jpg\">";
    }
    
  }

  function validarSelect($tiempo){
    if ($tiempo =="nunca"){
      echo "<p>Deberías escuchar música más a menudo. La música es buena para nuestro estado de ánimo.</p>";
    }
    elseif ($tiempo =="uno") {
      echo "<p>30 minutos es muy poco!</p>";
    }
 
    if ($tiempo =="dos"){
      echo "<p>Nada mal!</p>";
    }
    elseif ($tiempo =="mas") {
      echo "<p>Eres un melómano!</p>";
    }
  }

  function validarRadio($valores){
if ($valores =="si") {
 echo "<p>La música es un estímulo fundamental en la vida de los seres humanos. Tiene el poder de elevar el estados de ánimo por encima de las preocupaciones.</p>";
}
elseif ($valores =="no") {
  echo "<p>Vaya.. Espero que encuentres algo que te ayude en tu estado de ánimoo.</p>";
}
  }

  function validarInstrumentos($categorias){
    if ($categorias =="saxofon"){
      echo "<p>El saxofón, también conocido como saxófono o simplemente saxo, es un instrumento musical cónico, de la familia de los instrumentos de viento-madera, generalmente hecho de latón que consta de una boquilla con una caña simple al igual que el clarinete. Fue inventado por Adolphe Sax a principios de los años 1840.</p>";
    }
    elseif ($categorias =="clarinete") {
      echo "<p>El clarinete es un instrumento musical de la familia de los instrumentos de viento-madera que consta de una boquilla con caña simple. Dentro de la orquesta, se encuentra en la sección del viento-madera, junto a la flauta, el oboe y el fagot.</p>";
    }
 
    if ($categorias =="trompeta"){
      echo "<p>La trompeta es un instrumento musical de viento, que pertenece a la familia de los instrumentos de viento metal o metales, fabricado en aleación de metal. El sonido se produce gracias a la vibración de los labios del intérprete en la parte denominada boquilla a partir de la columna del aire.</p>";
    }
    elseif ($categorias =="guitarraesp") {
      echo "<p>Es un instrumento musical de la familia de los cordófonos, es decir los instrumentos que producen su sonido al hacer vibrar las cuerdas. Es un instrumento musical de cuerda pulsada, compuesto de una caja de resonancia, un mástil sobre el que va adosado el diapasón o trastero —generalmente con un agujero acústico en el centro de la tapa (boca)— y seis cuerdas. Sobre el diapasón van incrustados los trastes, que permiten hacer sonar las diferentes notas.</p>";
    }
    if ($categorias =="guitarraele"){
      echo "<p>La guitarra eléctrica es un instrumento musical de seis cuerdas normalmente, que utiliza el principio de inducción electromagnética para convertir las vibraciones de sus cuerdas de metal en señales eléctricas.</p>";
    }
    elseif ($categorias =="bajo"){
      echo "<p>Es el miembro de tono más bajo de la familia de guitarras. Es un instrumento de cuerda pulsada similar en apariencia y construcción a una guitarra eléctrica o acústica, pero con un cuello y escala más largos, y típicamente de cuatro a seis cuerdas o cursos.</p>";
    }
    if ($categorias =="arpa"){
      echo "<p>El arpa​ es un instrumento de cuerda pulsada formado por un marco resonante y una serie variable de cuerdas tensadas entre la sección inferior y la superior.</p>";
    }
    elseif ($categorias =="piano"){
      echo "<p>El piano es un instrumento de teclado, de la familia de cuerda percutida, al generar su sonido al golpear sus cuerdas con unos martillos controlados por el teclado. Puede producir acordes y dispone de un amplio registro.</p>";
    }
    if ($categorias =="teclado"){
      echo "<p>Un teclado electrónico es un instrumento de teclado que generalmente puede reproducir muchos sonidos, similares o no a los que producen otros instrumentos musicales. En algunos casos, su funcionamiento se basa en mecanismos eléctricos, electrónicos o digitales que crean los sonidos.</p>";
    }
    elseif ($categorias =="tambor"){
      echo "<p>Un tambor es un instrumento de percusión de sonido indeterminado, perteneciente a la familia de los membranófonos según el sistema de clasificación de Hornbostel-Sachs.​ Consta de una caja de resonancia, que suele ser de forma cilíndrica, y una membrana llamada parche, que cubre la abertura de la caja.​</p>";
    }
    if ($categorias =="caja"){
      echo "<p>La caja o caja clara es un instrumento de percusión de sonido indeterminado. Según la clasificación Hornbostel-Sachs, pertenece a la familia de los membranófonos. Es un tambor, usualmente de poca altura, con hebras llamadas bordones dispuestas diametralmente en la membrana inferior, las cuales le proporcionan su característico timbre más estridente y metálico que el del tambor común.</p>";
    }
    elseif ($categorias =="repique"){
      echo "<p>agudo como el tambor tocado con un solo palo (o dos palos largos) y la mano. Tradicionalmente el líder del conjunto utiliza el repinique (también conocido como repique) para dirigir y para interpretar los solos.</p>";
    }
    if ($categorias =="bombo"){
      echo "<p>El bombo es un instrumento musical de percusión membranófono, de timbre muy grave aunque de tono indeterminado. Debido a su sonido grave, se usa habitualmente para marcar y mantener el pulso en diversos estilos de música.</p>";
    }
    elseif ($categorias =="platillos"){
      echo "<p>Los platillos, platos, címbalos o cimbales son instrumentos de percusión de sonido indeterminado, lo que significa que las notas no tienen una altura definida. Pertenecen a la familia de los idiófonos, por lo que el sonido se produce entrechocando uno con otro o percutiéndolos con baquetas.​</p>";
    }
  }
  function validarDecadas($decada){
    if ($decada =="sesenta"){
      echo "<img src=\"../imagen/$decada.jpg\">";
    }
    elseif ($decada =="setenta") {
      echo "<img src=\"../imagen/$decada.jpg\">";
    }
 
    if ($decada =="ochenta"){
      echo "<img src=\"../imagen/$decada.jpg\">";
    }
    elseif ($decada =="noventa") {
      echo "<img src=\"../imagen/$decada.jpg\">";
    }
    if ($decada =="actual"){
      echo "<img src=\"../imagen/$decada.jpg\">";
    }
  }
//
  function validarNumInstrumentos($numinstrumento){
    for ($i=0; $i < $numinstrumento; $i++) { 
      
      echo "<img src=\"../imagen/instrumento.jpg\">";
  }
  }
//función para validar el nivel musical del usuario
  function validarNivelMusical($nivel){
    if ($nivel =="menos cero"){
      echo "<p>Tu nivel es muy bajo.. Estás en un nivel dónde no sabes ni las notas musicales. Deberías entrenar más tu oído!</p>";
    }
    elseif ($nivel =="elemental") {
      echo "<p> Si diste música en tu escuela, este es tu nivel. Puedes diferenciar notas musicales, instrumentos e incluso tocar algún instrumento.</p>";
    }
    if ($nivel =="profesional"){
      echo "<p>Has adquirido y perfeccionado totalmente los conocimientos musicales. Eres capaz de impartir clases musicales y tocar distintos instrumentos. </p>";
    }
    elseif ($nivel =="superior"){
      echo "<p>Tienes el máximo nivel que se puede alcanzar en los estudios de la música, capaz de impartir clases de todos los niveles, con conocimientos más que adquiridos y perfeccionados. Incluso puedes llegar a tocar cualquier instrumento que te plantees!</p>";
    }
  }

//función para validar el número de veces que ha ido a un concierto 
  function validarNumConcierto($numconcierto){
    if ($numconcierto!="") {
      echo "<p>Veces que has ido a un concierto:  $numconcierto</p>";
      
    }
    else {
      echo " ";
    }
  }

//función para validar las palabras del mensaje de opinión 
function mostrarMensaje ($mensaje){
  $palabras = explode(" ",$mensaje);
  $num=0;
  print "<p>Tu opinión personal: </p>";
  for ($i=0; $i < count($palabras); $i++) { 
   print "<p>$palabras[$i]</p>";
   $num ++;
   if ($mensaje=="php") {
    print "<p style= 'color: red'>php</p>";
  }
  }
 
  print "<p>Has introducido $num palabras</p>";
}

//función para validar los valores numéricos para que aparezca una imagen de una estrella tantas veces como puntúen la página
function validarValoracion($valoracion){
  for ($i=0; $i < $valoracion; $i++) { 
    
    echo "<img src=\"../imagen/estrella.png\">";
}
}


//Volver a la página inicial
print "<p><a href=\"../index.php\">Volver a la página inicial</a></p>";
?>
</body>
</html>