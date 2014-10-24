<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin_interface/head');?>
<body>
<?php $this->load->view('admin_interface/header');?>
<div class="container">
    <div class="row">
        <div class="span9">
            <div>
                <ul class="breadcrumb">
                    <li class="active">
                        <?=anchor(uri_string(),'Категории литературы');?>
                    </li>
                </ul>
                <?php $this->load->view('alert_messages/alert-error');?>
                <?php $this->load->view('alert_messages/alert-success');?>
                <table class="table table-striped">
                    <thead>
                    <th>&nbsp;</th>
                    <th>Название</th>
                    <th>Документы</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    <?php foreach($categories as $category_id => $category):?>
                        <tr>
                            <td><a href="#editLiteratureCategory" class="editLiteratureCategory" data-toggle="modal" title="Редактировать" data-category="<?=$category_id;?>"><i class="icon-pencil"></i></a></td>
                            <td><h5><span data-category="<?=$category_id;?>"><?=$category['title'];?></span></h5></td>
                            <td><a href="<?=site_url('admin-panel/references/literatures/'.$category_id.'/documents');?>"><?=count($category['documents']);?> шт.</a></td>
                            <td><a class="close deleteLiteratureCategory" data-toggle="modal" href="#deleteLiteratureCategory" data-category="<?=$category_id;?>">&times;</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <p><a class="btn btn-info" data-toggle="modal" href="#addLiteratureCategory"><i class="icon-plus icon-white"></i> Добавить категорию</a></p>
                <?php $this->load->view('admin_interface/literature/categories/modal/add');?>
                <?php $this->load->view('admin_interface/literature/categories/modal/edit');?>
                <?php $this->load->view('admin_interface/literature/categories/modal/delete');?>
            </div>
        </div>
        <?php $this->load->view('admin_interface/rightbarmsg');?>
    </div>
</div>
<?php $this->load->view('admin_interface/scripts');?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#sendStore").click(function(event){
            var err = false;
            $(".control-group").removeClass('error');
            $(".help-inline").hide();
            $(".ainput").each(function(i,element){
                if($(this).val()==''){
                    $(this).parents(".control-group").addClass('error');
                    $(this).siblings(".help-inline").html("Поле не может быть пустым").show();
                    err = true;
                }
            });
            if(err){event.preventDefault();}
        });
        $("#saveUpdate").click(function(event){
            var err = false;
            $(".control-group").removeClass('error');
            $(".help-inline").hide();
            $(".einput").each(function(i,element){
                if($(this).val()==''){
                    $(this).parents(".control-group").addClass('error');
                    $(this).siblings(".help-inline").html("Поле не может быть пустым").show();
                    err = true;
                }
            });
            if(err){event.preventDefault();}
        });
        $(".editLiteratureCategory").click(function(){
            var categoryID = $(this).data('category');
            var title = $("span[data-category = "+categoryID+"]").html();
            $("#idLiteratureCategory").val(categoryID);
            $("#eTitleLiteratureCategory").val(title);
        });
        $(".deleteLiteratureCategory").click(function(){
            var href = '<?=site_url('admin-panel/references/literatures/category/delete')?>/';
            $("#LiteratureCategory").attr('href',href+$(this).data('category'));
        });
        $("#addLiteratureCategory").on("hidden",function(){$("#msgalert").remove();$(".control-group").removeClass('error');$(".help-inline").hide();$(".input-xlarge").val('');});
        $("#editLiteratureCategory").on("hidden",function(){$("#msgalert").remove();$(".control-group").removeClass('error');$(".help-inline").hide();});
    });
</script>
</body>
</html>
