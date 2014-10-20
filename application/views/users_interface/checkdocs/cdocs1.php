<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Организационно-правовое обеспечение образовательной деятельности</h1>
				<div class="clear"> </div>
				<ol>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/svidetelstvo-reg.jpg">Свидетельство</a> о государственной регистрации некоммерческой организации</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/ogrn.jpg">Свидетельство</a> о государственной регистрации юридического лица (ОГРН)</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/inn.jpg">Свидетельство</a> о постановке на учет в налоговом органе (ИНН)</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/license2014.pdf">Лицензия</a> на право осуществления образовательной деятельности в сфере дополнительного профессионального образования</li>
					<li>Новое <a target="_blank" href="<?=base_url();?>documents/2014/license2014-p1.jpg">приложение</a> к лицензии.<br> 
					<p><small>Бланк приложения серии 61П01 №0002330, выдан на основании приказа Региональной службой надзора и контроля в сфере образования Ростовской области № 1328 от 05.06.2014г.
					Признать утратившим силу приложение №1 от 24.09.2013 к лицензии на осуществление образовательной деятельности №2248 от 02.04.2012г бланки приложений серии 61П01 №№0001700-0001703 на основании приказа Рособрнадзора Ростовской области приказом №1328 от 05.06.2014г. Основание №273-ФЗ от 29.12.2012г. «Об образовании в Российской Федерации»</small></p></li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/uvedomlenie-trud.jpg">Уведомление</a> Министерства труда и социальной защиты РФ о внесении в реестр аккредитованных организаций оказывающих услуги в области охраны труда.</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/zakluchenie-fire.jpg">Заключение</a> №400/2 о соответствии объекта защиты обязательным  требованиям пожарной безопасности.</li>
					<li>Санитарно-эпидемиологическое <a target="_blank" href="<?=base_url();?>documents/2014/zakluchenie-ses.jpg">заключение</a> № 61.РЦ.10.000.М.002701.11.11 от 07.11.2011г</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/ustav.pdf">Устав</a> АНО ДПО «Южно-окружной центр повышения квалификации» отвечает требованиям законодательства Российской Федерации об образовании.</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/dogovor-med.pdf">Договор</a> на оказание медицинских услуг.</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/reshenie_uchred.jpg">Решение учредителя №1</a>.</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/prikaz_director.pdf">Приказ</a> о назначении директора.</li>
				</ol>
				<p><small>Делопроизводство организовано в соответствии с требованиями законодательства Российской Федерации. Подлинники правовых документов хранятся у директора.</small></p>
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
