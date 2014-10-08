<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Итоги финансового года</h1>
				<div class="clear"> </div>
				<p>
					По результатам 2013 финансового года основным источником поступления финансовых средств являются поступления за обучение.
				</p>
				<p>
					Доходы за 2013 финансовый год составили — 000000 рублей.
				</p>
				<p>
					Расходы денежных средств за 2013 финансовый год составили — 00000 рублей.
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
