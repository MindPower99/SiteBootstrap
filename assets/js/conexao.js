/*var app = {

	ip: 'http://localhost:8000',
    db: null,
	
	initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },
	
	onDeviceReady: function() {
		document.getElementById('btnEnviarMensagem').addEventListener('click', this.EnviarMensagem);
	}, */
	 function EnviarMensagem() {
		var nome = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var assunto = document.getElementById('category').value;
		var recado = document.getElementById('message').value;
		
		if (nome == "") {
			alert ("O campo nome deve ser preenchido");
		}
		
		else if (email == "") {
			alert ("O campo nome deve ser preenchido");
		}
		
		else if(email.search('@')<1){
            alert('Insira um Email válido');
        }
		
		else if (recado == "") {
			alert ("O campo recado deve estar preenchido");
		}
		
		else {
			$.ajax({
				type: "POST",
				url: "http://127.0.0.1/main.php",
				data: {
					acao: 'EnviarMensagem',
					nome: nome,
					email: email,
					assunto: assunto,
					recado: recado
				},
				dataType: "json", 
				success: function (json) {
					if(json.result == true){
						console.log(json.err);
					}
					else{
						console.log(json.err);
					}
					if(json.alert == true){
					    alert(json.err);
                    }
                    else if(json.result == true){
					    alert('Sua Mensagem foi Enviada !');
                        document.getElementById('email').value = "";
                        document.getElementById('name').value = "";
                        document.getElementById('category').value = "";
                        document.getElementById('message').value = "";
                    }
				},
				error: function(){
					console.log("##error");
				}
			});
		}
		
		
	}
//}