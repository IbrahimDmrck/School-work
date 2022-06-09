<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnaSayfa | carFix</title>
    <link rel="stylesheet" href="css/style.css">
    <script  src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
  

</head>
<body>
    <section id="menu" >
        <div id="logo" ><h1 id="carfix" >carfix</h1></div>
        <nav>
            <a href="#anasayafa" ><i class="fas fa-home ikon"  ></i> AnaSayfa</a>
            <a href="#Hakkımızda"><i class="fas fa-info ikon"></i>  Hakkımızda</a>
            <a href="Eğitimler" ><i class="fas fa-graduation-cap ikon" ></i>hizmetler</a>
            <a href="Ekip" > <i class="fas fa-user-friends ikon" ></i> Ekip</a>
            <a href="İletişim" ><i class="fas fa-map-pin " ></i>İletişim</a>
        </nav>
    </section>
    <section id="anasayfa">
        <div id="black">
            
        </div>
        <div id="icerik" >
            <h2>carFix</h2>
            <hr width=300  align=left>
            <p>güvenin ve kalitenin değişilmez adresi! <br>
                Uzman  ve tecrübeli kadromuzla aracınız emin ellerde.
            </p>
       
        </div>
    </section>
    <section id="hakkimizda" >
        <h3>Hakkımızda</h3>
        <div class="container" >
            <div id="sol">
                <h5  id="h5sol">Merak etmeyin aracınız aracımızdır...</h5>
            </div>
            <div id="sag">
                <span>2016</span>
                <p id="psag">'dan hizmet vermekte olduğumuz bu sektörde ilk günden ihtibaren tek hedefimiz siz değerli müşterileriizin saygısını kazanmak olmuştur <br>
                
                </p>
            </div>
            <img src="fotograflar/anasayfa.jpeg" alt="" class="img-fluid mt100"  id="foto2" > 
            <p id="pson">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsam quos velit, adipisci soluta eos numquam a, molestias fuga assumenda quisquam corporis atque voluptatibus dolor tempora vitae unde laborum libero!</p>
        </div>
    </section>
    <section id="egitimler" >
            <div class="container">
                <h3>Hizmetlerimiz</h3>
                <div>
                    <div class="card">
                        <img src="fotograflar/hizmetler4.jpg" alt="" class="img-fluid" >
                        <h5 class="baslikcard" >Motor bakım-onarım</h5>
                        <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint sed quod voluptates, fugit aspernatur illum incidunt molestiae distinctio ipsa aut nemo, accusamus quisquam libero nostrum temporibus corrupti impedit magni dignissimos!</p>
                    </div>
                    <div class="card">
                        <img src="fotograflar/hizmetler2.jpeg" alt="" class="img-fluid" >
                        <h5 class="baslikcard" >Otomatik şanzıman</h5>
                        <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint sed quod voluptates, fugit aspernatur illum incidunt molestiae distinctio ipsa aut nemo, accusamus quisquam libero nostrum temporibus corrupti impedit magni dignissimos!</p>
                    </div>
                    <div class="card">
                        <img src="fotograflar/hizmetler3.jpg" alt="" class="img-fluid" >
                        <h5 class="baslikcard" >Yağ bakımı ve 10.000 bakımı</h5>
                        <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint sed quod voluptates, fugit aspernatur illum incidunt molestiae distinctio ipsa aut nemo, accusamus quisquam libero nostrum temporibus corrupti impedit magni dignissimos!</p>
                    </div>
                </div>
            </div>
    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">EKİP</h3>
            <div class="sutun-sol-sag" >
              <img src="fotograflar/ekip1.jpeg" alt="" class="img-fluid oval ">
              <h4 class="ekipisim" >Halit usta</h4> 
              <p class="ekipp" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde cum ut alias molestiae. </p>     
                <div class="ekip-ikon">
                    <a href="#"><i class="fab fa-facebook-f social " ></i></a>
                    <a href="#"><i class="fab fa-google-plus-g social" ></i></a>
                    <a href="#"><i class="fab fa-twitter social" ></i></a>
                </div>
            </div>
            <div class="sutun" >
                <img src="fotograflar/ekip2.jpeg" alt="" class="img-fluid oval ">
                <h4 class="ekipisim" >Rahmi usta</h4> 
                <p class="ekipp" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde cum ut alias molestiae. </p>     
                  <div class="ekip-ikon">
                      <a href="#"><i class="fab fa-facebook-f social " ></i></a>
                      <a href="#"><i class="fab fa-google-plus-g social" ></i></a>
                      <a href="#"><i class="fab fa-twitter social" ></i></a>
                  </div>
              </div> <div class="sutun-sol-sag" >
                <img src="fotograflar/ekip3.jpeg" alt="" class="img-fluid oval ">
                <h4 class="ekipisim" >Samet usta</h4> 
                <p class="ekipp" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde cum ut alias molestiae. </p>     
                  <div class="ekip-ikon">
                      <a href="#"><i class="fab fa-facebook-f social " ></i></a>
                      <a href="#"><i class="fab fa-google-plus-g social" ></i></a>
                      <a href="#"><i class="fab fa-twitter social" ></i></a>
                  </div>
              </div>
        </div>
    </section>

    <section  id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">Arıza tespit</h3>
            <form action="index.php"  method="POST" >
            <div id="iletisimopak" >
                <div id="formgroup">
                    <div id="solform" >
                        <input type="text" name="isim" placeholder="ad soyad" required class="form-control" >
                        <input type="text" name="tel" placeholder="telefon numrası" required  class="form-control" >
                    </div>
                    <div  id="sagform" >
                        <input type="email" name="mail" placeholder="email adresiniz" required class="form-control" >
                        <input type="text" name="konu" placeholder="konu başlığı girin" required  class="form-control" >  
                    </div>
                    <textarea name="mesaj" id="" cols="30"  placeholder="mesaj giriniz" rows="10" required class="form-control">                        
                    </textarea>
                    <input type="submit" value="Gönder" >
                </div>
                <div id="adres">
                    <h4 id="adresbaslik" >adres:</h4>
                    <p class="adresp">Mehmet Akif ersoy mah.</p>
                    <p class="adresp">akyıldız caddesi</p>
                    <p class="adresp">oğuz bey soka no:123</p>
                    <p class="adresp">0212 389 99 99 </p>
                    <p class="adresp">email:seyfi-kadir@gmail.com</p>

                </div>
            </div>
            </form>
            <footer>
                <div id="copyright">
                    2022| tüm hakları saklıdır
                </div>
                <div id="socialfooter" > 
                    <a href="#"><i class="fab fa-facebook-f social " ></i></a>
                      <a href="#"><i class="fab fa-google-plus-g social" ></i></a>
                      <a href="#"><i class="fab fa-twitter social" ></i></a> 
                </div>
                <a href="#menu"><i class="fas fa-angle-up"  id="up" ></i></a>
            </footer>
        </div>
    </section>


    

   
</body>
</html>

<?php
include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"],$_POST["mail"], $_POST["konu"],$_POST["mesaj"] ))
{
$adsoyad=$_POST["isim"];
$telefon=$_POST["tel"];
$email=$_POST["mail"];
$konu=$_POST["konu"];
$mesaj=$_POST["mesaj"];

$ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj)
 VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."' )";

if($baglan->query($ekle)===true)
{
    echo"<script>alert('mesajınız başarı ile gönderilmiştir.') </script> ";

}

else{
    echo" <script>alert('mesajınız gönderilirken bir hata oluştu.') </script> ";


}


}

?>
