        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h2 class="sub-header">Ингредиенты 
                <a class="my_btn" href="<?= base_url() ;?>index.php/pages/view/add_ingredients">Добавить ингредиенты</a>
            </h2>
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                          <tr>
                              <th>Ингредиенты</th>
                              <th>Действие</th>
                          </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ingredients as $item): ?>
                      
                          <tr>
                              <td><a href=""><?= $item['name']; ?></a></td>
                              <td> x </td>
                          </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>