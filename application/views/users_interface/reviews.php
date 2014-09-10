<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Отзывы наших клиентов</h1>
				<ul class="submenu">
					<li><?=anchor('information','Информация');?></li>
					<li><?=anchor('centerdocs','Документы центра');?></li>
					<li><?=anchor('presentation','Видео-презентация');?></li>
				</ul>
				<div class="clear"> </div>
				<ul class="otzv clearfix">
					<li>
						<a class="fancybox" rel="group" href="<?=base_url();?>img/otzv_3.jpg" target="blank_">
							<img src="<?=base_url();?>img/otzv_3.jpg" alt="Отзыв" />
						</a>
					</li>
					<li>
						<a class="fancybox" rel="group" href="<?=base_url();?>img/otzv_4.jpg" target="blank_">
							<img src="<?=base_url();?>img/otzv_4.jpg" alt="Отзыв" />
						</a>
					</li>
					<li>
						<a class="fancybox" rel="group" href="<?=base_url();?>img/otzv_9.jpg" target="blank_">
							<img src="<?=base_url();?>img/otzv_9.jpg" alt="Отзыв" />
						</a>
					</li>
					<li>
						<a class="fancybox" rel="group" href="<?=base_url();?>img/otzv_13.jpg" target="blank_">
							<img src="<?=base_url();?>img/otzv_13.jpg" alt="Отзыв" />
						</a>
					</li>
					<li>
						<a class="fancybox" rel="group" href="<?=base_url();?>img/otzv_20.jpg" target="blank_">
							<img src="<?=base_url();?>img/otzv_20.jpg" alt="Отзыв" />
						</a>
					</li>
					<li>
						<a class="fancybox" rel="group" href="<?=base_url();?>img/otzv_21.jpg" target="blank_">
							<img src="<?=base_url();?>img/otzv_21.jpg" alt="Отзыв" />
						</a>
					</li>
					<li>
						<a class="fancybox" rel="group" href="<?=base_url();?>img/otzv_22.jpg" target="blank_">
							<img src="<?=base_url();?>img/otzv_22.jpg" alt="Отзыв" />
						</a>
					</li>
					<div class="clear"> </div>
				</ul>

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
