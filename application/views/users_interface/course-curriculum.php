<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<style type="text/css">
		.content-title {
			margin-top: 30px;
		}
		.content-block table { 
			width: 100%;
			border: 4px double black;
			border-collapse: collapse;
		}
		.content-block th {
			text-align: left;
			background: #ccc;
			padding: 5px;
			border: 1px solid black;
		}
		.content-block td {
			padding: 5px;
			border: 1px solid black;
		}
	</style>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="content-title">
					<?=$curriculum['title'];?>
				</div>
				<div class="content-block">
					<?=$curriculum['content'];?>
				</div>
			</div>
			<div class="clear"></div>
		<?php if($this->input->get('id') != 39):?>
			<div class="span12">
			<?php if($this->session->userdata('regcustomer')): ?>
				<?=anchor('registration/customer/step/'.$this->session->userdata('step'),'Записаться на курс','class="btn btn-info"');?>
			<?php else: ?>
				<?=anchor('registration/customer','Записаться на курс','class="btn btn-info"');?>
			<?php endif; ?>
			</div>
		<?php endif; ?>
		</div>
		<hr>
	<?php $this->load->view('users_interface/footer');?>
	</div>
	<?php $this->load->view('users_interface/scripts');?>
</body>
</html>
