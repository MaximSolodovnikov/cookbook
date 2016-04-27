        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2 class="sub-header">Добавление рецепта</h2>
                <form method="POST" action="">
                    <label>Название:</label><div class="error"><?= form_error('title'); ?></div>
                    <input class="form-control" type="text" name="title" value="<?= set_value('title'); ?>"><br /><br />
                    <label>Описание:</label><div class="error"><?= form_error('description'); ?></div>
                    <textarea class="form-control" rows="3" name="description"><?= set_value('description'); ?></textarea><br /><br />
                    <hr>
                    <label>Ингредиенты:</label><div class="error"></div>
                    <input class="form-control" type="text" name="" value="">
                    <label>Количество:</label><div class="error"></div>
                    <input class="form-control" type="text" name="" value=""><br /><br />
                    <input type="submit" class="btn btn-info" name="add" value="Сохранить рецепт">
                </form>
            </div>
        </div>
    </div>
</div>