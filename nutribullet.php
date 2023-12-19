<!DOCTYPE html>
<html lang="en">

<head>

    <title>Nutribullet India | Frootle India Official</title>
    <?php include_once("header-css.php");?>
</head>

<body>
    <?php include_once("header.php");?>
    <style>
    .nutribullet-video-banner {
        background-image: url(images/Nutribullet/Video-Banner.jpg);
        background-repeat: no-repeat;
        background-position: left top;
        background-size: 100%
    }

    @media all and (max-width:1200px) {

        .nutribullet-video-banner {
            background-image: url(images/Nutribullet/Video-Banner.jpg);
            background-position: left top;
            width: 100%;
        }
    }

    @media all and (max-width:900px) {
        .nutribullet-video-banner {
            background-image: url(images/Nutribullet/Video-Banner.jpg);
            background-position: center top;
            width: 100%;
            background-size: cover;
        }
    }

    
   
    </style>
    <div class="text-center">
        <img src="images/Nutribullet/1.jpg" style="width: 100%;">
    </div>


    <div class="recipes-section pad-20" id="end-to-end-solution" style="margin-top: 40px;">
        <div class="product-sec2">
            <!-- <h2 class="text-uppercase font-weight-bold mb-3 text-center">COMPLETE END TO END SOLUTION</h2> -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-inner mb-3 mt-1">
                            <a href="#">
                                <img src="images/Nutribullet/2.1.jpg" alt="Coway India" />
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="product-inner mb-3 mt-1">
                            <a href="#">
                                <img src="images/Nutribullet/2.2.jpg" alt="Coway India" />
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="product-inner mb-3 mt-1">
                            <a href="#">
                                <img src="images/Nutribullet/2.3.jpg" alt="Coway India" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="care tineco-video-banner mb-3 mt-1 care_t">
        <div class='video-overlay'>
            <a href="javascript:Video_Play1('video-3.mp4')"> <img class="play-btn" src="images/video-btn.png"></a>
        </div>
    </div>

    <div class="mb-3 mt-1">
        <img src="images/Nutribullet/4.jpg" style="width: 100%;">
    </div>
    <div class="mb-3 mt-1">
        <img src="images/Nutribullet/5.jpg" style="width: 100%;">
    </div>

    

    <div class="recipes-section pad-20" id="end-to-end-solution" style="margin-top: 40px;">
        <div class="product-sec2">
            <h1 class="text-uppercase font-weight-bold mb-3 text-center product_main_title">Products</h1>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-inner">
                            <a href="#">
                                <img src="images/Nutribullet/Products/NutriBullet-Black.jpg" alt="NutriBullet Black" class="product_img" />
                            </a>
                        </div>
                        <div class="product_text mt-2">NutriBullet Black</div>
                       
                        <div class="text-center  mb-3 mt-3"><a href="" class="black_btn">Know More</a></div>
                    </div>

                    <div class="col-md-3">
                        <div class="product-inner">
                            <a href="#">
                            <img src="images/Nutribullet/Products/NutriBullet-Gold.jpg" alt="NutriBullet Gold" class="product_img" />
                                
                            </a>
                        </div>
                        <div class="product_text mt-2">NutriBullet Gold</div>
                        <div class="text-center  mb-3 mt-3"><a href="" class="black_btn">Know More</a></div>
                    </div>

                    <div class="col-md-3">
                        <div class="product-inner">
                            <a href="#">
                            <img src="images/Nutribullet/Products/NutriBullet-Slate.jpg" alt="NutriBullet Slate" class="product_img" />
                              
                            </a>
                        </div>
                        <div class="product_text mt-2">NutriBullet Slate</div>
                        <div class="text-center mb-3 mt-3"><a href="" class="black_btn">Know More</a></div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-inner">
                            <a href="#">
                            <img src="images/Nutribullet/Products/NutriBullet-Jade.jpg" alt="NutriBullet Jade" class="product_img" />
                              
                            </a>
                        </div>
                        <div class="product_text mt-2">NutriBullet Jade</div>
                        <div class="text-center mb-3 mt-3"><a href="" class="black_btn">Know More</a></div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="modal fade" id="youtube-video" role="dialog" style="z-index: 10000;">
        <div class="modal-dialog  new_dialog">
            <div class="">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-body">

                    <div class="video-shortcode">
                        <div class=video-container>
                            <div id="desktop-youtube-embed" class="youtube-embed"></div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="youtube-video1" role="dialog" style="z-index: 10000;">
        <div class="modal-dialog  new_dialog">
            <div class="">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-body">

                    <div class="video-shortcode">
                        <div class=video-container>
                            <div id="desktop-youtube-embed1" class="youtube-embed"></div>
                            <video controls autoplay="" class="myVideo" style="width:100%;" id="myVideo">
                                <source src="" type="video/mp4">
                            </video>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include_once("footer.php");?>
    <script async src="https://www.youtube.com/iframe_api"></script>
    <script>
    function Video_Play(id) {

        var desktopPlayer;
        desktopPlayer = new YT.Player('desktop-youtube-embed', {
            videoId: id, // YouTube Video ID
            width: 580, // Player width (in px)
            height: 316, // Player height (in px)
            playerVars: {
                autoplay: 1, // Auto-play the video on load
                controls: 1, // Show pause/play buttons in player
                showinfo: 0, // Hide the video title
                modestbranding: 0, // Hide the Youtube Logo
                loop: 0, // Run the video in a loop
                fs: 1, // Allow the full screen button
                cc_load_policy: 0, // Hide closed captions
                iv_load_policy: 3, // Hide the Video Annotations
                autohide: 1, // Hide video controls when playing
                rel: 0 // Turn off "more videos"
            },
            events: {
                onReady: function(e) {
                    // e.target.mute();
                }
            }
        });
        $('#youtube-video').modal('show');


    }

    $('#youtube-video').on('hidden.bs.modal', function() {
        // do something…
        $('#desktop-youtube-embed').empty();
        $("#youtube-video .modal-body").html(
            "<div class='video-shortcode'><div class='video-container'><div id='desktop-youtube-embed' class='youtube-embed'></div></div></div>"
            )
        //$('#Youtube_Video iframe').attr('src', '');
    });

    function Video_Play1(id) {
        $("#myVideo").attr('src', 'images/Nutribullet/' + id);
        $('#youtube-video1').modal('show');
    }

    $(document).ready(function() {

        $('#youtube-video1').on('hide.bs.modal', function(e) {
            // a poor man's stop video
            $("#myVideo").attr('src', '');
        })

    });
    </script>

</body>

</html>