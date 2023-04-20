<!DOCTYPE html>
<html>
<head>
	<title>Autocomplete</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<label for="nome">Nome: </label> 
	<input type="text" id="nome" name="nome"> << Consulte<br><br>
	<label for="cidade">Cidade: </label>
	<input type="text" id="cidade" name="cidade" readonly><br><br>
	<label for="uf">UF: </label>
	<input type="text" id="uf" name="uf" readonly>
	
    <script>
	$(function() {
		$("#cliente").autocomplete({
			source: "autocomplete.php",
			minLength: 2,
			select: function(event, ui) {
				$("#nome").val(ui.item.NOME);
				$("#cidade").val(ui.item.CIDADE);
				$("#uf").val(ui.item.UF);
			}
		}).autocomplete("instance")._renderItem = function(ul, item) {
			return $("<li>")
			.append("<div>" + item.CLIENTE + "</div>")
			.appendTo(ul);
		};
	});
	</script>

</body>
</html>
