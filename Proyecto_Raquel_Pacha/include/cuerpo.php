
    <fieldset class="uno">
    
      <form action="./include/procesa.php" method="post">
      
        <p><b>Nombre: </b> <input type="text" name="nombre" value="" max="70"  required ></p>

        <p><b>Apellidos: </b> <input type="text" name="apellidos" value="" max="70"  required ></p>

        <p><b>Email: </b> <input type="email" id="email" name="correo" value="" placeholder="Ej.: usuario@correo.com" required></p>
    
        <p><b>Género:</b></p>

        <label><input type="radio" name="sexo" value="masculino" required> Masculino</label>

        <label><input type="radio" name="sexo" value="femenino"> Femenino</label>

        <p><b>Edad:</b></p><input type="number" id="edad" name="edad" value="años" min="4" max="100" >

    </fieldset>
       
    <fieldset class="dos">
 <p><b>Escoge tus géneros preferidos:</b></p>
    <input type="checkbox" name="genero1" value="rock"> Rock<br>
    <input type="checkbox" name="genero2" value="jazz"> Jazz<br>
    <input type="checkbox" name="genero3" value="latino"> Latino<br>
    <input type="checkbox" name="genero4" value="pop"> Pop<br>
    <input type="checkbox" name="genero5" value="regueton"> Reguetón<br>
    <input type="checkbox" name="genero6" value="hiphop"> Hip Hop<br>
    <input type="checkbox" name="genero7" value="electronica"> Electrónica<br>
    <input type="checkbox" name="genero8" value="indie"> Indie<br>
    <input type="checkbox" name="genero9" value="clasica"> Clásica<br>
    <input type="checkbox" name="genero10" value="kpop"> K-Pop<br>

<p><b>Con qué freqüéncia escuchas música al día?</b></p>

    <select name="tiempo">

      <option value="nunca">Nunca</option>

      <option value="media">30min</option>

      <option value="dos">2h</option>

      <option value="mas">Más de 2h</option>
      
    </select>
<p><b>Has notado que la música te ayuda en tu estado de ánimo?</b></p>

    <label><input type="radio" name="valores" value="si">Si</label>
    <label><input type="radio" name="valores" value="no">No</label>

<p><b>Escoge el instrumento que más te guste:</b></p>

    <select  name="categorias">

      <option value="saxofon">Saxofón</option>
      <option value="clarinete">Clarinete</option>
      <option value="trompeta">Trompeta</option>
      <option value="guitarraesp">Guitarra Española</option>
      <option value="guitarraele">Guitarra Eléctrica</option>
      <option value="bajo">Bajo Eléctrico</option>
      <option value="arpa">Arpa</option>
      <option value="piano">Piano</option>
      <option value="teclado">Teclado</option>
      <option value="tambor">Tambor</option>
      <option value="caja">Caja</option>
      <option value="repique">Repique</option>
      <option value="bombo">Bombo</option>
      <option value="platillos">Platillos</option>
      
      </select>
 
<p><b>Con qué década te quedarías?: </b></p>
<input type="radio" name="decada" value="sesenta">Los 60<br>
<input type="radio" name="decada" value="setenta">Los 70<br>
<input type="radio" name="decada" value="ochenta">Los 80<br>
<input type="radio" name="decada" value="noventa">Los 90<br>
<input type="radio" name="decada" value="actual">Actualidad<br>

<p><b>Indica cuantos instrumentos tocas:</b></p>
<input type="number" name="numinstrumento" value="" min="0" max="5"><br>

<p><b>Cuál es tu nivel muiscal?</b></p>
<select name="nivel">
    
        <option value="menos cero">Menos 0</option>

      <option value="elemental">Elemental</option>

      <option value="profesional">Profesional</option>

      <option value="superior">Superior</option>

      

    </select>
    <p><b>Cuantas veces has ido a un concierto? </b></p>
    <input type="number" name="numconcierto" value="concierto" min="0" max="5"><br>
    
    
<p><b>Valoranos!</b></p>

<input type="number" name="valoracion"  value="" min="0" max="5"><br>
<div class="puntos">
    <input id="radio1" type="radio" name="estrellas" value="5">
    <label for="radio1">★</label>
    <input id="radio2" type="radio" name="estrellas" value="4">
    <label for="radio2">★</label>
    <input id="radio3" type="radio" name="estrellas" value="3">
    <label for="radio3">★</label>
    <input id="radio4" type="radio" name="estrellas" value="2">
    <label for="radio4">★</label>
    <input id="radio5" type="radio" name="estrellas" value="1">
    <label for="radio5">★</label>
  </div>

<p><b>Deja tu opinión!</b><br></p>
    <textarea class="mensaje" name="mensaje" value=""></textarea>
    </fieldset>
    <p><label class="terminos"><input type="checkbox" name="novedades" required> Acepto los términos de privacidad</label></p>
    
    <button type="submit" name="boton" value="enviar">Enviar</button>
    <button type="reset" name="boton" value="borrar">Borrar</button>
 </form>
