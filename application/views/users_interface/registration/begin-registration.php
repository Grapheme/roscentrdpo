<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span9">
				<h1>Оформление заявки на повышение квалификации</h1>
				<div>
					<?php $this->load->view('alert_messages/alert-error');?>
					<?php $this->load->view('alert_messages/alert-success');?>
				</div>
				<p>
					Уважаемый заказчик! Для оформления заявок на повышение квалификации Вам необходимо пройти систему регистрации.<br/>
					Все поля являются обязательными для заполнения. После заполнения полей нажмите кнопку "Далее".
					Чтобы вернуться и изменить данные, сделанные на предыдущем шаге, нажмите "Назад".<br/>
					По завершении регистрации будет выслано письмо-уведомление на указанный Вами E-mail.
				</p>
				<p>
					<?=anchor('registration/customer/step/1','Регистрация Юридического Лица',array('class'=>'btn btn-info'));?>
					<?=anchor('registration/physical-registration','Регистрация Физического Лица',array('class'=>'btn btn-info'));?>
				</p>
			</div>
		<?php if($this->loginstatus['status'] && $this->loginstatus['zak']):?>
			<?php $this->load->view('users_interface/rightbarcus');?>
		<?php endif;?>
		<?php if($this->loginstatus['status'] && $this->loginstatus['slu']):?>
			<?php $this->load->view('users_interface/rightbaraud');?>
		<?php endif;?>
		<?php if($this->loginstatus['status'] && $this->loginstatus['adm']):?>
			<?php $this->load->view('users_interface/rightbaradm');?>
		<?php endif;?>
		<?php if($this->loginstatus['status'] && $this->loginstatus['fiz']):?>
			<?php $this->load->view('users_interface/rightbarfiz');?>
		<?php endif;?>
		</div>
		<hr>
	<?php $this->load->view('users_interface/footer');?>	
	</div>
	<?php $this->load->view('users_interface/scripts');?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#lsend").click(function(event){var err = false;$(".help-inline").hide();$("#top-restore").hide();$(".focused").each(function(i, element){if($(this).val() == ''){$(this).siblings(".help-inline").html('<i class="icon-exclamation-sign" title="Поле не может быть пустым"></i>').show();$("#top-restore").show();err = true;}});if(err){event.preventDefault();};});
			$("#send").click(function(event){var err = false;$(".control-group").removeClass('error');$(".help-inline").hide();$(".inpval").each(function(i,element){if($(this).val()==''){$(this).parents(".control-group").addClass('error');$(this).siblings(".help-inline").html("Поле не может быть пустым").show();err = true;}});if(err){event.preventDefault();}});
			$(".digital").keypress(function(e){
				if(e.which!=8 && e.which!=46 && e.which!=0 && (e.which<48 || e.which>57)){return false;}
			});
			
		<?php if($this->session->userdata('regcustomer')):?>
			$("#accounttype").val("<?=$this->session->userdata('accounttype');?>");
		<?php endif;?>
			
			$("#YesCancel").click(function(){location.href="<?=$baseurl;?>registration/customer/cancel-registration"});
		});
	</script>
</body>
</html>