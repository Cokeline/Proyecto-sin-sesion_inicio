
<form action="resultado.php" method="post">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" maxlength="15" required/>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" required/>
    
    <label for="tipo">Tipo de serie</label>
    <input type="radio" name="tipos" id="tipo" value="accion"/>Accion
    <input type="radio" name="tipos" id="tipo" value="drama"/>Drama
    <input type="radio" name="tipos" id="tipo" value="humor"/>Humor
    <input type="radio" name="tipos" id="tipo" value="fantastica"/>Fantastica
       
    <label for="series">Manga favorito:</label>
    
    <select name="series" id="series">
        <option value="">...</option>
        <option value="Berserk">Berserk </option>
        <option value="Naruto"> Naruto </option>
        <option value="OnePiece"> One Piece </option>
        <option value="Deathnote">Death Note </option>
        <option value="dragonball">Dragon Ball</option>
        <option value="Devilman">Devil Man</option>
        <option value="aKIRA">Akira </option>
        <option value="Conan">Detective Conan</option>
        <option value="Hunterxhunter">Hunter x Hunter </option>
        <option value="Ghost">Ghost in the Shell </option>
        <option value="Alita">Gunm, Alita Angel de Combate </option>
        <option value="Evangelion">Neo Genesis Evangelion </option>
    </select>

    <label for="tema">Elige un Background</label>
    <input type="radio" name="tema" id="tema" value="clasico">Clasico
    <input type="radio" name="tema" id="tema" value="floral">Floral
    <input type="radio" name="tema" id="tema" value="cine">Cine
    <label for="numero">Numero de capítulos que leeas al dia</label>
    <input type="number" id="numero" min="0" step="1" name="numero">
    <label for="numero">Valora:</label>
    <input type="number" id="numero" min="0" max="5" step="1" name="puntuacion">
    <label for="mensaje">Deja tu opinion: </label>
    <textarea name="mensajes" id="mensaje" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">
    <button type="submit">Enviar cuestionario</button>
    <button type="reset">Borrar cuestionario</button>


</form>

