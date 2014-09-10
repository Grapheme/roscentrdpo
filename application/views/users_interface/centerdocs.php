<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Документы центра</h1>
				<ul class="submenu">
					<li><?=anchor('information','Информация');?></li>
					<li><?=anchor('reviews','Отзывы клиентов');?></li>
					<li><?=anchor('presentation','Видео-презентация');?></li>
				</ul>
				<div class="clear"> </div>
				<ol>
					<li><a class="fancybox" rel="group2" href="<?=base_url();?>img/license.jpg" target="_blank">Лицензия</a> на право осуществления образовательной деятельности в сфере дополнительного профессионального образования</li>
					<li>Типовой <a class="fancybox" rel="group2" target="_blank" href="<?php base_url(); ?>documents/dogovor_primer.pdf">договор</a></li>
					<li><a class="fancybox" rel="group2" target="_blank" href="<?php base_url(); ?>documents/doverennost.jpg">Доверенность</a> на Климову О.В.</li>
					<li>Образец <a class="fancybox" rel="group2" href="<?=base_url();?>img/doc_dpo.jpg" target="_blank">удостоверения</a></li>
					<li>Образец <a class="fancybox" rel="group2" href="<?=base_url();?>img/tech_min.jpg" target="_blank">удостоверения</a> по пожарному тех.минимуму</li>
					<li><a class="fancybox" rel="group2" href="<?=base_url();?>documents/mintrud.jpg" target="_blank">Уведомление</a> Министерства труда и социальной защиты РФ о внесении в реестр аккредитованных организаций</li>
					<li><a class="fancybox" rel="group2" href="<?=base_url();?>img/otzv_28.jpg" target="blank_">Свидетельство</a> торгово-промышленной палаты Ростовской Области</li>
					<li><a class="fancybox" rel="group2" href="<?=base_url();?>img/otzv_29.jpg" target="blank_">Членский билет</a> торгово-промышленной палаты Ростовской Области</li>
					<li><a class="fancybox" rel="group2" href="<?=base_url();?>img/inn.jpg" target="blank_">Свидетельство</a> о постановке на учет в налоговом органе (ИНН)</li>
					<li><a class="fancybox" rel="group2" href="<?=base_url();?>img/ogrn.jpg" target="blank_">Свидетельство</a> о государственной регистрации юридического лица (ОГРН)</li>
					<li>
						Новое <a class="fancybox" rel="group2" href="<?=base_url();?>img/prilogenie_new.jpg" target="blank_">приложение</a> к лицензии 
						<p>
							<i>
								Бланк приложения серии 61П01 №0002330, выдан на основании приказа Региональной службой надзора и 
								контроля в сфере образования Ростовской области № 1328 от 05.06.2014г.
								Признать утратившим силу приложение №1 от 24.09.2013 к лицензии на осуществление 
								образовательной деятельности №2248 от 02.04..2012г бланки приложений 
								серии 61П01 №№0001700-0001703 на основании приказа Рособрнадзора Ростовской области 
								приказом №1328 от 05.06.2014г. 
								Основание №273-ФЗ от 29.12.2012г. «Об образовании в Российской Федерации»
							</i>
						</p>
					</li>
				</ol>
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
