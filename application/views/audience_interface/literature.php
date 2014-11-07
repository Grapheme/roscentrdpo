<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('audience_interface/head');?>
<body>
<?php $this->load->view('audience_interface/header');?>
<div class="container">
    <div class="row">
        <div class="span9">
            <ul class="breadcrumb">
                <li class="active">
                    <?=anchor(uri_string(),'Электронная библиотека');?>
                </li>
            </ul>
            <div>
                <?php $this->load->view('alert_messages/alert-error');?>
                <?php $this->load->view('alert_messages/alert-success');?>
            </div>
        <?php if(count($literature)):?>
            <div class="accordion" id="accordion2">
            <?php foreach($literature as $category_id => $category):?>
                <?php if(count($category['documents'])):?>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?=$category_id;?>_accordion">
                            <?=$category['title'];?> <span class="small">(документов: <?=count($category['documents']);?>)</span>
                        </a>
                    </div>
                    <div id="<?=$category_id;?>_accordion" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="centerized">№</th>
                                        <th class="span8 centerized">Название</th>
                                        <th class="span3 centerized">Размер</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($category['documents'] as $index => $document):?>
                                    <tr>
                                        <td><?=$index+1?></td>
                                        <td><a href="<?=base_url($document['file_path'])?>" target="_blank"><?=$document['title'];?></a></td>
                                        <td>
                                    <?php
                                        $size = round($document['file_size']/1048576,2);
                                        if ($size < 0.01):
                                            echo round($document['file_size']/1024,2).' Кбайт';
                                        else:
                                            echo $size.' Мбайт';
                                        endif;
                                    ?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endif;?>
            <?php endforeach;?>
            </div>
        <?php endif; ?>
        </div>
        <?php $this->load->view('users_interface/rightbaraud');?>
    </div>
</div>
<?php $this->load->view('audience_interface/scripts');?>
</body>
</html>
