<div id="telaEscura">
		<div id="modal">
					<span id="fecharModal">X</span>						
				<form method="POST" action="recebe_login.php">			
						<label>Login: </label> 
						</br>
						<input type="text" name="login" placeholder="Nome da equipe é seu login...">
						</input>
						</br>

						<label>Senha: </label>
						</br>
						<input type="password" name="senha" placeholder="Digite sua senha...">
						</br>

						<button type="submit">Logar</button>
				</form>

		</div>		
		

</div>

	
<script>
		$("#login").click(function(){
				$("#telaEscura").css('display', 'block');
			});
			$("#fecharModal").click(function(){
				$("#telaEscura").css('display', 'none');
			});		
	</script>