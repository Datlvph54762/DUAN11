<?php
require './views/layout/header.php';
require './views/layout/navbar.php';


?>
<!-- navbar -->

<!-- main content -->
<!-- <div class="banner">
    <img src="./assets/images/bannner.jpg" alt="" style="width: 1530px; height: 600px;">
</div> -->

<div class="banner position-relative">
    <img src="./assets/images/bannner.jpg" alt="" style="width: 100%; height: 600px; object-fit: cover;">
    <div class="banner-text position-absolute text-white" style="top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
        <h1 class="display-4 font-weight-bold">Chào mừng đến với Shop Ăn Vặt!</h1>
        <p class="lead">Khám phá ngay những món ăn ngon nhất!</p>
        <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>" class="btn btn-danger btn-lg">Xem sản phẩm</a>
    </div>
</div>
<h2 class="section-title text-center mt-4">Sản phẩm Hot</h2>
<div class="gioi-thieu">
    <div class="product-item hot">
        <div>
            <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>"><img src="./assets/images/Kho-ga-xe-la-chanh.jpg" alt="" style="width: 251px; height: 201px;"></a>
            <!-- Thông tin sản phẩm -->
            <div class="form-group col-md-6">
                <a class="title" href="">Khô gà</a>
            </div>
        </div>

        <div>
            <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>"><img src="./assets/images/kho-heo.jpg" alt="" style="width: 251px; height: 201px;"></a>
            <!-- Thông tin sản phẩm -->
            <div class="form-group col-md-6">
                <a class="title" href="">Khô heo</a>
            </div>
        </div>

        <div>
            <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>"><img src="./assets/images/kho-bo.jpg" alt="" style="width: 251px; height: 201px;"></a>
            <!-- Thông tin sản phẩm -->
            <div class="form-group col-md-6">
                <a class="title" href="">Khô bò</a>
            </div>
        </div>

        <div>
            <a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>"><img src="./assets/images/SNACK-OISHI-VI-BAP.jpg" alt="" style="width: 251px; height: 201px;"></a>
            <!-- Thông tin sản phẩm -->
            <div class="form-group col-md-6">
                <a class="title" href="">Mực rim</a>
            </div>
        </div>
    </div>

</div>
<div class="gioi-thieu">
    <div class="form-row ">
        <div class="form-group col-md-1"></div>
        <div class="form-group col-md-4 ">
            <img style="width: 440px; height:400px" src="./assets/images/changa.jpg" alt="">
        </div>
        <div class="form-group col-md-6">
            <ul>
                <li class="title"><a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>">CHÂN GÀ XẢ TẮC</a></li>
                <li><i>Chân gà sả tắc là một món ăn vặt phổ biến và được yêu thích tại Việt Nam. Với hương vị độc đáo, sự kết hợp giữa chân gà giòn rụm và hương thơm của sả, tắc, món ăn này đã trở thành một phần không thể thiếu trong ẩm thực đường phố.</i></li>
            </ul>
        </div>
    </div>
</div>

<div class="gioi-thieu">
    <div class="form-row ">
        <div class="form-group col-md-1"></div>
        <div class="form-group col-md-4 ">
            <img style="width: 440px; height:400px" src="./assets/images/changa.jpg" alt="">
        </div>
        <div class="form-group col-md-6">
            <ul>
                <li class="title"><a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>">CHÂN GÀ XẢ TẮC</a></li>
                <li><i>Chân gà sả tắc là một món ăn vặt phổ biến và được yêu thích tại Việt Nam. Với hương vị độc đáo, sự kết hợp giữa chân gà giòn rụm và hương thơm của sả, tắc, món ăn này đã trở thành một phần không thể thiếu trong ẩm thực đường phố.</i></li>
            </ul>
        </div>
    </div>
</div>
<div class="gioi-thieu">
    <div class="form-row ">
        <div class="form-group col-md-1"></div>
        <div class="form-group col-md-4 ">
            <img style="width: 440px; height:400px" src="./assets/images/changa.jpg" alt="">
        </div>
        <div class="form-group col-md-6">
            <ul>
                <li class="title"><a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>">CHÂN GÀ XẢ TẮC</a></li>
                <li><i>Chân gà sả tắc là một món ăn vặt phổ biến và được yêu thích tại Việt Nam. Với hương vị độc đáo, sự kết hợp giữa chân gà giòn rụm và hương thơm của sả, tắc, món ăn này đã trở thành một phần không thể thiếu trong ẩm thực đường phố.</i></li>
            </ul>
        </div>
    </div>
</div>
<div class="gioi-thieu">
    <div class="form-row ">
        <div class="form-group col-md-1"></div>
        <div class="form-group col-md-4 ">
            <img style="width: 440px; height:400px" src="./assets/images/changa.jpg" alt="">
        </div>
        <div class="form-group col-md-6">
            <ul>
                <li class="title"><a href="<?= BASE_URL_CLIENT . '?act=danh-sach-san-pham' ?>">CHÂN GÀ XẢ TẮC</a></li>
                <li><i>Chân gà sả tắc là một món ăn vặt phổ biến và được yêu thích tại Việt Nam. Với hương vị độc đáo, sự kết hợp giữa chân gà giòn rụm và hương thơm của sả, tắc, món ăn này đã trở thành một phần không thể thiếu trong ẩm thực đường phố.</i></li>
            </ul>
        </div>
    </div>
</div>
    <!-- end content -->


    <!-- footer -->
    <?php require './views/layout/footer.php'; ?>