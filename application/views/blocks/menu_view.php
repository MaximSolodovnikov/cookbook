<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Книга рецептов</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar"> 
                <li <?php if($pages_info['title_url'] == 'recipes') echo "class = 'active'";?>>
                        <a href="<?=base_url();?>" accesskey="">Рецепты</a>
                </li>
                <li <?php if($pages_info['title_url'] == 'ingredients') echo "class = 'active'";?>>
                        <a href="<?=base_url();?>index.php/pages/ingredients"  accesskey="">Ингредиенты</a>
                </li>
            </ul>
        </div>