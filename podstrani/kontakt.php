<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Zelo pomembno!!!!!-->
    <link rel="stylesheet" href="../stil/kontakt.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"> <!--puščica gor-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--animacije-->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>S-grad</title>

</head>
<body>
    <script src="https://kit.fontawesome.com/22422329a3.js" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
    <section id="top">
            <header id="nav">
            <div id="logo">
                <a href="../index.html"><img src="../img/logobel.svg" alt="logo"></a>
            </div>
            <div class="nav-pages">
                <div class="nav-mobile"><a id="nav-toggle" href="#!">    <!--pazi na to!!-->
                    <span></span></a></div>
                    <div id="ozadje">
                <ul id="povezave">
                  <li><a href="../index.html"class="link ">Domov</a></li>
                  <li><a href="onas.html"class="link ">O nas</a></li>
                  <li><a href="tehnologija.html"class="link ">tehnologija</a></li>
                  <li><a href="galerija.html"class="link">Galerija</a></li>
                  <li><a href="izdelki.html"class="link ">Izdelki</a></li>           
                  <li><a href="kontakt.php"class="link selected">Kontakt</a></li>
                </ul>
            </div>
            </div>
            </header>
        </section> 

        <div class="bgimg1">
            <section id="main-box">
                <div class="main-container">
                    <h1 data-aos="fade-right"data-aos-duration="1000"data-aos-delay="150">Vstopi v stik</h1>
                     <p data-aos="fade-left"data-aos-duration="1000"data-aos-delay="450">"Ne gradimo samo hiš, ampak tudi sanje. Naši domovi so platno za vaše življenje, prostor, kjer lahko vaše sanje zaživijo."</p>
                </div>
            </section>
        </div>

        <div class="container">  
          <div class="contact-container">
            <div class="info-container">
                <div class="box" data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>NASLOV</h3>
                       <p id="naslov">Berčice 5, <br>8330 Metlika, <br>Slovenija</p>
                    </div>
                </div>
                    <div class="box"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>TELEFON</h3>
                            <ul>
                                <li><p>Leseni del:</p><a href="#">+386 41 825 307</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="box"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="text">
                                <h3>TELEFON</h3>
                                <ul>
                                    <li><p>Gradbeni del:</p><a href="#">+386 31 720 272</a></li>
                                </ul>
                            </div>
                            </div>
                   
                <div class="box"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="text">
                            <h3>EMAIL</h3>
                            <p id="mail"><a href="#">sgrad2024@gmail.com</a></p>
                        </div>
                </div>    
            </div>
            <div class="box-container">
                <form action="connect.php" method="post">
                    <h2></h2>
                    <div class="polje"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100"data-aos-delay="0">
                        <label for="fname"></label><br>
                        <input type="text" id="fname" name="fname" placeholder="Ime"required pattern="\S+.*" minlength="3"><div class="line"></div>
                    </div>
                    <div class="polje"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100"data-aos-delay="250">
                        <label for="lname"></label><br>
                        <input type="text" id="lname" name="lname" placeholder="Priimek"required pattern="\S+.*"minlength="3"><div class="line"></div>
                        
                    </div>
                    <div class="polje"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100"data-aos-delay="450">
                        <label for="kraj"></label><br>
                        <input type="text" id="kraj" name="kraj" placeholder="Kraj"><div class="line"></div>
                    </div>
                    <div class="polje"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100"data-aos-delay="650">
                        <label for="email"></label><br>
                        <input type="email" id="email" name="email" placeholder="E-mail"required pattern="\S+.*"><div class="line"></div>
                    </div>
                    <div style="display:none" class="polje"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100"data-aos-delay="650">
                        <label for="preveri"></label><br>
                        <input type="text" id="preveri" name="preveri" ><div class="line"></div>
                    </div>
                    <div class="polje"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100"data-aos-delay="650">
                        <label for="zadeva"></label><br>
                        <input type="text" id="zadeva" name="zadeva" placeholder="Zadeva"required><div class="line"></div>
                    </div>
                    <div class="polje"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="100"data-aos-delay="850">
                        <textarea name="sporocilo" id="sporocilo" cols="60" rows="6" placeholder="Sporočilo"required pattern="\S+.*"></textarea><div class="line line-t"></div>
                    </div>
                    <div class="gumb"data-aos="zoom-in"data-aos-duration="800"data-aos-offset="50"data-aos-delay="850">
                        <input type="submit" value="Pošlji">
                    </div>
                </form>
            </div>
        </div>
        </div>
</div>
    <!--------------------------------------NOGA----------------------------------------------------------->
<div class="container3">
    <div class="noga">
        <div class="box1">
          <div class="kontakt-noga">
          <h2>Podjetje</h2>
          <ul>
            <li><a href="../index.html"><p>S-GRAD d.o.o.</p></a></li>
            <li><a href="varstvo-osebnih.html"><p>Varstvo osebnih podatkov</p></a></li>
            <li><a href="splosni-pogoji.html"><p>Splošni pogoji</p></a></li>
            <li><a href="onas.html"><p>O nas</p></a></li>
            <li><a href="kontakt.php"><p>Kontakt</p></a></li>
           </ul>
          </div>
        </div>
        <div class="box2">
            <div id="logo-noga">
                <img src="../img/logobel.svg" alt="logo"><br>
            </div>
            <div id="socialna-omrezja">
                <a href="https://www.youtube.com/channel/UCdSlhh6HXzBkvX7LWV7mZDA"target="_blank"><img src="../img/social_network_logos/yt.svg" alt="YouTube"></a>
                <a href="#"><img src="../img/social_network_logos/inst.svg" alt="Instagram"></a>
                <a href="#"><img src="../img/social_network_logos/fb.svg" alt="Facebook"></a>
                
            </div>
        </div>
        <div class="box3">
            <div class="kontakt-noga">
                <h2>Kontakt</h2>
                <ul>
                    <li><p>S-GRAD d.o.o.</p></li>
                    <li><p>Križevska vas 21</p></li>
                    <li><p>8330 Metlika</p></li>
                    <li><p>T-Lesni del: +386 41 825 307</p></li>
                    <li><p>T-Gradbeni del: +386 31 720 272</p></li>
                    <li><p>M: info@sgrad.si</p></li>
                   </ul>
            </div>
        </div>
    </div>
    <footer>© 2024 S-grad, Vse pravice pridržane. </footer>
</div>  
<a href="#top" class="scrollLink">
    <span class="material-icons">arrow_upward</span>
  </a>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>


AOS.init({
      easing: 'ease-in-out-sine'
    });

    setInterval(addItem, 300);

    var itemsCounter = 1;
    var container = document.getElementById('aos-demo');

    function addItem () {
      if (itemsCounter > 42) return;
      var item = document.createElement('div');
      item.classList.add('aos-item');
      item.setAttribute('data-aos', 'fade-up');
     // item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
      container.appendChild(item);
      itemsCounter++;
    }
    //menu za telefon
    $('#nav-toggle').on('click', function() {
    this.classList.toggle('active');
    });
    
    $("#nav-toggle").click(function() {
        $("#povezave").toggle();
        });

</script>
</body>
</html>

