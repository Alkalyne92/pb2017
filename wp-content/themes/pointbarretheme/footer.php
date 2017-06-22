


    <div id="footer-sidebar" class="secondary">
		<div id="footer-sidebar1">
			<?php
				if(is_active_sidebar('footer-sidebar-1'))
				{
					dynamic_sidebar('footer-sidebar-1');
				}
			?>
		</div>
		<div id="footer-sidebar2">
			<?php
				if(is_active_sidebar('footer-sidebar-2'))
				{
					dynamic_sidebar('footer-sidebar-2');
				}
			?>
		</div>
		<div id="footer-sidebar3">
			<?php
				if(is_active_sidebar('footer-sidebar-3'))
				{
				dynamic_sidebar('footer-sidebar-3');
				}
			?>
		</div>



</div> <!-- /.rotulus -->

</div> <!-- /.container -->


		
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="wp-content/themes/pointbarretheme/js/fittext.js"></script>
<script src="https://unpkg.com/flubber@0.3.0"></script>
<script src="//cdn.jsdelivr.net/velocity/1.5/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
