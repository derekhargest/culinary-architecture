<footer class="site-footer">
	<div class="footer-content container">
		<h4>Come Say Hi</h4>
		<div class="footer-item">
			<p>P: <span>410-555-5555</span></p>
			<p>E: <span>Hi@<span>culinaryarchitecture<span>.com</span><span></span></p>
		</div>
		<div class="footer-item">
			<address><span>767 Washington Blvd.</span><br />
			<span>Baltimore MD 21230</span></address>
		</div>
		<div class="footer-item">
			<p>Store Hours <span>Tuesday - Saturday 10-7</span></p>
		</div>
		<div class="footer-item last">
			<p>Catering <span>Monday - Friday</span></p>
			<p>Breakfast &amp; Lunch</p>
		</div>
		<ul class="footer-social">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		</ul>
		<p><small>&copy; Culinary Architecture</small></p>
	</div>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#mobile-menu ul').slicknav({
			label: '',
			prependTo: '#mobile-menu-location',
			duration: '1000'
		});
	});
</script>

<script type="text/javascript">

(function(event) {
	var div2 = $(".circle-quote");
    var span2 = $(".circle-quote .quote-inner");

    span2.width(Math.sqrt(span2.width() * span2.height() ));
    span2.width(Math.sqrt(span2.width() * span2.height() ));

    div2.width(Math.sqrt(1.85) * span2.width());


    span2.css('width', span2.width() + 150 + 'px');

    div2.height(div2.width());
})();


</script>

<script type="text/javascript">

window.onresize = function(event) {
	var div3 = $(".circle-quote");
    var span3 = $(".circle-quote .quote-inner");

    span3.width(Math.sqrt(span3.width() * span3.height() ));
    span3.width(Math.sqrt(span3.width() * span3.height() ));

    div3.width(Math.sqrt(1.85) * span3.width());


    span3.css('width', span3.width() + 150 + 'px');

    div3.height(div3.width());
};


</script>

</body>
</html>
