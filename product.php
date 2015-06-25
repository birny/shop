<?php include_once 'header.php';

if (!isset($_GET['id'])) {
    exit('Undefined param id');
}

$id = intval($_GET['id']);

$query = $db->prepare('SELECT * FROM products WHERE id = :id');
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
$product = $query->fetch();




 ?>


        <div class="row">

            <div class="col-md-3">

                <p class="lead">Categories</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>

                <p class="lead">Related products</p>
                <div class="product">
                    <div class="thumbnail">
                        <img src="img/product/product2.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">24.99 €</h4>
                            <h4><a href="#">First Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

                <div class="product">
                    <div class="thumbnail">
                        <img src="img/product/product3.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">64.99 €</h4>
                            <h4><a href="#">Second Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

                <div class="product">
                    <div class="thumbnail">
                        <img src="img/product/product1.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right">74.99 €</h4>
                            <h4><a href="#">Third Product</a>
                            </h4>
                            <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

            </div><!-- /.col-md-3 -->

            <div class="col-md-9">

                <div class="product-full">
                    <div class="thumbnail">
                        <img class="img-responsive" src="img/product/product4.jpg" alt="">
                        <div class="caption-full">
                            <h4 class="pull-right"><?= $product['price'] ?></h4>
                            <h4><a href="#"><?= $product['name'] ?></a>
                            </h4>
                            <blockquote>
                                            <?= $product['description'] ?>                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br>
                            Product features :</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Ut enim ad minim veniam</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Sed do eiusmod tempor incididunt</li>
                                <li>Sunt in culpa qui officia deserunt</li>
                            </ul>
                            <p>See more product infos at <a target="_blank" href="#">http://www.brand.com/product/</a>.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">3 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                4.0 stars
                            </p>
                        </div>
                        <div class="btns text-center clearfix">
                            <a class="btn btn-success" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product-full -->

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-primary">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div><!-- /.row -->

                </div><!-- /.well -->

            </div><!-- /.col-md-9 -->

        </div><!-- /.row -->

    </div><!-- /.container -->

   <?php include 'footer.php' ?>
