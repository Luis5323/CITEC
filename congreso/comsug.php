	<html>
  <div class="span6">
		<h1 class="cntr">Comentarios y Sugerencias</h1>
		<p>Por favor dejanos un comentario o una sugerencia</p>
	</div>
<form id="comentario-form" name="comentario-form" action="comentar.php" method="post">
  <div class="form-group">
    <label for="nombre">Nombre: </label>
    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre">
  </div>
    <div class="form-group">
    <label for="comentario">Comentario: </label>
    <textarea class="form-control" name="comentario"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Publicar!</button>
</form>
	<div class="container"> 
		<div class="clr"></div>
		<a href="/CITEC/congreso/" class="btn btn-success btn-lg">Regresar</a>
	</div>

  <h1>--------Aqui estan los comentarios---------</h1>

</div>
<?php include ("com.html"); ?>
</html>

