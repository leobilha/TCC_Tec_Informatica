<div id="telaCadastro">
			<div id="modalCadastro">
				<span id="fecharModalCadastro">X</span>
				<form method="POST" action="recebe_cadastro.php">
					<label title="Nome será usado como login">Equipe: </label> 
						</br>
						<input type="text" name="login" placeholder="Informe o nome da equipe...">
						</input>
						</br>

						<label>Senha: </label>
						</br>
						<input type="password" name="senha" placeholder="Escolha uma senha...">
						</br>

						<button type="submit">Cadastrar</button>
				</form>
			</div>
</div>

<script>
		$("#cadastro").click(function(){
				$("#telaCadastro").css('display', 'block');
			});
			$("#fecharModalCadastro").click(function(){
				$("#telaCadastro").css('display', 'none');
			});		
</script>