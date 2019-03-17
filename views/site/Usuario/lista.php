<div class="row mt-5 justify-content-center">
	<div class="col-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>E-mail</th>
					<th>Data Cadastro</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($this->usuarios as $usuario): ?>
					<tr>
						<td><?=$usuario->EMAIL;?></td>
						<td><?=$usuario->DT_CADASTRO;?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>