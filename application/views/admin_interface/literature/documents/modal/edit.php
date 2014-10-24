<?=form_open_multipart('admin-panel/references/literatures/'.$this->uri->segment(4).'/document/update',array('class'=>'form-horizontal')); ?>
    <input type="hidden" value="<?=$this->uri->segment(4);?>" name="literature_category_id" />
    <input type="hidden" id="idLiteratureDocument" value="" name="id" />
    <div id="editLiteratureDocument" class="modal hide">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Редактирование документа литературы</h3>
        </div>
        <div class="modal-body">
            <fieldset>
                <div class="control-group">
                    <label for="login" class="control-label">Название: </label>
                    <div class="controls">
                        <input type="text" id="eTitleLiteratureDocument" class="input-xlarge einput" name="title" value="">
                        <span class="help-inline" style="display:none;">&nbsp;</span>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="control-group">
                    <label for="DocumentFile" class="control-label">Документ</label>
                    <div class="controls">
                        <input type="file" class="input-file" name="document" size="30">
                        <span class="help-inline" style="display:none;">&nbsp;</span>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal">Отменить</button>
            <button class="btn btn-success" type="submit" id="saveUpdate" name="esubmit" value="esend">Сохранить</button>
        </div>
    </div>
<?= form_close(); ?>