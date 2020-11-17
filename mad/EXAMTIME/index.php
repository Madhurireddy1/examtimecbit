<?php
    include 'header.php';
?>
<!-- FlexSlider -->
<!--
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
-->
<!-- FlexSlider -->
<!--banner end here-->
<!--educate logos start here-->
<div class="educate">
	<div class="container">
		<div class="education-main">
			<ul class="ch-grid">
				 <div class="col-md-4 w3agile">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-1">
									<span class="glyphicon glyphicon-grain" aria-hidden="true"> </span>
					                <h5>Study Smarter, not Harder.</h5>
								</div>
								<div class="ch-info-back">
									<h3>SMARTER WAY</h3>
									<p>Study your course materials with free access to practice exams, flash cards, study guides, notes, and more.</p>
								</div>
							</div>
						</div>
					</li>
					</div>
					 <!-- <div class="col-md-4 w3agile">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2">
									<span class="glyphicon glyphicon-education" aria-hidden="true"> </span>
					                <h5>C++</h5>
								</div>
								<div class="ch-info-back">
									<h3>Free Study Resources.</h3>
									<p>Study your course materials with free access to practice exams, flash cards, study guides, notes, and more.</p>
								</div>
							</div>
						</div>
					</li>
					</div> -->
					<div class="col-md-4 w3agile">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2">
									<span class="glyphicon glyphicon-education" aria-hidden="true"> </span>
					                <h5>Free Study Resources.</h5>
								</div>
								<div class="ch-info-back">
									<h3>Free Study Resources.</h3>
									<p>Study your course materials with free access to practice exams, flash cards, study guides, notes, and more.</p>
								</div>
							</div>
						</div>
					</li>
					</div>
					 <div class="col-md-4 w3agile">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3">
									<span class="glyphicon glyphicon-hourglass" aria-hidden="true"> </span>
					                <h5>Organise Yourself.</h5>
								</div>
								<div class="ch-info-back">
									<h3>Organise Yourself.</h3>
									<p>Organise your classes, tasks and exams & never forget a lecture again.</p>
								</div>
							</div>
						</div>
					</li>
					</div>
					 
					<div class="clearfix"> </div>
			 </ul>
		 </div>
	</div>
</div>
<!--educate logos end here-->
<!--we do start here-->
<div class="we-do">
	<div class="container">
		<div class="we-do-main">
			   <h2>What We Do </h2>
			   <h4>Help you prepare better for the exams !</h4>
			   <p> This  portal provides students good, easily understandable experience while learning online.Students can self understand 
            and learn,website aims to provide a personalized learning experience, mainly built to provide information for students about their syllabus, previous year’s question papers,quiz/test bank,flashcards,course materials like pdf’s and all. </p>
			   <a href="about.php">Know More</a>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--we do end here-->
<!--pop-up-box-->
	  <script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--pop-up-box-->


<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>

<!--clients star here-->
<div class="we-do">
	<div class="container">
		<div class="we-do-main">
			   <h2 style="margin-top: 20px;">What you get</h2>
         <h4>Easy access to the syllabus and previous model papers</h4>
			   <p>Many graduation students will indulge themselves in different extra curricular activities throughout the semester which is also very important in overall growth of a student and they end up having not so clear idea about the examination syllabus and model papers.</p>
			   <h4>Library of course materials</h4>
			   <p>The database of study materials available not only prepares you, but saves time and energy otherwise spent on speculation. </p>
			   <h4>Practice tests </h4>
			   <p>You can Mail me during 20:00hrs to 21:00hrs where I would listen to your doubts and for further explanation, send you requisite media, may it be in the form of video or other possible media within 24hrs of query registered.</p>
			   <h4>Flashcards </h4>
			   <p>Finally this is helpful as a way of practicing for exams, especially in engineering courses .It offers an electronic flashcard support.</p>
         <a href="about.php">Know More</a>
      <div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="clients">
	<div class="container">
		<div class="clients-main">
			<div class="clients-top">
				<h3>Study anytime, anywhere </h3>
			</div>
		 <div class="slider-bann wow bounceInRight" data-wow-delay="0.3s">
	    <ul class="rslides" id="slider2">
	      <li>
	      	<div class="clients-text">
	      		<p>Because your planning is not always perfect, you need to be able to study whenever, wherever. Just practice your exam one last time on your tablet or phone while you're on the go.</p>
	      		<p>JOIN TODAY ! </p>
		        <a href="register.php"><button>GET STARTED FOR FREE</button></a>
	        </div>
	      </li>

	    </ul>
	    </div>
    </div>

	</div>
</div>
<!--clients end here-->
<?php
    include 'footer.php';
?>
