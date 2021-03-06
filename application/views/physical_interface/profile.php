<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('physical_interface/includes/head');?>
<body>
	<?php $this->load->view('physical_interface/includes/header');?>
	<div class="container">
		<div class="row">
			<div class="span9">
				<ul class="breadcrumb">
					<li class="active">
						<?=anchor($this->uri->uri_string(),'Редактирование регистрационных данных');?>
					</li>
				</ul>
				<div>
					<?php $this->load->view('alert_messages/alert-error');?>
					<?php $this->load->view('alert_messages/alert-success');?>
				</div>
				<?php $this->load->view('forms/physical-profile');?>
			</div>
		<?php $this->load->view('users_interface/rightbarfiz');?>
		</div>
	</div>
	<? $this->load->view('users_interface/footer');?>
	<?php $this->load->view('physical_interface/includes/scripts');?>
	<script type="text/javascript">
		$(document).ready(function(){
		<?php if($readonly):?>
			$(".span4").attr('disabled','disabled').attr('readonly','readonly');
		<?php endif;?>
			$("#save").click(function(event){var err = false; var email = $("#email").val(); $(".control-group").removeClass('error');$(".help-inline").hide();$(".inpval").each(function(i,element){if($(this).val()==''){$(this).parents(".control-group").addClass('error');$(this).siblings(".help-inline").html("Поле не может быть пустым").show();err = true;}});if(err){event.preventDefault();};if(!err && !isValidEmailAddress(email)){$("#email").addClass('error');$("#email").html("Не верный адрес E-Mail").show();event.preventDefault();}});
			$(".digital").keypress(function(e){if(e.which!=8 && e.which!=46 && e.which!=0 && (e.which<48 || e.which>57)){return false;}});
			function isValidEmailAddress(emailAddress){var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);return pattern.test(emailAddress);};
		});
	</script>
</body>
</html>
