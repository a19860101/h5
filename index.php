<?php
    require_once "admin/db.php";
    $sql = "SELECT * FROM `histogram` ORDER BY quantity DESC";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H5 test</title>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/assets/owl.theme.default.min.css">
    <script>
        // let m = document.getElementById("m");
            
        //     function togglePlay(){
        //         return m.paused ? m.play() : m.pause();
        //     };
            // let v = document.getElementById("video");
            // if(v.play()){
            //     m.pause();
            // }else{
            //     m.play();
            // }
    </script>
</head>
<body id="main">
    <div id="percentShow"></div>
    <audio id="m" class="m" autoplay loop><source src="music/Dog_and_Pony_Show.mp3"></audio>
    <script type="text/javascript">
        function audioAutoPlay(id){
            var audio = document.getElementById("m");
            audio.play();
            document.addEventListener("WeixinJSBridgeReady", function () {
                audio.play();
                }, false);
        }
        audioAutoPlay('myAudio');
    </script>
    <div class="container">
   
        <div id="intro" class="box">
            <a href="javascript:;" class="btn wand" data-target="next">
                <img src="images/wand.png" alt="">
            </a>
        </div>
        <div class="box" id="second">
            <div class="row">
                <div class="s1">
                    <div class="s2"><img src="images/front_a.png" alt=""></div>
                    <div class="s3"><img src="images/front_b.png" alt=""></div>
                </div>
                <a href="javascript:;" class="btn helpher s4" data-target="next">
                    <img src="images/next.png" alt="">
                </a>
            </div>
        </div>
        <div class="box" id="third">
            <div class="row">
                <div class="content">
                    <div><img src="images/cinder_Head.png" alt=""></div>
                    <div class="owl-carousel owl-theme" id="slider">
                        <div><img src="images/cinder_body1.png" alt=""></div>
                        <div><img src="images/cinder_body2.png" alt=""></div>
                        <div><img src="images/cinder_body3.png" alt=""></div>
                    </div>
                    <div><img src="images/cinder_foot.png" alt=""></div>
                    <div class="nextBtn rb">
                        <a href="javascript:;" class="btn btn-slider-light" data-target="next">
                            <img src="images/next-light.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box" id="fourth">
            <div class="row">
                <a href="javascript:;" class="btn helpher" data-target="next">
                    <img src="images/next.png" alt="">
                </a>
            </div>
        </div>
        <div class="box" id="fiveth">
            <div class="row">
                <div class="content">
                    <div><img src="images/snow_Head.png" alt=""></div>
                    <div class="owl-carousel owl-theme" id="slider1">
                        <div><img src="images/snow_body1.png" alt=""></div>
                        <div><img src="images/snow_body2.png" alt=""></div>
                        <div><img src="images/snow_body3.png" alt=""></div>
                    </div>
                    <div><img src="images/snow_foot.png" alt=""></div>
                    <div class="nextBtn rb">
                        <a href="javascript:;" class="btn btn-slider-dark" data-target="next">
                            <img src="images/next-dark.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box" id="sixth">
            <div class="row">
                <a href="javascript:;" class="btn helpher" data-target="next">
                    <img src="images/next.png" alt="">
                </a>
            </div>
        </div>
        <div class="box" id="seventh">
            <div class="row">
                <div class="content">
                    <div><img src="images/elsa_Head.png" alt=""></div>
                    <div class="owl-carousel" id="slider2">
                        <div><img src="images/elsa_body1.png" alt=""></div>
                        <div><img src="images/elsa_body2.png" alt=""></div>
                        <div><img src="images/elsa_body3.png" alt=""></div>
                    </div>
                    <div><img src="images/elsa_foot.png" alt=""></div>
                    <div class="nextBtn rb">
                        <a href="javascript:;" class="btn btn-slider-light" data-target="next">
                            <img src="images/next-light.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box" id="eighth">
            <div class="row">
                <a href="javascript:;" class="btn helpher" data-target="next">
                    <img src="images/next.png" alt="">
                </a>
            </div>
        </div>
        <div class="box" id="nineth">
            <div class="row">
                <div class="content">
                    <div><img src="images/ariel_Head.png" alt=""></div>
                    <div class="owl-carousel" id="slider3">
                        <div><img src="images/ariel_body1.png" alt=""></div>
                        <div><img src="images/ariel_body2.png" alt=""></div>
                        <div><img src="images/ariel_body3.png" alt=""></div>
                    </div>
                    <div><img src="images/ariel_foot.png" alt=""></div>
                    <div class="nextBtn rb">
                        <a href="javascript:;" class="btn btn-slider-dark" data-target="next">
                            <img src="images/next-dark.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box" id="video">
            <div class="control">
                <img src="images/music_off_b.png" class="voice" onclick="togglePlay()">
            </div>
            <div class="row">
                <div class="content">
                    <div class="v1"><img src="images/videoo.png" alt=""></div>
                    <div class="v2">
                        <video width="100%" height="auto" controls  preload="auto" poster="images/a.jpg" class="v">
                            <source src="video/a.mp4">
                        </video>
                    </div>
                    <div class="v3"><img src="images/videoA.png" alt=""></div>
                    <div class="v4">
                        <video width="100%" height="auto" controls  preload="auto" poster="images/b.jpg" class="v">
                            <source src="video/b.mp4">
                        </video>
                    </div>
                    <div class="v5"><img src="images/videoA.png" alt=""></div>
                    <div class="nextBtn v6" style="width:25px;">
                        <a href="javascript:;" class="btn" data-target="next">
                            <img src="images/next-dark.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box" id="info">
            <div class="control">
                <img src="images/music_off_b.png" class="voice" onclick="togglePlay()">     
            </div>
            <div class="row">
                <!-- <div class="content"> -->
                    <a href="https://mall.jd.com/index-1000017365.html"><img src="images/page_btn1.png" alt=""></a>
                    <a href="javascript:;" class="btn" data-target="#detail"><img src="images/page_btn2.png" alt=""></a>
                    <a href="javascript:;" class="btn" data-target="#location"><img src="images/page_btn3.png" alt=""></a>
                    <a href="javascript:;" class="btn" data-target="#histogram"><img src="images/page_btn4.png" alt=""></a>
                    <a href="javascript:;" class="btn" data-target="#share"><img src="images/page_btn5.png" alt=""></a>
                <!-- </div> -->
            </div>
        </div>
        <div id="detail" class="box">
            <div class="control">
                <a href="javascript:;" onclick="togglePlay()"><img src="images/music_on_b.png" id="voice"class="voice"></a>
                <a href="javascript:;" data-target="#info" class="btn"><img src="images/back.png" alt=""></a>
            </div>
            <div class="row">
            </div>
        </div>
        <div id="location" class="box">
             <div class="control">
                <img src="images/music_off_b.png" class="voice" onclick="togglePlay()">    
                <a href="javascript:;" data-target="#info" class="btn"><img src="images/back.png" alt=""></a>
            </div>
            <div class="row">
                <div class="content">
                    <div class="l1">
                        <h3>查询门店</h3>
                        <p>请选择您所在的位置</p>
                    </div>
                    <div class="l2">
                        <form name="tripleplay" action="">
                            <select name='List1' onchange="fillSelect(this.value,this.form['List2'])">
                                    <option selected>請選擇</option>
                                </select>
                                &nbsp;
                                <select name='List2' onchange="fillSelect(this.value,this.form['List3'])">
                                        <option selected>請選擇</option>
                                    </select>
                                    &nbsp;
                                    
                                    <select name='List3' onchange="getValue(this.value, this.form['List2'].value, 
                                this.form['List1'].value)" style="display:none">
                            <option selected>請選擇</option>
                        </select>
                        </form>
                    </div>
                    <div class="l3"id="output">
                    </div>
                </div>
                </div>
            </div>
            <div id="histogram" class="box">
                <div class="control">
                    <img src="images/music_off_b.png" class="voice" onclick="togglePlay()">
                    <a href="javascript:;" data-target="#info" class="btn"><img src="images/back.png" width="30"></a>
                </div>
                <div class="row">
                    <div class="content">
                        <div class="h1">

                        </div>
                        <div class="h2">
                                <div class="title">
                                    <h3>销售排行</h3>
                                </div>
                                <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                    <div class="his-row">
                                        <div class="city"><?php echo $row["city"]; ?></div>
                                        <div class="his" style="width:<?php echo $row["quantity"]/2; ?>%"></div>
                                        <div class="quantity"><i><?php echo $row["quantity"]; ?></i></div>
                                    </div>
                                 <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="share" class="box">
                <div class="row">
                    <img src="images/share.png" alt="">
                </div>
            </div>
    </div>
    <script src="media.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="preloadImg.js"></script>
    <script src="slick/slick.js"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="location.js"></script>
    <script>

        $(function(){
            
            $("#intro").click(function(){
                $(this).fadeOut();
                $("#second").fadeIn();

                $(".s2").delay(2000).fadeIn(1000);
                $(".s3").delay(4000).fadeIn(1000);
                $(".s1").delay(6000).fadeOut(1000);
                $(".s4").delay(7000).fadeIn(1000);
            })
            $(".s2,.s3").hide();
            $(".wand").click(function(){
                // $(".s1").delay(800).fadeIn()
                $(".s2").delay(2000).fadeIn(1000);
                $(".s3").delay(4000).fadeIn(1000);
                $(".s1").delay(6000).fadeOut(1000);
                $(".s4").delay(7000).fadeIn(1000);
            })         
            $(".helpher").hide();
            $(".btn").click(function(){
                console.log("eee");
                let box = $(this).parents(".box");
                let _target = $(this).data("target");
                // box.fadeOut(300);
                switch(_target){
                    case "next":
                        box.fadeOut(300);   
                        box.next().fadeIn(1500);
                        $(".helpher").fadeIn(1200);
                        break;
                    case "prev":
                        box.fadeOut(300);
                        box.prev().fadeIn(1500);
                        break;
                    case "#share":
                        $("#info").show();
                        $(_target).fadeIn(800);
                        break;
                    default:
                         box.fadeOut(300);
                        $(_target).fadeIn(1500);
                }
            })
            $("#share").click(function(){
                $(this).fadeOut(300);
            })
        })
    </script>
</body>
</html>