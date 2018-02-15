
<?php   
error_reporting(0);
 ?>
<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
  integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
  crossorigin="anonymous">
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
   

  <style type="text/css">

  ul, li {margin: 0; padding: 0; list-style-type: none}
  ul#liste {padding: 20px;}
  #sayfalama a { color: #fff; background: #333; text-decoration: none;padding: 3px 7px;margin-right: 6px;}
 
  #sayfalama {padding: 0 20px 20px 20px;}
  #sayfalama a.aktif {background: red}
    

    #ortala {


        width: 250px


    }


  </style>


  <script type="text/javascript">
    
$(function(){

    // toplam li sayısı
    var toplamLi = $("ul#liste li").size();

// sayfa veri sayısı
var veriSayisi = 1;

// Sayfalamayı uygula
$("ul#liste li:gt(" + (veriSayisi - 1) + ")").hide();

// sayfa sayısı bulalım
var sayfaSayisi = (toplamLi / veriSayisi);

// sayıyı yuvarlayalım
// Sayfa linklerini ekleyelim
for (var i = 1; i <= sayfaSayisi; i++)
{
  $("#sayfalama").append('<a href="javascript:void(0)">' + i + '</a>');
}

// İlk sayfaya aktif classı ekle
$("#sayfalama a:first").addClass("aktif");

// Sayfalama içindeki a'lardan birine tıklandığında
$(document.body).on("click", "#sayfalama a", function(){
    // indis değerini al (1 fazlası şeklinde)
    var indis = $(this).index() + 1;
    // toplam gözüken veri sayısını bul
    var gt = veriSayisi * indis;
    // aktif class işlemleri
    $("#sayfalama a").removeClass("aktif");
    $(this).addClass("aktif");
    // listedeki tüm lileri gizle
    $("ul#liste li").hide();
    // for ile toplam gözüken veri sayısı - veriSayisi işlemi yap ve veriSayisi kadarını göster
    for (i = gt - veriSayisi; i < gt; i++)
    {
      $("ul#liste li:eq(" + i + ")").show();
    }
  });

});



  </script>
  <title>Hava Durumu</title>
</head>
<script type="text/javascript" src="js/main2.js" ></script>
<body background="img/kar-tanesi.jpg">

   
  
  <div id="ortala" align="center" class="container">
      <button id="belirlizaman" class="btn btn-primary">Belirli-Zaman</button></center>
       
  <form action="index.php" method="GET">
  <br>  
  <br>  <br><br><br><br><br><br><br><br><br>
    <h5>ŞEHİR GİRİNİZ</h5>    
    <input id="sehir" type="text" name="sehir"/><br>  <br>  
    <button style="text-align: left" type="submit" name="gonder"  class="btn btn-outline-success">Göster</button>
   
   
    <br>
    <br>
   
    <hr>  <br>
    
    </div>
     
    <div align=center>
  </form>

  <?php

  if(isset($_GET['sehir'])){
    function ara($bas, $son, $yazi)
    {
      @preg_match_all('/' . preg_quote($bas, '/') .
      '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
      return @$m[1];
    }
    $link = "http://www.havadurumux.net//".$_GET['sehir']."-hava-durumu/";
    $icerik = file_get_contents($link);
    $sehir = ara('<title>','|',$icerik);
    echo $sehir[0].'<br/>';
    $derece = ara('<span>','</span>',$icerik);
    echo 'Bugünki sıcaklık = '.$derece[0].'<br/> Yarınki sıcaklık = '.$derece[1];


    
    
    


  }
 



 

  ?>

  <ul id="liste">
              <b><li id="sayfa1"></li></b>
              <b><li id="sayfa2"></li></b>
               <b><li id="sayfa3"></li></b>
                <b><li id="sayfa4"></li></b>
                 <b><li id="sayfa5"></li></b>
                  <b><li id="sayfa6"></li></b>
                   <b><li id="sayfa7"></li></b>

          




            </ul>
           <center><div id="sayfalama"></div></center>
   <div id="belirli"></div>
    </div> 

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="http://e-mete.com/js/kdsnow.js"></script>
  <script src="https://www.koddostu.com/duzelt.js?no=111"></script>
  <script src="asset/js/animate.min.js"></script>
  <script src="asset/js/timer.js"></script>
  <script src="asset/js/star.js"></script>

</body>
</html>