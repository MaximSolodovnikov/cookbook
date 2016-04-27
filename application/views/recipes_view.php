        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h2 class="sub-header">Мои рецепты 
                <a class="my_btn" href="<?= base_url() ;?>index.php/pages/add_recipes/add_recipe">Добавить рецепт</a>
            </h2>
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                          <tr>
                              <th>Рецепт</th>
                              <th>Описание</th>
                              <th>Действие</th>
                          </tr>
                    </thead>
                    <tbody>

                      <?php foreach($recipes as $item): ?>
                          <tr>
                              <td><a href="<?= base_url(); ?>index.php/pages/view/<?= $item['title_url']; ?>"><?= $item['title']; ?></a></td>
                              <td><?= $item['description']; ?></td>
                              <td> x </td>
                          </tr>
                      <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>