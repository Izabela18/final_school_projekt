<?php
/**
 Template Name: Home
 */

get_header();
?>

	<div id="primary" class="content-area">
	<h2 class="header_info"> Welcome to ItFeelsGood - my wellbeing journey</h2>
		<main id="main" class="site-main page-main">	

			<svg class="hidden">

			<!-- All deco shapes -->
			<defs>
				<path id="deco1" d="M 161,54.69 C 230.4,4.986 303.7,8.661 414.4,92.19 465.7,130.9 432.3,211.4 460,279.5 481,331.2 449.7,430.4 381.1,427 287.1,422.3 172.4,503.8 99.27,444.6 21.03,381.1 10.32,258.3 55.25,145.6 73.73,99.3 129.3,77.36 161,54.69 Z" />
				<path id="deco2" d="M 119.8,69.41 C 213.5,18.01 367.2,-1.306 440.4,76.58 482.9,121.9 435.3,200.8 432.9,262.9 431.1,310.6 461.3,372.1 427.7,406 342.4,492 158.3,499.3 64.62,422.5 10.09,377.8 18.76,282.6 32.51,213.5 43.46,158.4 70.61,96.36 119.8,69.41 Z" />
				<path id="deco3" d="M 77.03,75.72 C 147.9,0.2308 309,13.37 387.6,80.44 471.8,152.4 517.2,325.6 442.9,407.5 350.2,509.8 43.77,516.2 29.67,378.8 20.48,289.3 80.25,270.4 87.78,212 93.61,166.8 45.85,108.9 77.03,75.72 Z" />
				<path id="deco4" d="M 38.35,160.1 C 74.92,86.34 178.1,44.04 260.1,51.51 348.2,59.54 441.6,126.9 473.5,209.4 499.3,276 485,371.9 431.9,419.6 348.2,494.9 185.6,517.4 95.49,449.9 16.71,390.8 -5.393,248.3 38.35,160.1 Z"/>
				<path id="deco5" d="M 49.94,386.5 C 9.795,286.4 7.674,129.7 94.72,65.99 188.4,-2.586 371.8,28.99 438.1,124.3 486.9,194.5 503.7,389.2 390.4,376.4 277.1,363.5 238.6,482 155.1,469.7 110.9,463.2 66.57,428 49.94,386.5 Z"/>
				<path id="deco6" d="M 261.7,380.3 C 204.7,399.8 154.1,482.7 98.91,458.5 26.64,426.9 13.2,309.8 29.35,232.6 43.76,163.6 101.4,97.37 167.4,72.34 248,41.97 422.1,-2.762 423.4,107.7 424.6,218.1 507.5,272.4 464.3,336.7 425.7,394.2 327,357.9 261.7,380.3 Z" />
				<path id="deco7" d="M 451.9,392.4 C 365.4,455.1 212.9,465.1 131.6,395.9 55.74,331.3 2.509,152.7 87.24,100.3 135.8,70.3 177.8,170.2 227.3,198.6 307.2,244.4 442.2,228.9 478.7,313.5 489.7,339 474.4,376.1 451.9,392.4 Z" />
			</defs>
		</svg>

			<div class="content content--grid">

				<header >
					<h1 >Wellbeing <br/></h1>
					<p >Slow life has many forms, but for me <br>it means holding balance in different life spheres.</p>
				</header>
				<!--AOS for on-scroll animations and animejs libraries for mophing shapes used below-->
				<div id="lotus_img">
					<img data-aos="zoom-in-right"  data-aos-easing="linear" data-aos-duration="3000" src="<?php bloginfo('template_directory'); ?> /assets/meditation.svg"  height="300px" width="300px" />
				</div>
			<div id="morf1" data-aos="zoom-in-right"  data-aos-easing="linear" data-aos-duration="3000">
				<div  class="item item--style-1" data-animation-path-duration="800" data-animation-path-easing="easeInOutCubic" data-path-elasticity="300" data-morph-path="M 189,80.37 C 232.6,46.67 352.5,67.06 350.9,124.1 349.5,173.4 311.7,168 312.4,248.1 312.9,301.1 382.5,319.2 368.5,379.1 349.4,460.6 137.7,467.5 117.6,386.3 98.68,309.7 171.5,292.2 183.6,240.1 195.7,188.2 123.8,130.7 189,80.37 Z" data-path-scaleX="0.8" data-path-scaleY="1.1" data-path-translateX="0" data-path-translateY="30" data-path-rotate="5" data-animation-image-duration="800" data-animation-image-easing="easeInOutQuart" data-image-elasticity="300" data-image-scaleX="1.2" data-image-scaleY="1.2" data-image-translateX="-20" data-image-translateY="-45" data-image-rotate="-5" data-animation-deco-duration="1300" data-animation-deco-easing="easeOutQuad" data-deco-elasticity="300" data-deco-scaleX="0.8" data-deco-scaleY="0.9" data-deco-translateX="-5" data-deco-translateY="-5" data-deco-rotate="2">
					<svg class="item__svg" width="500px" height="500px" viewBox="0 0 500 500">
						<clipPath id="clipShape1">
							<path class="item__clippath" d="M 189,80.37 C 243,66.12 307.3,87.28 350.9,124.1 389.3,156.6 417,211.2 418.1,263.4 419.1,305.7 401.8,355.6 368.5,379.1 298.8,428 179.2,446.4 117.6,386.3 65.4,335.3 78.55,230.3 105.5,160.5 119.7,123.6 152.6,89.85 189,80.37 Z" />
						</clipPath>
						<g class="item__deco">
							<use xlink:href="#deco1" />
						</g>
						<g clip-path="url(#clipShape1)">
							<image class="item__img" xlink:href="<?php bloginfo('template_directory'); ?> /assets/pebbles.jpg" x="0" y="0" height="500px" width="500px" />
							
						</g>
					</svg>
					
					<div class="item__meta">
						<div class="item__number">
						<span class="item__specimen">1</span>
						</div>
						<a href="http://localhost/examen_arbete/wellbeing/"><h5 class="title_item">Wellbeing</h5></a>
						
					</div>	
					
				</div>
			</div>
				
			

			<div id="morf2" data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="3000">
				<div class="item item--style-2" data-animation-path-duration="1500" data-animation-path-easing="easeOutElastic" data-morph-path="M 418.1,159.8 C 460.9,222.9 497,321.5 452.4,383.4 417.2,432.4 371.2,405.6 271.3,420.3 137.2,440 90.45,500.6 42.16,442.8 -9.572,381 86.33,289.1 117.7,215.5 144.3,153.4 145.7,54.21 212.7,36.25 290.3,15.36 373.9,94.6 418.1,159.8 Z" data-path-scaleY="1.1" data-image-scaleX="1.3" data-image-scaleY="1.3" data-animation-deco-duration="2000" data-animation-deco-delay="100" data-deco-rotate="-10">
				<svg class="item__svg" width="500px" height="500px" viewBox="0 0 500 500">
				<clipPath id="clipShape2">
				<path class="item__clippath" d="M 378.1,121.2 C 408.4,150 417.2,197.9 411,245.8 404.8,293.7 383.5,341.7 353.4,370.7 303.2,419.1 198.7,427.7 144.5,383.8 86.18,336.5 67.13,221.3 111.9,161 138.6,125 188.9,99.62 240.7,90.92 292.4,82.24 345.6,90.32 378.1,121.2 Z" />
						</clipPath>
						<g class="item__deco">
							<use xlink:href="#deco2" />
						</g>
						<g clip-path="url(#clipShape2)">
						<image class="item__img" xlink:href="<?php bloginfo('template_directory'); ?> /assets/yoga2.jpg" x="0" y="0" height="500px" width="500px" />
						</g>
					</svg>
					<div class="item__meta">
						<div class="item__number">
							<span class="item__specimen">2</span>
						</div>
						<a href="http://localhost/examen_arbete/ritual/"><h5 class="title_item">Rituals</h5></a>
					</div>
				</div>
			</div>
			

			<div id="morf3" data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="3000">

				<div class="item item--style-3" data-animation-path-duration="3500" data-path-elasticity="500" data-morph-path="M 193.7,217.3 C 236.4,228.3 279.7,242.7 320.9,231.8 362.6,220.9 446.8,197.1 457.6,241.5 469.3,289.8 378.7,308.3 330.2,319.2 278.5,330.8 222.3,319.2 172.1,302.2 125.2,286.4 33.08,273.2 45.14,225.2 57.22,177.1 145.7,204.8 193.7,217.3 Z" data-path-translateY="-20" data-animation-image-duration="1000" data-animation-image-easing="easeOutQuint" data-image-rotate="45" data-image-scaleX="0.8" data-image-scaleY="0.8" data-animation-deco-duration="2000" data-animation-deco-easing="easeOutElastic" data-deco-scaleX="0.7" data-deco-rotate="-10">
					<svg class="item__svg" width="500px" height="500px" viewBox="0 0 500 500">
						<clipPath id="clipShape3">
							<path class="item__clippath" d="M 184,127.4 C 235.4,92.39 319.7,79.27 359.9,132.2 383.2,163 357.1,216.6 355.8,258.8 354.8,291.2 371.3,332.9 352.9,356 306.1,414.4 205.1,419.3 153.7,367.2 123.8,336.8 128.6,272.1 136.1,225.2 142.1,187.8 157,145.7 184,127.4 Z" />
						</clipPath>
						<g class="item__deco">
							<use xlink:href="#deco3" />
						</g>
						<g clip-path="url(#clipShape3)">
						<image class="item__img" xlink:href="<?php bloginfo('template_directory'); ?> /assets/flying_books.jpg" x="0" y="0" height="500px" width="500px" />
						</g>
					</svg>
					<div class="item__meta">
						<div class="item__number">
							<span class="item__specimen">3</span>
						</div>
						<a href="http://localhost/examen_arbete/book/"><h5 class="title_item">Books</h5></a>
					</div>
				</div>
			</div>

			<div id="morf4" data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="3000">

				<div class="item item--style-4" data-animation-path-duration="1700" data-animation-path-easing="easeInOutBack" data-morph-path="M 440.9,118.5 C 486.5,189.8 499,297.9 458.3,371.8 422.2,437.2 335.8,475.1 261.5,477.3 181.4,479.6 83.9,445.4 43.22,376.1 -0.2483,302.1 13.51,189.9 61.98,119.1 104.5,56.88 190.6,20.5 265.7,22.71 332.2,24.67 405,62.28 440.9,118.5 Z" data-path-translateY="-20" data-animation-image-duration="2000" data-animation-image-easing="easeInOutQuart" data-image-translateY="40" data-image-scaleX="1.3" data-image-scaleY="1.3" data-deco-scaleX="0.8" data-deco-scaleY="1.3">
					<svg class="item__svg" width="500px" height="500px" viewBox="0 0 500 500">
						<clipPath id="clipShape4">
							<path class="item__clippath" d="M 402.7,215.5 C 433.9,280.4 488.1,367.2 447.7,426.8 410.1,482.2 316.7,460.2 249.7,460.6 182.8,461.1 88.08,485.5 51.26,429.5 10.29,367.3 73.19,279.4 106.9,213 141.8,144 176.6,33.65 253.9,33.7 332.2,33.75 368.8,144.9 402.7,215.5 Z" />
						</clipPath>
						<g class="item__deco">
							<use xlink:href="#deco4" />
						</g>
						<g clip-path="url(#clipShape4)">
						<image class="item__img" xlink:href="<?php bloginfo('template_directory'); ?> /assets/woman_run2.jpg" x="0" y="0" height="500px" width="500px" />
						</g>
					</svg>
					<div class="item__meta">
						<div class="item__number">
							<span class="item__specimen">4</span>
						</div>
						<a href="http://localhost/examen_arbete/running/"><h5 class="title_item">Running</h5></a>
					</div>
				</div>
			</div>

			<div id="morf5" data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="3000">
				<div class="item item--style-5" data-animation-path-duration="3000" data-animation-path-easing="easeInOutQuint" data-path-rotate="90" data-morph-path="M 368.1,46.42 C 461,96.69 473.7,266.2 422.3,358.4 379.1,436 259.6,484.8 175,457.5 107.5,435.7 12.65,329.8 60.93,277.7 95.18,240.8 154,379.3 194.2,348.9 250.7,306 116,204.1 148.4,140.9 184.8,70.02 298,8.455 368.1,46.42 Z" data-animation-image-duration="3000" data-animation-image-easing="easeInOutQuint" data-image-rotate="-30"  data-animation-deco-duration="3000" data-animation-deco-easing="easeOutQuint">
					<svg class="item__svg" width="500px" height="500px" viewBox="0 0 500 500">
						<clipPath id="clipShape5">
							<path class="item__clippath" d="M 451.5,185.8 C 441.5,266.2 339.6,305 272.3,350.2 207.7,393.6 226.7,444.7 182.6,447.9 132.8,451.4 83.97,399.9 66.37,353.1 34.6,268.4 41.16,141.8 112,85.44 186.1,26.33 313.8,54.1 396,101.4 425.2,118.2 455.6,152.4 451.5,185.8 Z" />
						</clipPath>
						<g class="item__deco">
							<use xlink:href="#deco5" />
						</g>
						<g clip-path="url(#clipShape5)">
						<image class="item__img" xlink:href="<?php bloginfo('template_directory'); ?> /assets/knit1.jpg" x="0" y="0" height="500px" width="500px" />
						</g>
					</svg>
					<div class="item__meta">
						<div class="item__number">
							<span class="item__specimen">5</span>
						</div>
						<a href="http://localhost/examen_arbete/crafts/knitting/"><h5 class="title_item">Knitting</h5></a>
					</div>
				</div>
			</div>

			<div id="morf6" data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="3000">
				<div class="item item--style-6" data-animation-path-duration="2000" data-path-scaleX="0.7" data-path-scaleY="0.7" data-path-rotate="25" data-morph-path="M 279.8,41.26 C 332.2,40.04 397.1,40.63 432.5,79.42 470.9,121.7 455.7,191.8 458.3,249 460.6,300.4 481.9,363.6 448.9,403.1 402.7,458.2 311.1,450.1 239.3,453.9 183.9,456.9 113.3,471.5 74.23,432.1 18.97,376.3 29.82,251.5 45.32,198.4 59.64,149.2 95.01,111.8 134.9,84.73 176.6,56.36 229.4,42.43 279.8,41.26 Z" data-animation-image-duration="2000" data-animation-image-easing="easeOutExpo" data-image-translateY="-30" data-image-scaleX="0.9" data-image-scaleY="0.9">
					<svg class="item__svg" width="500px" height="500px" viewBox="0 0 500 500">
						<clipPath id="clipShape6">
							<path class="item__clippath" d="M 274.4,32.13 C 328.5,36.28 249,139.7 287.7,192.8 326.3,245.9 483.3,248.4 459,295 434.9,341.2 341.4,267.6 298,297.5 247.4,332.3 296,461.4 233.9,467.8 177.2,473.8 214.2,326.3 176,268.3 137.8,210.5 24.39,242.4 39.89,189.3 54.21,140.1 142,158.9 184.6,129.2 221.1,103.9 229.3,28.68 274.4,32.13 Z" />
						</clipPath>
						<g class="item__deco">
							<use xlink:href="#deco6" />
						</g>
						<g clip-path="url(#clipShape6)">
						<image class="item__img" xlink:href="<?php bloginfo('template_directory'); ?> /assets/brush.jpg" x="0" y="0" height="500px" width="500px" />
						</g>
					</svg>
					<div class="item__meta">
						<div class="item__number">
							<span class="item__specimen">6</span>
						</div>
						<a href="http://localhost/examen_arbete/crafts/painting-2/"><h5 class="title_item">Painting</h5></a>
	
					</div>
				</div>
			</div>

				

			</div>



		<?php
		while ( have_posts() ) :
			the_post();?>


      	<?php itfeelsgood_post_thumbnail(); ?>

      <div>
        <?php the_content(); ?>
      </div>


		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
