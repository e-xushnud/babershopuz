<? include 'db.php' ?>
<!doctype html>
<html lang="en">

<head>
    <? include 'css.php' ?>
</head>

<body>
    <!--::header part start::-->
    <? include 'header.php' ?>
    <!-- Header part end-->
    <?
        if(isset($_POST['ok'])){
            $ism = filter($_POST['ism']);
            $email = filter($_POST['email']);
            $ish = filter($_POST['xodim']);
            $tel = $_POST['tel'];
            $s = $_POST['sana'];
            $v = $_POST['vaqt'];
            $sur = filter($_POST['surov']);
            $ins = mysql_query("INSERT INTO surovlar (ism,telefon,email,xodim,sana,vaqt,surov) VALUES ('$ism','$tel','$email','$ish','$s','$v','$sur')");
            if($ins == true){
                print("<script>window.alert('Ma\'lumot bazaga muvaffaqqiyatli yozildi!!!')</script>");
                print("<script>window.location='index.php'</script>");
            } else {
                print("<script>window.alert('Ma\'lumot bazaga yozilmadi!!!)</script>");
            }
        }
    ?>
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>O'zingizni uydagidek his eting</h5>
                            <h1>Yaxshi ko'rinish kafolatlangan</h1>
                            <div class="banner_btn">
                               <a href="#" class="btn_2">Biz bilan bog'lanish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- Service part start-->
    <section class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Bizning xizmatlar</h2>
                        <p>Assalomu alaykum biz sizga eng yaxshi ko'rinishlar va stillarni taklif etamiz.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?
                    $surov = mysql_query("select * from sartarosh");
                    while($mal = mysql_fetch_assoc($surov)){
                        print('
                                <div class="col-md-6 col-lg-4">
                                    <div class="single_service_part">
                                        <img src="img/service/'.$mal[rasm].'" alt="">
                                        <div class="single_service_text">
                                            <h4>'.$mal[nom].'</h4>
                                            <p>'.$mal[batafsil].'</p>
                                            <a href="#" class="btn_3">Batafsil</a>
                                        </div>
                                    </div>
                                </div> 
                            ');
                    }
                ?>
                
            </div>
        </div>
    </section>
    <!-- Service part end-->

    <!-- our_offer part start-->
    <section class="our_offer">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <? 
                        $s = mysql_query("select * from turmaklar");
                        while($m = mysql_fetch_assoc($s)){
                            print('
                                    <div class="single_offer_part">
                                        <div class="single_offer">
                                            <img src="img/'.$m[rasm].'" alt="offer_img_1">
                                            <div class="hover_text">
                                                <img src="img/icon/cutter.svg" alt="#">
                                                <h2>Eng zo\'r uslublar</h2>
                                                <p>Doim biz bilan bo\'ling!!!</p>
                                                <a href="#" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                                            </div>
                                        </div>
                                    </div>        
                                ');
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- our_offer part end-->

    <!--::review_part start::-->
    <section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="client_review_part owl-carousel">
                        <?
                            $sur = mysql_query("select * from izohlar");
                            while($m = mysql_fetch_assoc($sur)){
                                print('
                                        <div class="client_review_single">
                                            <img src="img/Quote.png" class="Quote" alt="quote">
                                            <div class="client_review_text">
                                                <p>Bundan tashqari ishlab chiqarilgan. Go\'yo osmondan olov yuzi yig\'ilgan deb ayt
                                                    hayot uchun xudo er nurining o\'zi yorug\' bo\'lishi mumkin, chunki u muborak aylandi
                                                    shuningdek berishdan qilingan
                                                    go\'sht deyishi mumkin. Osmondan bu chiroqlar yuzida ajoyib joy bor edi.</p>
                                            </div>
                                            <div class="client_img">
                                                <img src="img/client/'.$m[rasm].'" alt="">
                                            </div>
                                        </div>
                                    ');
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->

    <!--::chefs_part start::-->
    <section class="artist_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Xodimlarimiz bilan tanishing</h2>
                        <p>Xayrli tong yig'inish xudo odamni to'plamaydi va u erda oltinchi hukmronlik hukmron bo'lib, u harakat qilmaganidan keyin bo'linadi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <? 
                    $q = mysql_query("select * from ustalar");
                    while($m = mysql_fetch_assoc($q)){
                        print('
                                <div class="col-sm-6 col-lg-4">
                                    <div class="single_blog_item">
                                        <div class="single_blog_img">
                                            <img src="img/artist/'.$m[rasm].'" alt="artist">
                                        </div>
                                        <div class="single_text">
                                            <div class="single_blog_text text-center">
                                                <h3>'.$m[ism].'</h3>
                                                <p>'.$m[kasbi].'</p>
                                                <div class="social_icon">
                                                    <a href="#"> <i class="ti-facebook"></i> </a>
                                                    <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                                    <a href="#"> <i class="ti-instagram"></i> </a>
                                                    <a href="#"> <i class="ti-skype"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ');
                    }
                 ?>
                
            </div>
        </div>
    </section>
    <!--::chefs_part end::-->

    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form class="form-group" action="index.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="ism" class="form-control" id="inputEmail4" placeholder="Ism *">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="inputPassword4"
                                        placeholder="Email *">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="xodim" id="Select">
                                        <option value="1" selected>Xodimni tanlang *</option>
                                        <option value="Abdulla aka">Abdulla aka</option>
                                        <option value="Murod aka">Murod aka</option>
                                        <option value="Asliddin aka">Asliddin aka</option>
                                        <option value="Erkin aka">Erkin aka</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="tel" class="form-control" id="pnone" placeholder="Telefon raqam *">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group date">
                                        <input id="datepicker" name="sana" type="text" class="form-control" placeholder="Sana *" />
                                    </div>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" name="vaqt" id="Select2">
                                        <option value="" selected>Vaqt *</option>
                                        <option value="8 AM : 10AM<">8 AM : 10AM</option>
                                        <option value="10 AM : 12PM">10 AM : 12PM</option>
                                        <option value="12PM : 2PM">12PM : 2PM</option>
                                        <option value="2PM : 4PM">2PM : 4PM</option>
                                        <option value="4PM : 6PM">4PM : 6PM</option>
                                        <option value="6PM : 8PM">6PM : 8PM</option>
                                        <option value="4PM : 10PM">4PM : 10PM</option>
                                        <option value="10PM : 12PM">10PM : 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="surov" id="Textarea" rows="4"
                                        placeholder="So'rovingiz *"></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <button class="btn btn-success" name="ok" style="color: #fff; cursor: pointer;">Yuborish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <!-- blog part start-->
    <section class="blog_part service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>So'nggi uslub yangiliklari</h2>
                        <p>Xayrli tong, yig'ilish xudo odamni to'plamaydi va u erda oltinchi hukmronlik hukmron bo'lib, u harakat qilmaganidan keyin bo'linadi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?
                    $s = mysql_query("select * from engsungi");
                    while($m = mysql_fetch_assoc($s)){
                        print('
                                <div class="col-md-6 col-lg-4">
                                    <div class="single_service_part">
                                        <img src="img/service/'.$m[rasm].'" alt="">
                                        <div class="single_service_text">
                                            <p>Mart 30, 2019</p>
                                            <h4> <a href="#">'.$m[nomi].'</a></h4>
                                            <p>'.$m[matn].'</p>
                                            <a href="#" class="btn_3">Batafsil</a>
                                        </div>
                                    </div>
                                </div>
                            ');
                    }
                ?>
                
            </div>
        </div>
    </section>
    <!-- blog_part part end-->

    <!-- footer part start-->
    <? include 'footer.php' ?>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <? include 'js.php' ?>
</body>

</html>