<<<<<<< HEAD
   <?php include_once 'header.php';
    
    $search = !empty($_GET['search']) ? $_GET['search'] : '';

    ?>

=======
<?php
include_once 'header.php';

$search = !empty($_GET['q']) ? $_GET['q'] : '';

$count_results = 0;
$search_results = array();

if (!empty($search)) {
    $query = $db->prepare('SELECT * FROM products WHERE name LIKE :search OR description LIKE :search');
    $query->bindValue('search', '%'.$search.'%', PDO::PARAM_STR);
    $query->execute();
    $search_results = $query->fetchAll();
    $count_results = $query->rowCount();
}

?>
>>>>>>> dac3df1668e72fa28db142677cb31d923055eaac

        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">Search</h1>

                <form class="search form-inline" method="GET">
                    <div class="form-group">
                        <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Keywords" value="">
                    </div>

                    <div class="form-group">
                        <select id="category" name="category" class="form-control">
                            <option value="">Category</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        0 € <input id="price" name="price" type="text" value="" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[0,100]"/> 100 €
                    </div>

                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="picture" name="picture" value="1"> Picture
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                    </div>
                </form>
<<<<<<< HEAD
    <?php
    if (!empty($search)) {

        $query = $db->prepare('SELECT * FROM product WHERE name LIKE :search OR description');
        $query->bindValue('search', '%'.$search.'%');
        $query->execute();
        $search_results = $query->fetchAll();
        $count_results = $query->rowCount();
   } ?>
=======
>>>>>>> dac3df1668e72fa28db142677cb31d923055eaac

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
<<<<<<< HEAD
                <h1 class="page-header"></h1>
=======
                <h1 class="page-header"><?= $count_results ?> search results</h1>
>>>>>>> dac3df1668e72fa28db142677cb31d923055eaac
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="pull-right">
                    <form class="form-inline" method="GET">
                        <div class="form-group">
                            <label for="sort">Sort by</label>
                            <select id="sort" name="sort" class="form-control">
                                <option value="name">Name</option>
                                <option value="price">Price</option>
                                <option value="rating">Rating</option>
                                <option value="reviews">Reviews</option>
                            </select>
                            <select id="direction" name="direction" class="form-control">
                                <option value="ASC">Ascending</option>
                                <option value="DESC">Descending</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                </div>

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-lg-12">

<<<<<<< HEAD
                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
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

                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
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

                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
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

                <div class="product col-lg-3 col-md-4 col-xs-6 thumb">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
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
=======
                <?php
                foreach($search_results as $product) {
                    echo displayProduct($product, 'product col-lg-3 col-md-4 col-xs-6 thumb');
                }
                ?>
>>>>>>> dac3df1668e72fa28db142677cb31d923055eaac

            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

<<<<<<< HEAD
    </div><!-- /.container -->

   <?php include_once 'footer.php' ?>
=======
<?php include_once 'footer.php' ?>
>>>>>>> dac3df1668e72fa28db142677cb31d923055eaac
