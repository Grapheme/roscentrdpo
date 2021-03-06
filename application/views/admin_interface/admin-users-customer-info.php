<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin_interface/head');?>
<body>
	<?php $this->load->view('admin_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span9">
				<?php $orders = FALSE;?>
			<?php if(isset($_SERVER['HTTP_REFERER'])):?>
				<?php $segments = preg_split('/[\/]+/',$_SERVER['HTTP_REFERER'],-1,PREG_SPLIT_NO_EMPTY);?>
				<?php if(isset($segments[4])):?>
					<?php if($segments[4] == 'orders'):?>
						<?php $orders = TRUE;?>
					<?php endif;?>
				<?php endif;?>
				<?php if(isset($segments[5])):?>
					<?php if($segments[5] == 'orders'):?>
						<?php $orders = TRUE;?>
					<?php endif;?>
				<?php endif;?>
				<ul class="breadcrumb">
				<?php if($orders):?>
					<li>
						<a href="javascript:history.go(-1);">&larr; Вернутся назад</a>
					</li>
				<?php else:?>
					<li>
						<a href="javascript:history.go(-1);">Заказчики</a><span class="divider">/</span>
					</li>
					<li class="active">
						<?=anchor('admin-panel/users/customer/info/id/'.$this->uri->segment(6),'Карточка заказчика');?>
					</li>
				<?php endif;?>
			<?php endif;?>
				</ul>
				<div>
					<?php $this->load->view('alert_messages/alert-error');?>
					<?php $this->load->view('alert_messages/alert-success');?>
				</div>
				<?php $this->load->view('forms/customer-profile');?>
			</div>
			<?php $this->load->view('admin_interface/rightbarmsg');?>
		</div>
	</div>
	<?php $this->load->view('admin_interface/scripts');?>
	<script type="text/javascript">
		$(document).ready(function(){
			
			<?php if($readonly):?>
				$(".inpval").attr('disabled','disabled').attr('readonly','readonly');
			<?php endif;?>
			
			$("#save").click(function(event){var err = false; var email = $("#personemail").val(); $(".control-group").removeClass('error');$(".help-inline").hide();$(".inpval").each(function(i,element){if($(this).val()==''){$(this).parents(".control-group").addClass('error');$(this).siblings(".help-inline").html("Поле не может быть пустым").show();err = true;}});if(err){event.preventDefault();};if(!err && !isValidEmailAddress(email)){$("#cgemail").addClass('error');$("#email").html("Не верный адрес E-Mail").show();event.preventDefault();}
			});
			$(".digital").keypress(function(e){
				if(e.which!=8 && e.which!=46 && e.which!=0 && (e.which<48 || e.which>57)){return false;}
			});
			$("#accounttype").val("<?=$customer['accounttype'];?>");
			function isValidEmailAddress(emailAddress){var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);return pattern.test(emailAddress);};
		});
	</script>
</body>
</html>
