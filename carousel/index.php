<!doctype html>
<html>
<head>
<title>Carrousel Demo</title>

    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/desktop.css">
</head>
<body>

<div class="wrapper">

<div class="owl-carousel owl-theme">
    <div class="item"><img src="img/ow11.jpg" /></div>
    <div class="item"><img src="img/ow12.jpg" /></div>
    <div class="item"><img src="img/ow13.jpg" /></div>
    <div class="item"><img src="img/ow14.jpg" /></div>
    <div class="item"><img src="img/ow15.jpg" /></div>
    <div class="item"><img src="img/ow16.jpg" /></div>
    <div class="item"><img src="img/ow17.jpg" /></div>
    <div class="item"><img src="img/ow18.jpg" /></div>

</div>


</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>


<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
	
})


</script>
</body>
</html>


