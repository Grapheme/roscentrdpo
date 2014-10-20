<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Документы АНО ДПО «Южно-окружной центр повышения квалификации»</h1>
				<div class="clear"> </div>
				<p>
					АНО ДПО «Южно-окружной центр повышения квалификации» располагает <a href="#">квалифицированным</a> 
					составом работников, обеспечивающих высокий уровень подготовки обучаемых.					
				</p>
				<ul>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/ustav.pdf">Устав</a> АНО ДПО «Южно-окружной центр повышения квалификации» отвечает требованиям законодательства Российской Федерации об образовании.</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/license2014.pdf">Лицензия</a> на право осуществления образовательной деятельности в сфере дополнительного профессионального образования</li>
					<li>Новое <a target="_blank" href="<?=base_url();?>documents/2014/license2014-p1.jpg">приложение</a> к лицензии.<br> 
					<p><small>Бланк приложения серии 61П01 №0002330, выдан на основании приказа Региональной службой надзора и контроля в сфере образования Ростовской области № 1328 от 05.06.2014г.
					Признать утратившим силу приложение №1 от 24.09.2013 к лицензии на осуществление образовательной деятельности №2248 от 02.04.2012г бланки приложений серии 61П01 №№0001700-0001703 на основании приказа Рособрнадзора Ростовской области приказом №1328 от 05.06.2014г. Основание №273-ФЗ от 29.12.2012г. «Об образовании в Российской Федерации»</small></p></li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/uvedomlenie-trud.jpg">Уведомление</a> Министерства труда и социальной защиты РФ о внесении в реестр аккредитованных организаций оказывающих услуги в области охраны труда.</li>
					<li>План финансово-хозяйственной деятельности 2013г</li>
					<li>Информация о поступлении финансовых и материальных средств и об их использовании по итогам 2013г</li>
					<li>План финансово-хозяйственной деятельности 2014г</li>
					<li>Приказ об утверждении стоимости образовательных услуг от 00/00/0000</li>
					<li>Образец договора</li>
					<li>Положение о применении дистанционных технологий обучения (ДОТ)</li>
					<li>Правила внутреннего трудового распорядка</li>
					<li>Отчет о самообследовании</li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/plan-1year.pdf">План-график</a> работы на I полугодие 2014г</li>
               		<li><a target="_blank" href="<?=base_url();?>documents/2014/plan-2year.pdf">План-график</a> работы на II полугодие 2014г</li>
				</ul>
				<p><strong>Отчеты в Юстицию:</strong></p>
				<ul>
					<li>Отчет о деятельности за 2013г
					<li>Отчет о расходовании за 2013г
				</ul>
				<p><strong>Протоколы заседания общего собрания работников:</strong></p>
				<ul>
					<li>Протокол № 000
				</ul>
				<p><strong>Приказы:</strong></p>
				<ul>
					<li>Приказ о назначении ревизора;
				</ul>
				<p><strong>Решения учредителя:</strong></p>
				<ul>
					<li>Решение 3_10.01.2014_ревизор;
				</ul>
				<p><strong>Налоговая декларация по УСН:</strong></p>
				<ul>
					<li>2012 год
					<li>2013 год
				</ul>
				<p><strong>Образец удостоверения:</strong></p>
				<ul>
					<li>удостоверение
					<li>удостоверение по пожарному тех.минимуму
					<li>удостоверение по охране труда
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
