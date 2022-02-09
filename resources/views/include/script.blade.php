<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script src="{{ asset('asset/javascript/owl.js') }}"></script>
<script src="{{ asset('asset/javascript/preview-image.js') }}"></script>
<script src="{{ asset('asset/javascript/preview-image.js') }}"></script>
<script src="{{ asset('asset/javascript/text-animated.js') }}"></script>
<script>
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });

   function movetoProduct() {
        location.replace('/product.html')
    }
   function movetoAbout() {
        location.replace('/about.html')
    }
    var delay = 1000;

    $(window).on('load', function() {
        setTimeout(function(){
            $("#loading").hide();
            $(".loader").hide();
        },delay);
    });

    $(document).ready(function(){
      $(window).scroll(function(){
      	var scroll = $(window).scrollTop();
    	  if (scroll > 300) {
    	    $(".navbar a").css("color" , "black");
    	  }
      })
    })
</script>