<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('customer_interface/head');?>
<body>
	<style type="text/css">
		body { padding: 20px 0 0; }

		@media all { 
  			.page-break  { display:none; }
		}
		@media print {
			body, p { font-family: "Times New Roman", serif; font-size: 14px; line-height: 21px; margin-bottom: 18px; }
			.title_ { font-size: 18px; line-height: 23px; margin: 0 0 18px; }
			table td, table th { font-size: 12px; }
			.page-break  { display: block; page-break-before: always;  }
			div.page { page-break-after: always; page-break-inside: avoid; }
		    table { page-break-inside: auto; }
		    tr    { page-break-inside: avoid; page-break-after: auto; }
		    thead { display: table-header-group; }
		    tfoot { display: table-footer-group; }			
		}
	</style>
	<div class="container-fluid" style="position: relative;">
		<div class="row">
			<div class="span12">
				<div class="page">
					<p class="center title_">
						<strong>
							Автономная некоммерческая организация дополнительного профессионального образования 
							«<nobr>Южно-окружной центр</nobr> повышения квалификации и переподготовки кадров для строительного 
							и <nobr>жилищно-коммунального</nobr> комплекса»
						</strong>
					</p>
					<p class="center">
						    Сведения о слушателях и выданных удостоверениях <br />
							за период c « <u>&nbsp;<?=$datebegin['0']?>&nbsp;</u> »  <u>&nbsp;&nbsp;&nbsp;&nbsp;<?=$datebegin['1']?>&nbsp;&nbsp;&nbsp;&nbsp;</u> <?=$datebegin['2']?> г. по « <u>&nbsp;<?=$dateend['0']?>&nbsp;</u> »  <u>&nbsp;&nbsp;&nbsp;&nbsp;<?=$dateend['1']?>&nbsp;&nbsp;&nbsp;&nbsp;</u> <?=$dateend['2']?> г.
					</p>
					<span style="margin-left:900px;">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td colspan="9">&nbsp;</td>
								<td colspan="3" style="text-align:center;">&nbsp;</td>
								<td colspan="3" style="text-align:center;"><b>Группа № <u>&nbsp;<?=$this->uri->segment(5);?>&nbsp;</u></b></td>
							</tr>
							<tr>
								<td colspan="9"></td>
								<td colspan="3" style="text-align:center;">Договор</td>
								<td colspan="3" style="text-align:center;">Удостоверения</td>
							</tr>
							<tr>
								<td>№</td>
								<td><nobr>Наименование организации,</nobr><br/><nobr>ННН, КПП, юрид. адрес</nobr></td>
								<td>Фамилия, Имя, Отчество</td>
								<td>Должность</td>
								<td>Наименование программы</td>
								<td>Объем учебного плана, час</td>
								<td>№ п/п</td>
								<td>ОПЛАТА Сумма</td>
								<td>Дата</td>
								<td>&nbsp;№&nbsp;</td>
								<td>Сумма</td>
								<td>Дата</td>
								<td>&nbsp;№&nbsp;</td>
								<td><nobr>Дата выдачи</nobr></td>
								<td><nobr>Роспись в получении</nobr></td>
							</tr>
						<?php for($i=0;$i<count($info);$i++):?>	
							<tr>
								<td><?=$i+1;?></td>
								<td><?=$info[$i]['organization'];?><br/><?=$info[$i]['inn'].'/'.$info[$i]['kpp'];?><br/><?=$info[$i]['uraddress'];?></td>
								<td><?=$info[$i]['lastname'].' '.$info[$i]['name'].' '.$info[$i]['middlename'];?></td>
								<td><?=$info[$i]['position'];?></td>
								<td><?=$info[$i]['ccode'].' '.$info[$i]['ctitle'];?></td>
								<td><?=$info[$i]['chours'];?></td>
								<!--<td><?=$i+1;?></td>-->
								<?php if(!empty($info[$i]['docnumber'])):?>
									<td><?=$info[$i]['docnumber'];?></td>
								<?php else:?>
									<td><input type="text" value="<?=$info[$i]['docnumber'];?>" class="inv"></td>	
								<?endif;?>
								<td><nobr><?=$info[$i]['сprice']-$info[$i]['discount'];?> руб.</nobr></td>
								<td><?=$info[$i]['userpaiddate'];?></td>
								<td><?=$info[$i]['order'];?></td>
								<!--<td><nobr><?=$info[$i]['ordprice'];?> руб.</nobr></td>-->
								<td><nobr><?=$info[$i]['сprice']-$info[$i]['discount'];?> руб.</nobr></td>
								<td><?=$info[$i]['orderdate'];?></td>
								<td><?=$info[$i]['idnumber'];?></td>
								<td><?=$regdateend;?></td>
								<td>&nbsp;</td>
							</tr>
						<?php endfor;?>
						</tbody>
					</table>
					<table class="table no-border">
						<tbody>
							<tr>
								<td>Директор</td>
								<td>М.А.Евкин</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--div class="page-break"></div-->
				<div class="page">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>№</td>
								<td>Фамилия</td>
								<td><nobr>Имя, Отчество</nobr></td>
								<td><nobr>По программе</nobr></td>
							</tr>
						<?php for($i=0;$i<count($info);$i++):?>	
							<tr>
								<td><?=$i+1;?></td>
								<?php $fio = preg_split("/[ ]+/",$info[$i]['fiodat']);?>
								<td><?php if(isset($fio[0])): echo $fio[0]; endif;?></td>
								<td><?php if(isset($fio[1])&&isset($fio[2])): echo $fio[1].' '.$fio[2]; endif;?></td>
								<td><?=$info[$i]['ccode'].' '.$info[$i]['ctitle'];?></td>
							</tr>
						<?php endfor;?>
						</tbody>
					</table>		
				</div>										
			</div>
		</div>
	</div>
</body>
</html>
