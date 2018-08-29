/**
* jquery.imgpreload 1.6.2 <https://github.com/farinspace/jquery.imgpreload>
* Copyright 2009-2014 Dimas Begunoff <http://farinspace.com>
* License MIT <http://opensource.org/licenses/MIT>
*/
"undefined"!=typeof jQuery&&!function(a){"use strict";a.imgpreload=function(b,c){c=a.extend({},a.fn.imgpreload.defaults,c instanceof Function?{all:c}:c),"string"==typeof b&&(b=[b]);var d=[];a.each(b,function(e,f){var g=new Image,h=f,i=g;"string"!=typeof f&&(h=a(f).attr("src")||a(f).css("background-image").replace(/^url\((?:"|')?(.*)(?:'|")?\)$/gm,"$1"),i=f),a(g).bind("load error",function(e){d.push(i),a.data(i,"loaded","error"==e.type?!1:!0),c.each instanceof Function&&c.each.call(i,d.slice(0)),d.length>=b.length&&c.all instanceof Function&&c.all.call(d),a(this).unbind("load error")}),g.src=h})},a.fn.imgpreload=function(b){return a.imgpreload(this,b),this},a.fn.imgpreload.defaults={each:null,all:null}}(jQuery);
var imgNum = 0;
var images = [];

            function preLoadImg() {
                //第一种方式：通过dom方法获取页面中的所有img，包括<img>标签和css中的background-image
                //get all imgs those tag is <img>
                var imgs = document.images;
                console.log(imgs);
                for (var i = 0; i < imgs.length; i++) {
                    images.push(imgs[i].src);
                }
                //get all images in style
                // var cssImages = getallBgimages();
                // for (var j = 0; j < cssImages.length; j++) {
                //     images.push(cssImages[j]);
                // }
                $.imgpreload(images, {
                    each: function () {
                        /*this will be called after each image loaded*/
                        var status = $(this).data('loaded') ? 'success' : 'error';
                        if (status == "success") {
                            var v = (parseFloat(++imgNum) / images.length).toFixed(2);
                            $("#percentShow").html(Math.round(v * 100) + "<sup>%</sup>");
                        }
                    },
                    all: function () {
                        /*this will be called after all images loaded*/
                        $("#percentShow ").html("100<sup>%</sup>");

                        $("#percentShow").fadeOut(1000);
                        // $(".slider").slick();
                        // $(".slick-slide img").css("height","263px");
                        // $(".slick-slide img").css("width","263px");
                        $('.owl-carousel').owlCarousel({
                            items:1,
                            autoplay:true,
                            loop: true
                        });
                        $("#main .box").hide();
                        $("#intro").fadeIn();
                        $("#intro .box").fadeIn();
                        console.log("test");
                    }
                });
            }
            preLoadImg();