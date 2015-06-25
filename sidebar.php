<?php $rand_products = $db->query('SELECT * FROM products ORDER BY rating DESC LIMIT 2')->fetchAll(); ?>

<div class="row">

            <div class="col-md-3">

                <p class="lead">Categories</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                    <a href="#" class="list-group-item">Category 4</a>
                    <a href="#" class="list-group-item">Category 5</a>
                </div>

                <p class="lead">Featured products</p>
                                   
                                    <?php foreach ($rand_products as $key => $product) { ?>

                <div class="product">

                    <div class="thumbnail">
                        <img src="img/product/product3.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><?= $product['price'] ?></h4>
                            <h4><a href="product.php?id=<?= $product['id'] ?>"><?= $product['name'] ?></a>
                            </h4>
                            <p><?= $product['description'] ?></p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </p>
                        </div>
                        <div class="btns clearfix">
                            <a class="btn btn-info pull-left" href="product.php?id=<?= $product['id'] ?>"><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->
                                    <?php }  ?>



            </div><!-- /.col-md-3 -->
            <div class="col-md-9">