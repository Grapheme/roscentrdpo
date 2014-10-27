<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Нормативно-правовые акты</h1>
				<div class="clear"> </div>
				<ul>
					<li><a target="_blank" href="http://www.rekom-rostov.ru/wp-content/uploads/Konstitutsiya-Rossiyskoy-Federatsii.rtf">Конституция Российской Федерации (принята всенародным голосованием 12.12.1993) (с учетом поправок, внесенных Законами РФ о поправках к Конституции РФ от 30.12.2008 N 6-ФКЗ, от 30.12.2008 N 7-ФКЗ);</a>
					<li><a target="_blank" href="http://www.rekom-rostov.ru/wp-content/uploads/Ob-obrazovanii-v-Rossiyskoy-Federatsii.rtf">Федеральный закон от 29.12.2012 N 273-ФЗ "Об образовании в Российской Федерации";</a>
					<li><a target="_blank" href="http://www.rekom-rostov.ru/wp-content/uploads/postavnovlenie-pravitelstva-706-ot-15-08-2013.doc">Поставновление Правительства № 706 от 15.08.2013 года "Об утверждении Правил оказания платных образовательных услуг";</a>
					<li><a target="_blank" href="http://www.rekom-rostov.ru/wp-content/uploads/Ob-utverzhdenii-Tipovogo-polozheniya-ob-obrazovatelnom-uchrezhdenii-dopolnitelnogo-professionalnogo-obrazovaniya-spetsialistov.rtf">Постановление Правительства РФ от 26 июня 1995 г. N 610 "Об утверждении Типового положения об образовательном учреждении дополнительного профессионального образования (повышения квалификации) специалистов";</a>
					<li><a target="_blank" href="http://www.rekom-rostov.ru/wp-content/uploads/Ob-utverzhdenii-primernoy-formyi-dogovora-ob-okazanii-platnyih-obrazovatelnyih-uslug-v-sfere-obshhego-obrazovaniya.rtf">Приказ Минобразования России № 2994 от 10.07.2003 «Об утверждении примерной формы договора об оказании платных образовательных услуг в сфере общего образования»;</a>
					<li><a target="_blank" href="http://www.rekom-rostov.ru/wp-content/uploads/Ob-ispolzovanii-distantsionnyih-obrazovatelnyih-tehnologiy.rtf">Приказ Минобрнауки РФ от 06.05.2005 N 137 "Об использовании дистанционных образовательных технологий";</a>
					<li><a target="_blank" href="http://www.rekom-rostov.ru/wp-content/uploads/Prikaz-499-ot-01-07-2013.doc">Приказ 499 от 01.07.2013 "Об утверждении Порядка организации и осуществления образовательной деятельности по дополнительным профессиональным программам".</a>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/z1.rtf">Федеральный закон Российской Федерации от 12 января 1996 г. N 7-ФЗ «О некоммерческих организациях»</a></li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/z2.rtf">Федеральный закон Российской Федерации от 7 февраля 1992 г. N 2300-I «О защите прав потребителей»</a></li>
					<li><a target="_blank" href="<?=base_url();?>documents/2014/z3.pdf">Постановление Правительства РФ от 10.07.2013 N 582 «Об утверждении Правил размещения на официальном сайте образовательной организации в информационно-телекоммуникационной сети "Интернет" и обновления информации об образовательной организации»</a></li>
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
