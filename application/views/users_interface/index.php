<!DOCTYPE html>
<html lang="en">
<? $this->load->view('users_interface/head');?>
<body>
	<? $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div id="promo-banner" class="span12">
				<h1>Южно-окружной центр повышения квалификации и переподготовки кадров <br />для строительного и жилищно-коммунального комплекса</h1>
				<h3>Повышение квалификации через Интернет с выдачей удостоверения о повышении квалификации.</h3>
			</div>
		</div>
		
		<div class="row">
			<div class="promo-12 span12">
				<span class="title_">ВНИМАНИЕ!</span> 
				<div class="wrapp_">
					<span class="scrollingtext">
						Открылись новые представительства в Севастополе и Симферополе (Республика Крым). Предлагаем сотрудничество региональных представителей на выгодных условиях. Обучение по курсу "Охрана труда" 1500 руб.
					</span>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="span12">
				<div class="row review">
					<p>Наши курсы разработаны в соответствии с рекомендациями: </p>
					<ul class="partners">
						<li class="p1"><a title="Национальное объединение строителей" href="http://www.nostroy.ru/" target="_blank">Национальное объединение строителей</a></li>
						<li class="p2"><a title="Национальное объединение проектировщиков" href="http://www.nop.ru/" target="_blank">Национальное объединение проектировщиков</a></li>
						<li class="p3"><a title="Национальное объединение изыскателей" href="http://www.iziskately.ru/" target="_blank">Национальное объединение изыскателей</a></li>
						<li class="p4"><a title="Национальное объединение энергоаудиторов" href="http://no-e.ru/" target="_blank">Национальное объединение энергоаудиторов</a></li>
						<li class="p5"><a title="МЧС России" href="http://www.mchs.gov.ru/" target="_blank">МЧС России</a></li>
						<li class="p6"><a title="Министерство труда РФ" href="http://www.rosmintrud.ru/" target="_blank">Министерство труда РФ</a></li>
					</ul>
				</div>
			</div>
			<div class="span9">
				<p>
					В условиях современной рыночной экономики постоянная профессиональная переподготовка, повышение квалификации и получение дополнительного 
					профессионального образования — это не просто важное, а, без преувеличения, обязательное  условие выполнения требований федеральных 
					законодательств, что в свою очередь способствует выживанию и успешному развитию любого бизнес-проекта. Южно-окружной центр повышения 
					квалификации нацелен на решение именно этой актуальной задачи. С помощью образовательного портала нами успешно реализуется комплексная 
					программа повышения квалификации. 
				</p>
				<p>
					Образовательный портал АНО ДПО Южно-окружной центр повышения квалификации и переподготовки кадров для строительного и жилищно-коммунального 
					комплекса предлагает курсы дистанционного дополнительного профессионального образования по направлениям строительства, проектирования, 
					инженерных изысканий, коммунального хозяйства, энергетического менеджмента, охраны труда, пожарно-технического минимума.
				</p>
				<p>
					Система дистанционного обучения позволяет организовать образовательный процесс с помощью электронных учебных курсов в дистанционной форме 
					через сети Интернет. После окончания обучения и успешной сдачи итогового тестирования слушатели курсов в самые кратчайшие сроки получают 
					удостоверение о повышении квалификации государственного образца.
				</p>
			</div>
			<div class="span3">
				<h3 class="bright">Наши вакансии</h3>
				<p>
					<p><strong>ТРЕБУЕТСЯ МЕНЕЖДЕР ПО ПРОДАЖАМ</strong></p>
					<p>По вопросам трудоустройства обращайтесь по телефону:<br/> +7 (904) 444-58-83</p>
				</p>
			</div>
			<!--
			<div class="span3">
				<h4>Популярные курсы центра</h4>
				<ul id="courses-new">
					<li><a href="http://roscentrdpo.ru/catalog/courses" class="none">Повышение квалификации по курсу «Охрана труда».</a></li>
					<li><a href="http://roscentrdpo.ru/catalog/courses" class="none">Повышение квалификации по курсу «Аттестация рабочих мест по условиям труда».</a></li>
					<li><a href="http://roscentrdpo.ru/catalog/courses" class="none">Предаттестационная подготовка по электробезопасности на группу допуска.</a></li>
					<li><a href="http://roscentrdpo.ru/catalog/courses" class="none">Предаттестационная подготовка для <b>Ростехнадзора</b> по курсу «Промышленная безопасность» для руководителей и специалистов организаций, поднадзорных Федеральным службам по надзору.</a></li>
					<?php for($i=0;$i<count($newcourses);$i++):?>
					<li><?=anchor('',$newcourses[$i]['code'].'. '.$newcourses[$i]['title'],array('class'=>'none'));?></li>
					<?php endfor;?>
					<li><?=anchor('catalog/courses','Полный список курсов &raquo;',array('class'=>'details'))?></li>
				</ul>
			</div>
			-->
		</div>
		<div class="row">
			<div class="span12">
				<h2 class="bordered">Этапы прохождения обучения</h2>
			</div>
			<div class="span3">
				<p class="caption">1. Оформление заявки <span class="next">&gt;</span></p>
				<p>
					1. Зарегистрируйте заказчика; <br />
					2. Выберите курсы; <br />
					3. Зарегистрируйте слушателей; <br />
					4. Получите счет и договор.
				</p>
			</div>
			<div class="span3">
				<p class="caption">2. Оплата <span class="next">&gt;</span></p>
				<p>
					Счет Вы получите автоматически по завершении оформления заявки. Совершить оплату 
					Вы можете в любом банке. Доступ к лекциям открывается в течение 1-2 дней после оплаты. 
				</p>
			</div>
			<div class="span3">
				<p class="caption">3. Обучение <span class="next">&gt;</span></p>
				<p>
					Слушатели обучаются в своих личных кабинетах на сайте. Для завершения обучения 
					слушатели выполняют итоговое тестирование.  
				</p>
			</div>
			<div class="span3">
				<p class="caption">4. Получение удостоверения</p>
				<p>
					Как только слушатели успешно завершают обучение, мы выдаем удостоверения о повышении 
					квалификации. Документы можно получить лично либо высылаются по месту нахождения 
					заказчика курьерской службой, бесплатно! 
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h2 class="bordered">Основные направления работы Центра</h2>
			</div>
			<div class="span12">
				<p>
					Южно-окружной центр повышения квалификации и переподготовки кадров для строительного и 
					жилищно-коммунального комплекса проводит обучение руководителей и специалистов организаций 
					различных профилей по следующим направлениям: 
				</p>
				<ul>
					<li>повышение квалификации инженеров проектировщиков;</li>
					<li>повышение квалификации строителей;</li>
					<li>повышение квалификации проектировщиков;</li>
					<li>повышение квалификации изыскателей;</li>
					<li>повышение квалификации энергоаудиторов;</li>
					<li>управление размещением государственных и муниципальных заказов и работа на электронных торговых площадках;</li>
					<li>обучение по программам пожарно-технического минимума;</li>
					<li>обучение по курсу «Охрана труда».</li>
				</ul>
				<p>
					Каждый сотрудник, прошедший обучение или аттестацию в Южно-окружном центре повышения квалификации, 
					полностью выполняет требования законодательства, что позволит ему повысить результативность своего 
					труда и не доставить владельцам компаний никаких проблем  со стороны надзорных органов.
				</p>
			</div>
		</div>
		<!--
		<div class="row">
			<div class="span12">
				<h2 class="bordered">Дистанционные курсы повышения квалификации</h2>
			</div>
			<div class="span12">
				<p>
					В условиях современной рыночной экономики постоянная профессиональная переподготовка, повышение квалификации и 
					получение дополнительного профессионального образования — это не просто важное, а, без преувеличения, обязательное 
					условие выживания и успешного развития любого бизнес-проекта. Южно-окружной центр повышения квалификации и 
					переподготовки кадров нацелен на решение именно этой актуальной задачи. Нашими преподавателями успешно реализуется 
					комплексная  программа повышения квалификации. 
				</p>
				<p>
					Это основательно проработанный документ, который включает несколько направлений, в том числе,  дистанционное повышение 
					квалификации и курсы повышения квалификации – наши базовые направления. Система дистанционного образования работает у 
					нас не первый год и прошла весьма продуктивный путь от стадии становления, до стадии формирования полноценной системы 
					дистанционного бизнес образования, получившей признание у специалистов строительной отрасли и ЖКХ. 
				</p>
				<p>
					Дистанционная форма обучения сегодня актуальна, потому что позволяет повысить квалификацию без отрыва от 
					основной деятельности. Дистанционное обучение – это, своего рода, палочка выручалочка для человека, загруженного работой, 
					но не желающего прекращать свой профессиональный и карьерный рост. Последнее замечание характерно для строительной отрасли, 
					развивающейся вопреки всем кризисам. Поэтому, повышение квалификации строителей дистанционно, сегодня сверх актуально. 
				</p>
				<p>
					Наш центр подготовки и повышения квалификации, имея за плечами солидный опыт работы, продолжает развиваться в этом 
					направлении и совершенствовать год от года дистанционное обучение  для повышения квалификации строителей и работников 
					жилищно-коммунального комплекса.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h2 class="bordered">Квалификационная аттестация и предаттестационная подготовка</h2>
			</div>
			<div class="span12">
				<p>
					Помимо проведения обучения по курсам повышения квалификации наш центр проводит 
					аттестационную подготовку по следующим направлениям:
				</p>
				<ul>
					<li>квалификационная аттестация руководителей и специалистов в области проектирования, строительства и инженерных изысканий;</li>
					<li>предаттестационная подготовка по курсу «Промышленная безопасность» для руководителей и специалистов организаций, поднадзорных Федеральной службе по экологическому, технологическому и атомному надзору;</li>
					<li>аттестация рабочих мест по условиям труда;</li>
					<li>предаттестационная подготовка по электробезопасности на группу допуска.</li>
				</ul>
			</div>
		</div>
		-->
		<div class="row">
			<div class="span12">
				<h2 class="bordered">География деятельности Центра</h2>
			</div>
			<div class="span12">
				<p>
					Южно-окружной центр повышения квалификации  располагается в Ростове-на-Дону, но охватывает своей деятельностью не 
					только Ростов, Ростовскую область и близлежащие регионы, а территорию всей России в целом. Все это стало возможным 
					благодаря новым технологиям дистанционного обучения которые не имеют территориальных ограничений. Все что нужно 
					специалисту - это свободный доступ в интернет. Поэтому дистанционная форма обучения, сегодня сверх актуальна, потому 
					что позволяет повысить квалификацию и получить всю необходимую документацию без отрыва от основной деятельности. 
					Дистанционное обучение – это, своего рода, палочка выручалочка для человека, загруженного работой, который не имеет 
					возможности оторваться на время обучения от своей профессиональной деятельности. Особенно характерно для строительной отрасли.
				</p>
				<p> 
					Специалисты, прошедшие наши курсы повышение квалификации  успешно работали на Олимпийский стройках Сочи, что 
					составляет нашу особую гордость. Мы смело можем записать себе в актив повышение квалификации работников строительной, 
					проектной отраслях, и сферы ЖКХ в городах: Пятигорск, Элиста, Майкоп, Махачкала, Чечня, Краснодар, Ставрополь, 
					Волгоград, Астрахань, Воронеж, Хабаровск, Челябинск, Севастополь, Симферополь (Республика Крым) и это далеко 
					неполный перечень.
				</p>
				<p> 
					Наша работа – это повышение квалификации кадров и мы стараемся выполнять ее, как и Вы, свою, добросовестно и с наибольшей пользой.
				</p>
			</div>
		</div>
	</div>
	<? $this->load->view('users_interface/footer');?>
	<? $this->load->view('users_interface/scripts');?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".none").click(function(event){event.preventDefault();});
			$('.scrollingtext').bind('marquee', function () {
			    var ob = $(this);
			    var tw = ob.width();
			    var ww = ob.parent().width();
			    ob.css({
			        right: -tw
			    });
			    ob.animate({
			        right: ww
			    }, 20000, 'linear', function () {
			        ob.trigger('marquee');
			    });
			    ob.mouseover(function() {
			    $(this).stop();
			    });
			    ob.mouseleave(function() {
			    ob.animate({
			        right: ww
			    }, 20000, 'linear', function () {
			        ob.trigger('marquee');
			    });
			    });
			}).trigger('marquee');
		});
	</script>
</body>
</html>
