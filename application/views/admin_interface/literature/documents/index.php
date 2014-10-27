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
                        <?=anchor('admin-panel/references/literatures','Категории литературы');?>
                        ::
                        <?=anchor(uri_string(),'Документы');?>
                    </li>
                </ul>
                <?php $this->load->view('alert_messages/alert-error');?>
                <?php $this->load->view('alert_messages/alert-success');?>
                <table class="table table-striped">
                    <thead>
                    <th>&nbsp;</th>
                    <th>Название</th>
                    <th>Ссылка на файл</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    <?php foreach((array)$documents as $document):?>
                        <tr>
                            <td><a href="#editLiteratureDocument" class="editLiteratureDocument" data-toggle="modal" title="Редактировать" data-document="<?=$document['id'];?>"><i class="icon-pencil"></i></a></td>
                            <td><h5><span data-document="<?=$document['id'];?>"><?=$document['title'];?></span></h5></td>
                            <td><a href="<?=base_url($document['file_path']);?>" target="_blank">Просмотреть</td>
                            <td><a class="close deleteLiteratureDocument" data-toggle="modal" href="#deleteLiteratureDocument" data-document="<?=$document['id'];?>">&times;</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <p><a class="btn btn-info" data-toggle="modal" href="#addLiteratureDocument"><i class="icon-plus icon-white"></i> Добавить документ</a></p>
                <?php $this->load->view('admin_interface/literature/documents/modal/add');?>
                <?php $this->load->view('admin_interface/literature/documents/modal/edit');?>
                <?php $this->load->view('admin_interface/literature/documents/modal/delete');?>
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
        $(".editLiteratureDocument").click(function(){
            var documentID = $(this).data('document');
            var title = $("span[data-document = "+documentID+"]").html();
            $("#idLiteratureDocument").val(documentID);
            $("#eTitleLiteratureDocument").val(title);
        });
        $(".deleteLiteratureDocument").click(function(){
            var href = '<?=site_url('admin-panel/references/literatures/'.$this->uri->segment(4).'/document/delete')?>/';
            $("#LiteratureDocument").attr('href',href+$(this).data('document'));
        });
        $("#addLiteratureDocument").on("hidden",function(){$("#msgalert").remove();$(".control-group").removeClass('error');$(".help-inline").hide();$(".input-xlarge").val('');});
        $("#editLiteratureDocument").on("hidden",function(){$("#msgalert").remove();$(".control-group").removeClass('error');$(".help-inline").hide();});
    });
</script>
</body>
</html>
