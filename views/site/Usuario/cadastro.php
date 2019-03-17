<div class="row mt-5 justify-content-center">
	<div class="col-6">
		<div class="card">
			<h5 class="card-header">Cadastro de Usuário - Desenvolvendo</h5>
			<div class="card-body">
				<form action="usuario/cadastrar" method="POST">
					<div class="form-group">
						<label for="nomeUsuario">Nome</label>
						<input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Ex: João da Silva">
					</div>
					<div class="form-group">
						<label for="emailUsuario">Email address</label>
						<input type="email" class="form-control" id="emailUsuario" name="emailUsuario" aria-describedby="emailAjuda" placeholder="exemplo@email.com">
						<small id="emailAjuda" class="form-text text-muted">Seu e-mail jamais será divulgado.</small>
					</div>
					<div class="form-group">
						<label for="senhaUsuario">Senha</label>
						<input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="********">
						<small id="emailAjuda" class="form-text text-muted">Crie uma senha segura contendo letras, números e símbolos. A senha deve conter no mínimo 8 caracteres. Utilize letras maiúsilas e minúsculas. Ex: 20_XlpQ*22@</small>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>