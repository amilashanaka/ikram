<script type='text/javascript' src='{{asset("Home/js/jquery.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Home/js/countto.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Home/js/jquery.isotope.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Home/js/royal_preloader.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Home/js/slick.min.js")}}'></script>
<script type='text/javascript' src='{{asset("Home/js/scripts.js")}}'></script>
<script type='text/javascript' src='{{asset("Home/js/header-footer.js")}}'></script>

<script type="text/javascript" src="{{asset("Home/revolution/js/jquery.themepunch.tools.min.js?rev=5.0")}}"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0")}}"></script>
<!-- RS5.0 Extensions Files -->
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.video.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.actions.min.j")}}s"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.migration.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Home/revolution/js/extensions/revolution.extension.parallax.min.js")}}"></script>



<script>
    jQuery(document).ready(function () {
        jQuery("#revolution-slider").revolution({
            sliderType: "standard",
            delay: 7500,
            navigation: {
                arrows: { enable: true }
            },
            spinner: "off",
            gridwidth: 1170,
            gridheight: 700,
            disableProgressBar: "on",
            responsiveLevels:[1920,1229,991,480],gridwidth:[1170,970,750,450],gridheight:[700,700,700,700]
        });
    });


    function openForm() {

        document.getElementById('loginForm').style.display='block'
    }

    var modal = document.getElementById('loginForm');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
