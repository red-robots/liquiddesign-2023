<br class="clearfix" />
<div id="footerz">

   
<?php wp_reset_query(); // have to reset the query to query if is front page or not.?>
    
<div class="footertalk">
  <div class="">architecture • interior design • planning • project management</div>
  <div class="foot-menu"><?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '' ) ); ?></div>
</div><!-- #footertalk -->


<div class="clearfix"></div>
    

 
</div><!-- #footer -->

<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js?v=20120423234912"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?v=20120423234909"></script>






<?php wp_footer(); ?>


  <script type="text/javascript">
    jQuery(document).ready(function($) {
 


      // $('.openPanel').click( function() {
      //   console.log('this works');
      //   $('.panel').addClass('open');
      // });



});
  </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43274455-1', 'liquiddesign.net');
  ga('send', 'pageview');

</script>


</body>
</html>