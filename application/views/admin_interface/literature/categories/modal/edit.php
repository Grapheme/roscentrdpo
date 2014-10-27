<?=form_open('admin-panel/references/literatures/category/update',array('class'=>'form-horizontal')); ?>
	<input type="hidden" id="idLiteratureCategory" value="" name="id" />
	<div id="editLiteratureCategory" class="modal hide">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h3>Редактирование категории литературы</h3>
		</div>
		<div class="modal-body">
			<fieldset>
				<div class="control-group">
					<label for="login" class="control-label">Название: </label>
					<div class="controls">
						<input type="text" id="eTitleLiteratureCategory" class="input-xlarge einput" name="title" value="">
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