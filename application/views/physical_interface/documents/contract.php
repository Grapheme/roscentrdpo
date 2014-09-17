<?php
//$order['date'] = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('physical_interface/includes/head');?>
<body>
	<style type="text/css">
		@media print {
			body, p { font-family: Tahoma, sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 14px; }
            .page-break { page-break-after: always; }
        }
	</style>
	<div class="container-fluid" style="position: relative;">
		<div class="row">
			<div class="span12">
           		<p class="center title">
           			<strong>Договор № <?=number_order($order['number'],$order['year']);?></strong>
           		</p>
           		<p class="center">
           			об оказании образовательных услуг с применением дистанционных технологий
       				на портале <br /> Автономной некоммерческой организации дополнительного
	   				профессионального образования «Южно-окружного центра повышения квалификации
      				и переподготовки кадров для строительного и жилищно-коммунального комплекса» 
	  			  	(<a href="http://roscentrdpo.ru/">http://roscentrdpo.ru/</a>)
           		</p>
           		<div class="clearfix">
		  	  		<p class="pull-left">
						г. Ростов-на-Дону
		  	  		</p>
		  	  		<p class="pull-right">
		  	  			<u><?=$order['orderdate'];?></u>
		  	  		</p>
	  	  		</div>
      			<p class="intend">
      				Автономная некоммерческая организация дополнительного профессионального образования 
      				<nobr>«Южно-окружной</nobr> центр повышения квалификации и переподготовкикадров для 
      				строительного и <nobr>жилищно-коммунального</nobr> комплекса», (лицензия Региональной 
      				службы по надзору и контролю в сфере образования Ростовской области №2248 от 2 апреля 
      				2012 года) именуемое в дальнейшем «Исполнитель» <nobr>в лице заместителя директора</nobr> 
      				Климовой Ольги Владимировны, действующей  на основании доверенности <?=documentLicenseDate($order['date']);?>,
      				с одной стороны, и <?=$customer['fio'];?>, именуемый в дальнейшем «Заказчик», с другой стороны, 
					в дальнейшем при совместном упоминании именуемые Стороны, заключили настоящий договор о нижеследующем:
      			</p>
      			<p>
      				<strong>1. Предмет договора</strong>
      			</p>
                <?php
                if($order['date'] <= '2014-09-05'):
                    $this->load->view('physical_interface/contracts/old-contract');
                else:
                    $this->load->view('physical_interface/contracts/new-contract');
                endif;
                ?>

            <?php if($order['date'] >= '2014-09-05'):?>

            <?php endif;?>
			</div>
		</div>
	</div>
</body>
</html>
