<?=form_open($this->uri->uri_string(),array('class'=>'form-horizontal')); ?>
	<p>
		Здравстуйте, <?=$this->session->userdata('organization');?>.
	</p>
	<p> 
		Все необходимые данные заполнены. 
		Нажмите кнопку "Завершить" для завершения процедуры регистрации. 
		Если Вам необходимо внести какие-либо изменения, тогда нажмите кнопку "Назад". 
	</p>
	<div class="modal-footer">
		<button class="btn" id="cancel" data-toggle="modal" href="#cancelRegistration">Отменить</button>
		<button class="btn btn-success" type="submit" id="send" name="submit" value="send">Завершить</button>
		<?=anchor('registration/customer/step/3','<i class="icon-backward icon-white"></i> Назад',array('class'=>'btn btn-info'));?>
	</div>
<?= form_close(); ?>