<!DOCTYPE html>
<html lang="en">
<?php include("./assets/head.php") ?>

<body>

    <div class="container">

        <div class="navbar container">

            <a class="title" href="#tanitim">
                KuzeyChef
            </a>


            <nav class="kategoriler">
                <a class="kategori" href="#tanitim">Tanıtım</a>
                <a class="kategori" href="#about">Hakkımızda</a>
                <a class="kategori" href="#menu">Menüler</a>
                <a class="kategori" href="#contact">İletişim</a>
            </nav>

            <div class="elementler">


                <a class="element" id="search-Btn" href="arama" onclick="event.preventDefault()">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>


                <a class="element" style="cursor: pointer;" data-bs-toggle="offcanvas" data-bs-target="#sepet">
                    <i class=" fa-solid fa-cart-shopping"></i>
                    <span class="badge cart-count">1</span>
                </a>

                <div class="dropdown">
                    <a class="element link right" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-bars"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user"></i> Hesabım
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="#">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Giriş Yap
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa-solid fa-user-plus"></i>
                            Kayıt Ol
                        </a>
                    </div>
                </div>
            </div>

            <div class="search-form">
                <input type="text" class="search-input" id="search-box" placeholder="Ara...">
                <i class="fa-regular fa-magnifying-glass"></i>
            </div>


        </div>

    </div>
    <?php //tanıtım  
    ?>
    <section class="tanitim" id="tanitim">
        <div class="background"></div>
        <div class="tanitim-overlay">
            <div class="content">
                <h3>AKLI DURDURACAK LEZZET</h3>
                <p>Kuzey Şef Steakhouse, lezzetin ve şıklığın buluştuğu eşsiz bir steakhouse deneyimi sunuyor. Uzman şeflerin hazırladığı özel tariflerle enfes etlerin tadını çıkarın. Sizleri zarif bir ortamda unutulmaz bir lezzet yolculuğuna davet ediyoruz."</p>
                <a href="#menu" class="btn">Hemen Sipariş Ver</a>
            </div>
        </div>
    </section>


    <?php //about 
    ?>

    <section class="about" id="about">
        <div class="wor">
            <div class="image">
                <img src="./images/et.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kuzey Şef Steakhouse'un deneyim <br> ve kültürü nasıl öne çıkıyor?</h3>
                <P>
                    Zarif ve sofistike bir ortamda ‘etin en saf halini’ <br> tatmak isteyenlerin tercihi ‘ Kuzey Şef Steakhouse’ <br> Dünyanın farklı noktalarında hizmet veren <br> Kuzey Şef Steakhouse, sahip olduğu dokusu ile misafirlerine <br> gerçek bir steakhouse kültürü deneyimleme imkanı sunuyor...
                </P>
                <a href="#" class="btn1">DETAY</a>
            </div>
        </div>
    </section>

    <div class="menu_ana">
        <section class="menu" id="menu">
            <div class="parents">
                Menü
            </div>
            <div class="kids">
                Et Çeşitleri
            </div>
            <div class="container">
                <?php include("menu-headers/header_etler.php") ?>
            </div>

        </section>
    </div>


    <div class="offcanvas offcanvas-end" style="width: 60vw;" tabindex="-1" id="sepet">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Sepetim</h5>
            <a type="button" data-bs-dismiss="offcanvas">
                <i class="fa-regular fa-xmark-large"></i>
            </a>
        </div>
        <div class="border"></div>
        <div class="offcanvas-body">
            <div class="sepet-collider">


                <?php
                for ($i = 0; $i < 10; $i++) {
                ?>
                    <div class="sepetim-container">
                        <div class="products">
                            <img src="./images/carditem1.jpg" alt="et bonfile">
                            <div class="products-name">
                                Et Bonfile
                            </div>
                            <div class="aciklama">
                                İlikli Kemik yatağında dana bonfile
                            </div>
                            <a><i class="fa-solid fa-xmark"></i></a>
                            <div class="price">
                                <strong>559.99₺</strong>
                            </div>
                            <div class="kactane">
                                <p>Kaç Adet:</p>
                                <input type="text" value="1" class="item-count-input">
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>


                <div class="line"></div>




            </div>
        </div>
    </div>
    <?php include("./assets/js.php") ?>
</body>

</html>