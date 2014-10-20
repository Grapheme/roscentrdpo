<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('physical_interface/includes/head');?>
<body>
	<style type="text/css">
		@media print {
			body, p { font-family: Tahoma, sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 14px; }
            .page-break {
                page-break-after: always;
                page-break-before: always;
            }
        }
    </style>
	<div class="container-fluid" style="position: relative;">
		<div class="row">
			<div class="span12">
            <?php
                if($order['date'] <= '2014-09-05'):
                    $this->load->view('physical_interface/contracts/old-contract');
                else:
                    $passport_data = '';
                    if(!empty($customer['passport_number'])):
                        $passport_data = ' паспорт серия: <u>'.$customer['passport_seria'].' '.$customer['passport_number'].'</u>, выдан <u>'.$customer['passport_data'].'</u>';
                        $passport_data .= ', проживающий по адресу <u>'.$customer['postaddress'].'</u>';
                    endif;
                    $this->load->view('physical_interface/contracts/new-contract',compact('passport_data'));
                    if ($order['date'] <= '2014-09-01'):
                        $this->load->view('physical_interface/contracts/new-contract-extend-before',compact('passport_data'));
                    else:
                        $this->load->view('physical_interface/contracts/new-contract-extend-after',compact('passport_data'));
                    endif;
                endif;
            ?>
			</div>
		</div>
	</div>
</body>
</html>
