var conexao = {

	ip: 'http://localhost:8000',
    db: null,
	
	onDeviceReady: function() {
		document.getElementById('btnEnviarMensagem').addEventListener('click', this.EnviarMensagem);
	}
	
	EnviarMensagem: function () {
		var nome = document.getElementById('email').value;
		var email = document.getElementById('name').value;
		var assunto = document.getElementById('category').value;
		var recado = documento.getElementById('message').value;
		
		if (nome == "") {
			alert ("O campo nome deve ser preenchido");
		}
		
		else if (email == "") {
			alert ("O campo nome deve ser preenchido");
		}
		
		else if(vEmail.search('@')<1){
            alert('Insira um Email válido');
        }
		
		else if (recado == "") {
			alert ("O campo recado deve estar preenchido");
		}
		
		else {
			$.ajax({
				type: "POST",
				url: "http://localhost/main.php",
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

	}