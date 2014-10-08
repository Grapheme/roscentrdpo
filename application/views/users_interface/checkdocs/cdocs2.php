<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Организационная структура и система управления</h1>
				<div class="clear"> </div>
				<p>
					Организационная структура АНО ДПО «Южно-окружной центр повышения квалификации» 
					с достаточной эффективностью обеспечивает организацию и ведение учебно-воспитательного 
					процесса и методической работы.					
				</p>
				<p>
					Управление АНО ДПО «Южно-окружной центр повышения квалификации» осуществляется в соответствии 
					с Законодательством Российской Федерации, Уставом АНО ДПО «Южно-окружной центр повышения квалификации».
				</p>
				<p>
					<img src="<?=base_url();?>/documents/2014/schema.png" />
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
		</div>
	<?php $this->load->view('users_interface/footer');?>	
	</div>
	<?php $this->load->view('users_interface/scripts');?>
	<script src="<?=base_url('js/libs/jquery.fancybox.pack.js')?>"></script>
	<script src="<?=base_url('js/libs/fancybox-init.js')?>"></script>
</body>
</html>
