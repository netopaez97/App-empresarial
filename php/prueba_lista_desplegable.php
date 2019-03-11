<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JQuery UI - autocomplete - Ajax</title>
  </head>
  <body>
  	
   	<label for="nombre">Nombre</label>
   	<input type="text" id="nombre" name="">
   		
    <script src="https://code.jquery.com/jquery-2.1.3.js"
    integrity="sha256-goy7ystDD5xbXSf+kwL4eV6zOPJCEBD1FBiCElIm+U8="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>
    <script type="text/javascript">
	$(document).ready(function() {
 
		$('#nombre').autocomplete({
			source: function(request, response){
				$.ajax({
					url:"query_prueba_lista_desplegable.php",
					dataType:"json",
					data:{q:request.term},
					success: function(data){
					response(data);
					}
 
				});
			},
			minLength: 1,
		});
 
	});
    </script>

		<div name="data" id="data"></div>
  </body>
</html>