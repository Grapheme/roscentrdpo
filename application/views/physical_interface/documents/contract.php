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
                    $this->load->view('physical_interface/contracts/new-contract');
                endif;
            ?>
			</div>
		</div>
	</div>
</body>
</html>
