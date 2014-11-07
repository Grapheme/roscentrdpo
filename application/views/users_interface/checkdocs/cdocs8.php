<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<?php $this->load->view('users_interface/header');?>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="h1-submenu">Учебные программы</h1>
<?php
    $this->load->model(array('coursesmodel','trendsmodel'));
    require_once('application/libraries/Plural_words.php');
    $plural_words = new Plural_words();
    $trends_list = $this->trendsmodel->read_view_records();
    if ($courses_list = $this->coursesmodel->read_view_records()):
        $user_interface = new Users_interface();
        $courses_list = $user_interface->getCoursesList($courses_list);
    endif;
    $courses = $trends = array();
    foreach($trends_list as $trend):
        $trends[$trend['id']]['title'] = $trend['title'];
        $trends[$trend['id']]['note'] = $trend['note'];
    endforeach;
    foreach($courses_list as $course):
        $courses[$course['trend']][] = $course;
    endforeach;
?>
				<div class="clear"> </div>
        <?php foreach($trends as $trend_id => $trend): ?>
            <?php if(isset($courses[$trend_id]) && !empty($courses[$trend_id])):?>
				<p>
					<strong><?= $trend['title']; ?> (<?=count($courses[$trend_id]);?> <?= $plural_words->pluralCourses(count($courses[$trend_id])) ?>)</strong><br>
                    <?= $trend['note']; ?>
				</p>
                <ul>
                <?php foreach ($courses[$trend_id] as $course): ?>
                    <li>
                        <?= $course['code'] ?>
                        <?php if (!empty($course['programm_scan'])): ?>
                            <a target="_blank" href="<?=base_url($course['programm_scan']);?>" class=""><?= $course['title']; ?></a>
                        <?php else: ?>
                            <?= $course['title']; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif;?>
        <?php endforeach;?>
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
