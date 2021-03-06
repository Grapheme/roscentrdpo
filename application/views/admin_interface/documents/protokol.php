<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('customer_interface/head');?>
<body>
	<style type="text/css">
		body { padding: 20px 0 0; }
		@media print {
			body, p { font-family: "Times New Roman", serif; font-size: 21px; line-height: 27px; margin-bottom: 18px; }
			.title_ { font-size: 28px; line-height: 34px; margin: 0 0 18px; }
			.title__ { font-size: 24px; line-height: 30px; margin: 8px 0 40px; }
			table td, table th { font-size: 20px; line-height: 26px; }
		}
	</style>
	<div class="container-fluid" style="position: relative;">
		<div class="row">
			<div class="span12">
				<p class="center title_">
					<img src="<?=$baseurl;?>img/logo.png" alt="" />
				</p>
				<p class="center title_">
					<strong>
						АВТОНОМНАЯ НЕКОММЕРЧЕСКАЯ ОРГАНИЗАЦИЯ<br/>ДОПОЛНИТЕЛЬНОГО ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ<br/>«ЮЖНО-ОКРУЖНОЙ ЦЕНТР ПОВЫШЕНИЯ КВАЛИФИКАЦИИ И<br/>ПЕРЕПОДГОТОВКИ КАДРОВ ДЛЯ СТРОИТЕЛЬНОГО <br/>И ЖИЛИЩНО-КОММУНАЛЬНОГО КОМПЛЕКСА»<br/>
					</strong>
				</p>
				<p class="center title__">
					<strong>Протокол № <u>&nbsp;&nbsp;<?=$ncompletion;?>&nbsp;&nbsp;</u><br/>итогового тестирования слушателей<br/><u><?=$customer;?></u><br />по программам повышения квалификации</strong>
				</p>
				<div class="clearfix" style="margin-top: 20px;">
		  	  		<p class="pull-left">
						Срок обучения:  с  « <u>&nbsp;<?=$datebegin['0']?>&nbsp;</u> »  <u>&nbsp;&nbsp;&nbsp;&nbsp;<?=$datebegin['1']?>&nbsp;&nbsp;&nbsp;&nbsp;</u> <?=$datebegin['2']?> г. <br />
		  	  		</p>
		  	  		<p class="pull-right">
		  	  			по   « <u>&nbsp;<?=$dateend['0']?>&nbsp;</u> »  <u>&nbsp;&nbsp;&nbsp;&nbsp;<?=$dateend['1']?>&nbsp;&nbsp;&nbsp;&nbsp;</u> <?=$dateend['2']?> г.
		  	  		</p>
				</div>
				<p>
					Объем <u>&nbsp;&nbsp;&nbsp;<?=$hours;?>&nbsp;&nbsp;&nbsp;</u> час
				</p>
				<p>
					Комиссия:
				</p>
				<table class="table" style="margin-top: 20px;">
					<tbody>
						<tr>
							<td>Председатель комиссии</td>
							<td>Евкин Максим Александрович, директор АНО ДПО «Южно-окружной центр повышения квалификации»</td>
						</tr>
						<tr>
							<td>Члены комиссии</td>
							<td>Климова Ольга Владимировна, заместитель директора по учебно-методической работе АНО ДПО «Южно-окружной центр повышения квалификации»</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>Евкина Валентина Васильевна, преподаватель технических наук АНО ДПО «Южно-окружной центр повышения квалификации»</td>
						</tr>
                        <?php if($dateend_kostul <= '2014-08-29'):?>
						<tr>
							<td>&nbsp;</td>
							<td>Евкин Александр Владимирович,  преподаватель технических наук АНО ДПО «Южно-окружной центр повышения квалификации»</td>
						</tr>
                        <?php endif;?>
                        <?php if($dateend_kostul >= '2014-10-01'):?>
						<tr>
							<td>&nbsp;</td>
							<td>Скляр Сергей Анатольевич, преподаватель технических наук АНО ДПО «Южно-окружной центр повышения квалификации»
                            </td>
						</tr>
                        <tr>
							<td>&nbsp;</td>
							<td>
                                Баринов Михаил Юрьевич, преподаватель технических наук АНО ДПО «Южно-окружной центр повышения квалификации»
                            </td>
						</tr>
                        <?php endif;?>
					</tbody>
				</table>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td>№ п/п</td>
							<td><nobr>Фамилия, Имя, Отчество</nobr></td>
							<td>Должность</td>
							<td>Наименование программы</td>
							<td>Дата итогового тестирования</td>
							<td>%</td>
						</tr>
					<?php for($i=0;$i<count($courses);$i++):?>
						<tr>
							<td><?=$i+1;?></td>
							<td><?=$courses[$i]['lastname'].' '.$courses[$i]['name'].' '.$courses[$i]['middlename'];?></td>
							<td><?=$courses[$i]['position'];?></td>
							<td><?=$courses[$i]['ccode'].' '.$courses[$i]['ctitle'];?></td>
							<td><nobr><?=$courses[$i]['dateover'];?></nobr></td>
							<td><?=$courses[$i]['result'];?></td>
						</tr>
					<?php endfor;?>
					</tbody>
				</table>
				<table class="table no-border" style="margin-top: 40px;">
					<tbody>
						<tr>
							<td>Председатель комиссии</td>
							<td>___________________________ Евкин М.А. <br /> (подпись)</td>
						</tr>
						<tr>
							<td>Члены комиссии</td>
							<td>___________________________ Климова О.В. <br /> (подпись)</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>___________________________ Евкина В.В. <br /> (подпись)</td>
						</tr>
                    <?php if($dateend_kostul <= '2014-08-29'):?>
						<tr>
							<td>&nbsp;</td>
							<td>___________________________ Евкин А.В. <br /> (подпись)</td>
						</tr>
                    <?php endif;?>
                    <?php if($dateend_kostul >= '2014-10-01' && $dateend_kostul <= '2014-12-23'):?>
                        <tr>
                            <td>&nbsp;</td>
                            <td>___________________________ Скляр С.А. <br /> (подпись)</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>___________________________ Баринов М.Ю. <br /> (подпись)</td>
                        </tr>
                    <?php endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
