<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Jquery JS -->
<script>
    $(document).ready(function () {
        $(window).on('load', function(){
            $("#preloader").fadeOut(1000);
        });
    })
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
