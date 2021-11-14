	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"></script>
	
<script> 
	function checkcnpj(cnpj){
		var param = {};
	$.ajax({
		'url' : 'https://www.receitaws.com.br/v1/cnpj/'+ cnpj.replace(/[^0-9]/g,''),
		'dataType': 'jsonp',
		'type' : "GET",
		'success' : function(data){
				 if(data.nome == undefined){
						alert(data.status +''+ data.message)
					}
					else if (document.getElementById('emp').value == data.nome &&
					document.getElementById('cnpj').value == data.cnpj  && 
					document.getElementById("telefone").value = data.telefone  &&
					document.getElementById("cep").value == data.cep 
					document.getElementById("estado").value == data.uf &&
					document.getElementById("cidade").value == data.municipio &&
					document.getElementById("bairro").value == data.bairro &&
					document.getElementById("numero").value == data.numero)
{
	console.log(data);
}
else{
	console.log("deu errado")
}
}
</script>