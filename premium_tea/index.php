<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./main.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="./swiper.css">
    <script src="./swiper.js"></script>
    <title>PREMIUM TEAS</title>
</head>
<body>
    <header>
        <div class="title">
            <div>
                <h1>PREMIUM TEAS</h1>
                <h3>UNIQUE TEA EXPERIENCE 🇨🇦</h3>
            </div>
            <div>
                <box-icon type='logo' name='twitter'></box-icon>
                <box-icon name='instagram' type='logo'></box-icon>
                <box-icon name='facebook' type='logo'></box-icon>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="">BLACK TEA</a></li>
                <li><a href="">GREEN TEA</a></li>
                <li><a href="">HERBAL</a></li>
                <li><a href="">1LB BAGS</a></li>
                <li><a href="">DECAF</a></li>
                <li><a href="">COLLECTIONS</a></li>
                <li><a href="">FALL TEA</a></li>
                <li><a href="">GIFTS</a></li>
                <li><a href="">MORE</a></li>
                <li><a href="">SALE</a></li>
                <li><input type="text" id="search" placeholder="Search"> <box-icon name='search' color='#c2c2c2'></box-icon></li>
            </ul>
        </nav>
    </header>

    <div class="swiper carrousel">
        <div class="swiper-wrapper">
        <!-- div.slide${Slide $}*5 -->
        <div class="swiper-slide slide3" style="background-image: url('T3.jpg'); background-repeat:no-repeat; background-size:cover; background-position: center;"></div>
        <div class="swiper-slide slide1" style="background-image: url('T1.jpg'); background-repeat:no-repeat; background-size:cover; background-position: center;"></div>
        <div class="swiper-slide slide2" style="background-image: url('T2.webp'); background-repeat:no-repeat; background-size:cover; background-position: center;"></div>
        <div class="swiper-slide slide4" style="background-image: url('T4.jpeg'); background-repeat:no-repeat; background-size:cover;"></div>
            <div class="swiper-slide slide5" style="background-image: url('T5.jpg'); background-repeat:no-repeat; background-size:cover; background-position: center;"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <script src="./carousel.js"></script>
</body>
</html>
