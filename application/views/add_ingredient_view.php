        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2 class="sub-header">Добавление ингредиента</h2>
            <form method="POST" action="">
                    <label>Название:</label><div class="error"><?= form_error('name'); ?></div>
                    <input class="form-control" type="text" name="name" value="<?= set_value('name'); ?>"><br /><br />
                    <input type="submit" class="btn btn-info" name="add" value="Сохранить ингредиент">
            </form>
        </div>
    </div>
</div>