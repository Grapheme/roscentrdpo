<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<style type="text/css">
		.table-striped tbody tr:nth-child(2n+1) td, .table-striped tbody tr:nth-child(2n+1) th { background-color: #f3f3f3; }
		.table th, .table td { font-size: 13px; }
	</style>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span<?=($this->loginstatus['status'])?'9':'12';?>">
				<h1 class="bordered courses">Курсы повышения квалификации руководителей и специалистов</h1>
				<div class="btn-toolbar inline-right">
					<div class="btn-group">
						<!--<a href="<?= base_url('price_list.pdf'); ?>" class="btn btn-info"><i class="icon-th-list icon-white"></i> Каталог курсов и прайс-лист (.xls)</a>-->
						<a href="<?= base_url('courses_list.xls'); ?>" class="btn btn-info"><i class="icon-th-list icon-white"></i> Каталог курсов и прайс-лист (.xls)</a>
					</div>
				</div>
				<div class="clear"></div>
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
		<?php if($this->loginstatus['status'] && $this->loginstatus['fiz']):?>
			<?php $this->load->view('users_interface/rightbarfiz');?>
		<?php endif;?>
		</div>
		<div class="row">
			<div class="span12">
				<div class="accordion" id="accordion2">
			<?for($i=0;$i<count($trends);$i++):?>
				<?php
					$numCourses = 0;
					for($j=0;$j<count($courses);$j++):
						 if($courses[$j]['trend'] == $trends[$i]['id']):
						 	$numCourses++;
						 endif;
					endfor;
				?>
				<?php if($numCourses):?>
					<div class="accordion-group">
						<a name="<?=$trends[$i]['tags'];?>"></a>
						<div class="accordion-heading">
                            <?php
                                $uniq = uniqid('catalog_');
                            ?>
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?=(!empty($trends[$i]['tags'])) ? $trends[$i]['tags'] : $uniq ;?>_accordion">
								<?=$trends[$i]['title'];?> <span class="small">(курсов: <?=$numCourses;?>)</span>
							</a>
						</div>
						<div id="<?=(!empty($trends[$i]['tags'])) ? $trends[$i]['tags']: @$uniq ;?>_accordion" class="accordion-body collapse <?=($i==0)?' in':'';?>">
							<div class="accordion-inner">
								<table class="table table-striped">
									<thead>
										<tr>
											<th class="centerized">№</th>
											<th class="span4 centerized">Название</th>
											<th class="centerized">Код</th>
											<th class="centerized">Виды работ</th>
											<th class="centerized"><nobr>Кол-во<br/>часов</nobr></th>
											<th class="centerized" width="80px"><nobr>Цена</nobr></th>
										</tr>
									</thead>
									<tbody>
								<? for($j=0,$num=1;$j<count($courses);$j++):
									if($courses[$j]['trend'] == $trends[$i]['id']): ?>
										<tr>
											<td><?=$num?></td>
											<td>
                                        <?php if(FALSE):?>
											<?php if(FALSE && !empty($courses[$j]['curriculum']) && is_file(getcwd().'/'.$courses[$j]['curriculum'])):?>
												<a href="<?=site_url('catalog/courses/getCurriculum?course='.$courses[$j]['id']);?>" class="">
													<?=$courses[$j]['title'];?>
												</a>
											<?php elseif($courses[$j]['curriculum_exist'] !== FALSE):?>
												<a href="<?=site_url('catalog/courses/curriculum?id='.$courses[$j]['curriculum_exist']);?>" class="">
													<?=$courses[$j]['title'];?>
												</a>
											<?php else:?>
                                                <?=$courses[$j]['title'];?>
                                            <?php endif;?>
                                            <?php if(!empty($courses[$j]['programm_scan'])): ?>
                                                <br /><a href="<?=base_url($courses[$j]['programm_scan']);?>" target="_blank">Утвержденная программа</a>
                                            <?php endif; ?>
                                        <?php else:?>
                                            <?=$courses[$j]['title'];?>
                                        <?php endif;?>
											</td>
											<td><?= $courses[$j]['code']; ?></td>
											<td><?=nl2br($courses[$j]['note']);?></td>
											<td class="centerized"><nobr><?= $courses[$j]['hours']; ?> ч.</nobr></td>
											<td class="centerized">
											<?php if ( false && $trends[$i]['id'] == 16 && in_array($courses[$j]['id'],array(46,47,49,50,53,55,56,57))):?>
												<span style="color: #ff0000"><?= $courses[$j]['price']; ?> руб.</span>
												<span class="old-price">2000 руб.</span>
											<?php else:?>
												<?= $courses[$j]['price']; ?> руб.
											<?php endif;?>
											</td>
											<?php $num++;?>
										</tr>
									<? endif; ?>
								<? endfor; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				<?php endif;?>
			<?php endfor;?>
				</div>
				<!--
				<div class="btn-toolbar">
					<div class="btn-group">
						<a href="<?= base_url('price_list.pdf'); ?>" class="btn btn-info"><i class="icon-th-list icon-white"></i> Каталог курсов с ценами</a>
					</div>
				</div>
				-->
			</div>

		</div>
		<hr>
	<?php $this->load->view('users_interface/footer');?>
	</div>
	<?php $this->load->view('users_interface/scripts');?>
	<script type="text/javascript">
	$(document).ready(function(){
		var hash = location.hash.split('#')[1];
		if(hash != undefined){
			$(".accordion-body").removeClass('in');
			$("#"+hash+"_accordion").addClass('in');
		}
	});
	</script>
</body>
</html>
