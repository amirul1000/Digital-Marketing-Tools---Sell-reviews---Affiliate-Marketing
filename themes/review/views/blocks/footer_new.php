

    <?php echo Modules::run("blocks/footer_new");?>

    <!-- Stripe JavaScript library -->
    <?php
        if (segment('1') == 'checkout') {
    ?>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <?php } ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
      var base_href = "/";
    </script>
    <script type="text/javascript" src="<?php echo BASE; ?>themes/review/assets/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="<?php echo BASE; ?>themes/review/assets/js/plugins.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <script src="<?php echo BASE; ?>themes/review/assets/js/map-style.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>-->
    <script src="<?php echo BASE; ?>themes/review/assets/js/timer.js"></script>

    <script type="text/javascript" src="<?php echo BASE; ?>themes/review/assets/js/scripts.js"></script>

    <script src="<?php echo BASE; ?>themes/review/assets/js/custom.js"></script>
    <script src="<?php echo BASE; ?>themes/review/assets/js/animate.js"></script>
    <script src="<?php echo BASE; ?>themes/review/assets/js/buttonAnimate.js"></script>
    <!--<script src="<?php echo BASE; ?>themes/review/assets/js/checkOutForm.js"></script>-->
    
    <script>
      const serv = document.querySelector(".dropdownContainer");

      serv?.addEventListener("click", () => {
        console.log('Bro called');
        if (window.innerWidth > 1200) {
          document.querySelector(".dropdownMenu").classList.toggle("active");
        }
        if (window.innerWidth < 1200) {
          document.querySelector(".mobile-dropdown").classList.toggle("active");
        }
      });
      function closeContact(){
        document.querySelector('.close_form_btn').addEventListener('click',()=>{
          const contactForm = document.querySelector("#contact_popup_container");
          contactForm.classList.remove('active');
        })
      }
      function openContact(){
        const contactForm = document.querySelector("#contact_popup_container");
          contactForm.classList.add('active');
      }
      // Nav item active
      const navItems = document.querySelectorAll('.navitem');
      navItems.forEach((item)=>{
        item.addEventListener('click',()=>{
          navItems.forEach(item=>item.classList.remove('active'));
          item.classList.add('active');
        })
      })
    </script>
    
    <script>
      (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
          i[r] ||
          function () {
            (i[r].q = i[r].q || []).push(arguments);
          }),
          (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
      })(
        window,
        document,
        "script",
        "https://www.google-analytics.com/analytics.js",
        "ga"
      );

      ga("create", "UA-91006724-1", "auto");
      ga("send", "pageview");
    </script>
    <?php
        if (segment('1') != 'admin') {
    ?>
        <?php echo htmlspecialchars_decode(get_option('embed_javascript', ''), ENT_QUOTES); ?>
    <?php } ?>
  </body>
</html>