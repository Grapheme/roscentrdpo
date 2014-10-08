<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Учебные программы</h1>
				<div class="clear"> </div>
				<p>
					<strong>Подготовка проектной документации (15 курсов)</strong><br>     
					Согласно  Приказу Министерства регионального развития РФ  от 30.12.2009 г № 624  
				</p>

                <?php
                $this->load->model('coursesmodel');
                if ($courses = $this->coursesmodel->read_view_records()):
                    $user_interface = new Users_interface();
                    $courses = $user_interface->getCoursesList($courses);
                endif;
                ?>
				<ul>
                <?php foreach ($courses as $course): ?>
                    <li>
                        <?= $course['code'] ?>
                        <?php if ($course['curriculum_exist'] !== FALSE): ?>
                            <a target="_blank" href="<?= site_url('catalog/courses/curriculum?id=' . $course['curriculum_exist']); ?>"
                               class="">
                                <?= $course['title']; ?>
                            </a>
                        <?php else: ?>
                            <?= $course['title']; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
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
