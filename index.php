<!DOCTYPE html>
<html lang="en">

<?php
$page = 'index';
include 'header.php';

$bigSliderPhoto = ["https://upload.wikimedia.org/wikipedia/commons/1/15/Cat_August_2010-4.jpg", "https://cdn.britannica.com/16/234216-050-C66F8665/beagle-hound-dog.jpg", "https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77702058448.jpg"];
$buttons = ['prev', 'next'];
$productCategoryList = [
    ["Earpods1", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
    ["Earpods2", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
    ["Earpods3", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
    ["Earpods4", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
    ["Earpods5", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
    ["Earpods6", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
    ["Earpods7", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
    ["Earpods8", "https://images.unsplash.com/photo-1605464315542-bda3e2f4e605?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"],
];

$sliderList = [
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro1",
        "price" => "1200$",
    ],
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro2",
        "price" => "12200$",
    ],
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro3",
        "price" => "12300$",
    ],
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro4",
        "price" => "12400$",
    ],
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro5",
        "price" => "12500$",
    ],
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro6",
        "price" => "12600$",
    ],
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro7",
        "price" => "12700$",
    ],
    [
        "image" => "https://www.cnet.com/a/img/resize/55db7f6ca0339706e5b5979f107957dc5b5b6b54/hub/2019/11/20/30249379-ef0c-4bbd-a441-05a465623b81/apple-iphone-11-iphone-11-pro-promo.jpg?auto=webp&fit=crop&height=1200&width=1200",
        "category" => "Mobile",
        "name" => "Iphone 11 pro8",
        "price" => "12800$",
    ],
]

?>




<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid row rev">
            <div class='col-md-2'>
                <img src="data:image/png;base64,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" class="logo-brand" />
            </div>
            <div class='col-md-6'>
                <form class="d-flex">
                    <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success " type="submit">Search</button>
                </form>
            </div>
            <div class='col-md-2 '>
                <a href="login.html"><button class="btn btn-outline-success logRegFullButton" type="submit">Login/Register</button></a>
            </div>
        </div>
    </nav>

    <section id="slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">


                <!-- for looping slider -->
                <?php
                for ($i = 0; $i < count($bigSliderPhoto); $i++) :
                ?>

                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>" <?php if ($i == 0) : ?> class="active" aria-current="true" <?Php endif; ?> aria-label=<?php "Slide " . $i ?>></button>
                <?php endfor; ?>

            </div>
            <div class="carousel-inner">

                <!-- for looping images -->
                <?php

                for ($a = 0; $a < count($bigSliderPhoto); $a++) :
                ?>
                    <div class="carousel-item <?php if ($a == 0) {
                                                    echo 'active';
                                                } ?>">
                        <img class="slide-img" src="<?php echo $bigSliderPhoto[$a]; ?>" alt="..." />
                    </div>

                <?php endfor; ?>

            </div>
            <?php


            foreach ($buttons as $button) :
            ?>
                <button class="carousel-control-<?php echo $button; ?>" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="<?php echo $button; ?>">
                    <span class="carousel-control-<?php echo $button; ?>-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"><?php echo ucwords($button); ?></span>
                </button>
            <?php
            endforeach;
            ?>
        </div>
    </section>

    <section id="slides">
        <div class="container">
            <h1 class="text-center" style="font-weight: 500; padding: 50px;">Product Categories</h1>
            <div class="row">

                <!-- for product category  -->
                <?php
                for ($i = 0; $i < count($productCategoryList); $i++) :
                ?>
                    <div class="col-md-3 col-6 mb-2">
                        <div class="imgtext">
                            <img src="<?php echo $productCategoryList[$i][1]; ?>" class="img-fluid img-size">
                            <div class="text1">
                                <a href=""><span> <?php echo $productCategoryList[$i][0]; ?> </span></a>
                            </div>
                        </div>
                    </div>
                <?php
                endfor;
                ?>
            </div>
        </div>
    </section>

    <!-- item slider start-->
    <section class="i-slider">
        <!-- </div> -->
        <div id="glider-1" class="glider-contain">
            <div class="slider-bttn row align-items-center">
                <h3 class="col">Item Slider</h3>
                <div class="slider-bttn col i-head">
                    <!-- for slider buttons -->
                    <?php
                    foreach ($buttons as $button) :
                    ?>
                        <button aria-label="<?php echo ucwords($button); ?>" class="glider-<?php echo $button; ?>"><span></span></button>
                    <?php
                    endforeach;
                    ?>

                </div>

            </div>
            <div class="glider">
                <!-- box -->
                <?php
                foreach ($sliderList as $sList) :
                ?>

                    <div class="i-box">
                        <!-- image-contain -->
                        <div class="i-image-container">
                            <div class="i-img">
                                <a href="">
                                    <img src="<?php echo $sList['image']; ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Item Text -->
                        <div class="i-box-text">
                            <!-- catagory -->
                            <div class="product-caregory">
                                <span>
                                    <?php echo $sList['category']; ?></span>
                            </div>
                            <!-- Title -->
                            <a href="" class="item-title">
                                <?php echo $sList['name']; ?>
                            </a>
                            <!-- price -->
                            <div class="price-buy">
                                <span class="i-price"><?php echo $sList['price']; ?></span>
                                <a href="" class="i-buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <div id="glider-2" class="glider-contain">
            <div class="slider-bttn row align-items-center">
                <h3 class="col">Item Slider</h3>
                <div class="slider-bttn col i-head">
                    <!-- for slider buttons -->
                    <?php
                    foreach ($buttons as $button) :
                    ?>
                        <button aria-label="<?php echo ucwords($button); ?>" class="glider-<?php echo $button; ?>"><span></span></button>
                    <?php
                    endforeach;
                    ?>

                </div>

            </div>
            <div class="glider">
                <!-- box -->
                <?php
                foreach ($sliderList as $sList) :
                ?>

                    <div class="i-box">
                        <!-- image-contain -->
                        <div class="i-image-container">
                            <div class="i-img">
                                <a href="">
                                    <img src="<?php echo $sList['image']; ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Item Text -->
                        <div class="i-box-text">
                            <!-- catagory -->
                            <div class="product-caregory">
                                <span>
                                    <?php echo $sList['category']; ?></span>
                            </div>
                            <!-- Title -->
                            <a href="" class="item-title">
                                <?php echo $sList['name']; ?>
                            </a>
                            <!-- price -->
                            <div class="price-buy">
                                <span class="i-price"><?php echo $sList['price']; ?></span>
                                <a href="" class="i-buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </section>
    <!-- item slider end -->

    <!-- footer section starts here-->
    <?php include 'footer.php' ?>

    <!-- footer section ends here -->
    <script src="./glider files/glider.min.js"></script>
    <script src="./glider files/gliders.js"></script>
</body>

</html>