<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>;
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"></script>


function checkCNPJ(cnpj){
        $.ajax({
            'url' : 'https://www.receitaws.com.br/v1/cnpj/'+ cnpj.replace(/[^0-9]/g,''),
            'type' : "GET",
            'datatype' : 'jsonp', 
            'sucess' : function(dado){
                    alert(dado);
            }
        })

}