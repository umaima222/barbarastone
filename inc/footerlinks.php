<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<!-- Jquery JS -->

<!-- slick slider -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>

<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
        // $('.for-the-img-slider').slick();
        $('.for-the-img-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true
        });


        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    })

    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    })
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });

    // product sub and add
    $(document).ready(function() {
        //  profile tabs hide and show
        $(".pro-edit-wrapper").hide();
        // edit profile show here
        $(".edit-profile-btn").click(function() {
            $(".pro-edit-wrapper").show();
            $(".pro-detail-wrapper").hide();
        });
        // edit profile show here
        // edit password show here
        $(".pro-edit-password-wrapper").hide();
        $(".change-password-btn").click(function() {
            $(".pro-detail-wrapper").hide();
            $(".pro-edit-password-wrapper").show();
        });
        // edit password show here
        // address show
        $(".pro-edit-address-wrapper").hide();
        $("button.change-address-btn").click(function() {
            $(".pro-edit-address-wrapper").show();
            $(".pro-detail-wrapper").hide();
        });
        // address show
        // edit profile to main
        $(".pro-edit-wrapper button.btn").click(function() {
            $(".pro-edit-wrapper").hide();
            $(".pro-detail-wrapper").show();
        });
        // edit profile to main
        // pass to main profile
        $(".pro-edit-password-wrapper button.btn").click(function() {
            $(".pro-edit-password-wrapper").hide();
            $(".pro-detail-wrapper").show();
        });
        // pass to main profile
        // address to main profile
        $(".edit-fields button.btn").click(function() {
            $(".pro-edit-address-wrapper").hide();
            $(".pro-detail-wrapper").show();
        });
        // address to main profile
    });
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        var y = document.getElementById('icon');
        var z = document.getElementsByClassName('banner-background');
        if (x.className === "header-start") {
            x.className += " responsive";


        } else {
            x.className = "header-start";
        }
        if (y.className === "fa fa-bars") {
            y.className = "fa fa-times";
        } else {
            y.className = "fa fa-bars";
        }

    }
</script>
<script>
    $(function() {
        $('.accordion-content').hide();

        $('.accordion').on('click', '.accordion-trigger', function(e) {
            e.preventDefault();

            $('.accordion-content:visible').slideUp(300);

            $(this)
                .next('.accordion-content')
                .not(':animated')
                .slideToggle(300);
        });
    });
</script>
<script>
        function ratingStar(star){
            star.click(function(){
                var stars = $('.ratingW').find('li')
                stars.removeClass('on');
                var thisIndex = $(this).parents('li').index();
                for(var i=0; i <= thisIndex; i++){
                    stars.eq(i).addClass('on');
                }
                putScoreNow(thisIndex+1);
            });
        }

        function putScoreNow(i){
            $('#ratingField').val(i);
            ratingToWord(i);
        }

        $(function(){
            if($('.ratingW').length > 0){
                ratingStar($('.ratingW li a'));
            }
        });

        function ratingToWord(rating)
        {
            if(rating == 1) {
                $("#ratingTxt").val('Bad');
            }

            if(rating == 2) {
                $("#ratingTxt").val('Poor');
            }

            if(rating == 3) {
                $("#ratingTxt").val('Fair');
            }

            if(rating == 4) {
                $("#ratingTxt").val('Good');
            }

            if(rating == 5) {
                $("#ratingTxt").val('Excellent');
            }
        }
    </script>