
<h2><?php echo __('Cadastro de Entregadores'); ?></h2>
	<?php
		echo $this->Search->create('Entregadores', array('class'=> 'form-inline'));
	?>
		<div class="form-group  form-group-lg">
		<?php
			echo $this->Search->input('codigo', array('label' => 'Código :','class'=>'filtroEntregador', 'required' =>'false'));
		?>
		</div>
		<div class="form-group  form-group-lg">
		<?php
		echo $this->Search->input('nome', array('label' => 'Nome :','class'=>'filtroEntregador',  'required' =>'false'));
		?>
		</div>
		<div class="form-group  form-group-lg">
		<?php
		echo $this->Search->input('cpf', array('label' => 'CPF :','class'=>'filtroEntregador',  'required' =>'false'));
		?>
		</div>
		<div class="form-group  form-group-lg">
			<?php
		echo $this->Search->input('empresa', array('label' => false,'class'=>'none', 'required' =>'false'));

		echo $this->Search->input('minhaslojas', array('label' => 'Loja','class'=>'filtroPedido input-default ', 'required' =>'false'));
		?>
		</div>
		<div class="form-group  form-group-lg">
		<?php
		echo $this->Search->end(__('Filtrar', true));
		?>
		</div>

		<!-- Modal -->
	<div class="modal fade modal-grande" id="responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"> Cadastrar Entregador</h4>
	      </div>
	      <div class="modal-body">
	  		<div class="row-fluid">
				<div >

					<?php

						echo $this->Form->create('Entregador',array('class' => 'form-inline centralizadoForm', 'type' => 'file'));
					?>
					<div class="form-group  form-group-lg">
						<?php
							echo $this->Form->input('nome',array('class' => 'input-large','label' => array('text' => 'Nome*:')));
						?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('cpf',array('class' => 'input-large cpf','label' => array('text' => 'CPF*:')));
						?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('cep',array('class' => 'input-large cep','label' => array('text' => 'Cep:')));
						?>
					</div>

					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('endereco',array('class' => 'input-large','label' => array('text' => 'Endereço*:')));
						?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('bairro',array('class' => 'input-large','label' => array('text' => 'Bairro*:')));
					?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('cidade',array('class' => 'input-large','label' => array('text' => 'Cidade*:')));
						?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('uf',array('class' => 'input-large','label' => array('text' => 'UF*:')));
						?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('telefone',array('class' => 'input-large telefone','label' => array('text' => 'Telefone :')));
						?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('celular',array('class' => 'input-large celular','label' => array('text' => 'Celular :')));
					?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('email',array('class' => 'input-large','label' => array('text' => 'Email :')));
						?>
					</div>
					<br />
					<br />
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('ativo',array('class' => 'input-large','label' => array('text' => 'Ativo :')));
						?>
					</div>
					<div class="form-group  form-group-lg">
						<?php
						echo $this->Form->input('foto',array('type' => 'file','class' => 'input-large','label' => array('text' => 'Foto :')));
						?>
					</div>
					<?php
						echo $this->Form->input('filial_id',array('type' => 'hidden'));
						?>

				</div>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	        <button type="submit" class="btn btn-default">Salvar</button>
	        <?php echo $this->Form->end(); ?>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row-fluid">
	<br />
		<div class="form-group  form-group-lg">
			<button type="button" class="btn btn-success" id="clickmodal">Novo Entregador</button>
		</div>
		<div class="area-tabela" id="no-more-tables">
			<table class="table-action col-md-12 table-bordered table-striped table-condensed cf" >
					<thead class="cf">
						<tr>
							<th><?php echo $this->Paginator->sort('id', 'Código');?></th>
							<th><?php echo $this->Paginator->sort('nome', 'Nome');?></th>
							<th><?php echo $this->Paginator->sort('telefone', 'Telefone');?></th>
							<th><?php echo $this->Paginator->sort('celular', 'Celular');?></th>

							
							<th><?php echo $this->Paginator->sort('foto', 'Foto');?></th>
							<th><?php echo $this->Paginator->sort('ativo', 'Status');?></th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($entregadors as $entregador): ?>
						<?php
	                        $disabledline = ($entregador['Entregador']['ativo']== 0 ? 'disabledline': '');
	                    ?>
						<tr class="<?php echo $disabledline; ?>">
							<td data-title="Código"><?php echo h($entregador['Entregador']['id']); ?></td>
							<td data-title="Nome"><?php echo h($entregador['Entregador']['nome']); ?></td>
							<td data-title="Telefone"><?php echo h($entregador['Entregador']['telefone']); ?></td>
							<td data-title="Celular"><?php echo h($entregador['Entregador']['celular']); ?></td>
							
							<td data-title="Foto">
								<div class="circulodivPequeno">
									<?php
										if(isset($entregador['Entregador']['foto']) && $entregador['Entregador']['foto'] != ''){
									?>
											<img src=<?php echo $entregador['Entregador']['foto'];?> alt=<?php echo $entregador['Entregador']['nome'];?> width="50px" height="50px" title=<?php echo $entregador['Entregador']['nome'];?> width="50px" height="50px"/>
									<?php
										}else{
											echo $this->html->image('fotoico.png', array('alt'=> 'Foto', 'width'=>'50px','height'=>'50px'));

										}
									?>
								</div>
							</td>
							<td data-title="Status">
							<?php
								if($entregador['Entregador']['ativo']==1){
									echo 'Ativo';
								}else{
									echo 'Desabilidado';
								}
							 ?></td>
							<td data-title="Actions">
								<?php
									//echo $this->html->image('tb-ver.png',array('data-id'=>$entregador['Entregador']['id'],'class'=>'bt-tabela ver viewModal','data-id'=>$entregador['Entregador']['id']));

									echo $this->html->image('tb-edit.png',array('data-id'=>$entregador['Entregador']['id'],'class'=>'bt-tabela editModal','data-id'=>$entregador['Entregador']['id']));

									echo $this->Form->postLink(
										  $this->Html->image('tb-desabilitar.png', array('class'=>'bt-tabela','alt' => __('Excluir'))), //le image
										  array('controller'=>'entregadors','action' => 'disable', $entregador['Entregador']['id']), //le url
										  array('escape' => false), //le escape
										  __('Deseja ativar/desativar %s?', $entregador['Entregador']['nome'])
									);

									echo $this->Form->postLink(
										  $this->Html->image('tb-excluir.png', array('class'=>'bt-tabela','alt' => __('Excluir'))), //le image
										  array('controller'=>'entregadors','action' => 'delete', $entregador['Entregador']['id']), //le url
										  array('escape' => false), //le escape
										  __('Deseja Excluir o  %s?', $entregador['Entregador']['nome'])
									);

								?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

		</div>
	</div>
	<div class="row-fluid">
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, Visualisando {:current} de {:count} resultados.')
		));
		echo "<br>";
		echo $this->Paginator->counter(array(
		'format' => __('Inicio no registro {:start}, fim no {:end}.')
		));
		?>	</p>
		<nav>
  			<ul class="pagination">
			<?php
				echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('Próxima') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</ul>
		</nav>
	</div>
	<div id="loadDivModal"></div>
<style type="text/css">
	.modal-dialog{
		width: 95%;
	}
	.label-large{
		width: 164px !important;
	}
	.p_referencia{

	}
	.form-group{
		margin-right: 5px;
	}
</style>
<script>
$(document).ready(function() {
loja = $('#filterMinhaslojas').val();
	 $('#EntregadorFilialId').val(loja);
$("#clickmodal").click(function(){
$('#responsive').modal('show');
});
var urlInicio      = window.location.host;
if(urlInicio=="localhost" ){
	urlInicio= "localhost/entregapp_sistema";	
} 
$('body').on('click','.editModal', function(event){
		event.preventDefault();
		$(this).attr('src','http://'+urlInicio+'/img/ajax-loader.gif');
		modalid = $(this).data('id');


	//	$('#loaderGif'+idpedido).show();
	//	$('#divActions'+idpedido).hide();
		$("#loadDivModal").load('http://'+urlInicio+'/entregadors/edit/'+modalid+'', function(){
			$('.editModal').attr('src','http://'+urlInicio+'/img/tb-edit.png');
			$('#modalLoaded').modal('show');
			/*$('#loaderGif'+idpedido).hide();
			$('#divActions'+idpedido).show();
			 $('#counter').countdown({
	          image: 'http://'+urlInicio+'/img/digits2.png',
	          startTime: '00:10:00',
			  digitWidth: 34,
			    digitHeight: 45,
			    format: 'hh:mm:ss',
			});*/

		});
	});
	$('body').on('click','.viewModal', function(event){
		event.preventDefault();

		modalid = $(this).data('id');


	//	$('#loaderGif'+idpedido).show();
	//	$('#divActions'+idpedido).hide();
		$("#loadDivModal").load('http://'+urlInicio+'/entregadors/view/'+modalid+'', function(){
			$('#modalLoaded').modal('show');
			/*$('#loaderGif'+idpedido).hide();
			$('#divActions'+idpedido).show();
			 $('#counter').countdown({
	          image: 'http://'+urlInicio+'/img/digits2.png',
	          startTime: '00:10:00',
			  digitWidth: 34,
			    digitHeight: 45,
			    format: 'hh:mm:ss',
			});*/

		});
	});

/*$("#responsive").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});*/
});


</script>
