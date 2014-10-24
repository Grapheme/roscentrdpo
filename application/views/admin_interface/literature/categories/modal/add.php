<?=form_open('admin-panel/references/literatures/category/store',array('class'=>'form-horizontal')); ?>
	<div id="addLiteratureCategory" class="modal hide">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h3>Добавление категории литературы</h3>
		</div>
		<div class="modal-body">
			<fieldset>
				<div class="control-group">
					<label for="title" class="control-label">Название: </label>
					<div class="controls">
						<input type="text" id="TitleLiteratureCategory" class="input-xlarge ainput" name="title">
						<span class="help-inline" style="display:none;">&nbsp;</span>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal">Отменить</button>
			<button class="btn btn-success" type="submit" id="sendStore" name="submit" value="send">Добавить</button>
		</div>
	</div>
<?= form_close(); ?>