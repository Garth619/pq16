<?php get_header(); ?>

<div id="internal_main">

	<div id='page_wrapper'>
	
   	<div id='page_content'>

		 	<h1 class="page_title"><?php the_title();?></h1>
    
    	<div id='page_content_inner' class="content">

				<p>Dolor sit amet, consectetur adipiscing elit. Etiam dictum diam quis quam rutrum ultrices. Nunc magna sem, faucibus quis tincidunt eget, cursus eget lorem. Nulla diam lectus, rhoncus vitae <a href="">embeded link</a>. embeeded link rollover t turpis. Phasellus imperdiet a mauris ut egestas. Nulla mattis tellus in lectus posuere ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum diam nisl, ultricies ut rhoncus.</p>

				<h2>Heading Style 2 : ante pulnivar ispum vivmos maxium euqe vel mi</h2>

				<p>Dolor sit amet, consectetur adipiscing elit. Etiam dictum diam quis quam rutrum ultrices. Nunc magna sem, faucibus quis tincidunt eget, cursus eget lorem. Nulla diam lectus, rhoncus vitae embeeded link. embeeded link rollover t turpis. Phasellus imperdiet a mauris ut egestas. Nulla mattis tellus in lectus posuere ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum diam nisl, ultricies ut rhoncus eu, fringilla in est. Nulla pulvinar odio vitae ante pulvinar cursus auctor et nunc. Ut vitae lectus ac purus porttitor tempus ac eu magna. Curabitur scelerisque risus cursus arcu viverra, in tristique turpis tristique.</p>

				<ul>

				<li>Ut vitae lectus ac purus porttitor tempus</li>
				<li>Ut vitae lectus ac purus porttitor tempus </li>
				<li>Ut vitae lectus ac purus porttitor tempus</li>

				</ul>

				<h3>Heading Style 3 : ante pulnivar ispum vivmos maxium euqe vel mi eget behiclua</h3>

				<p>Nulla pulvinar odio vitae ante pulvinar cursus auctor et nunc. Ut vitae lectus ac purus porttitor tempus ac eu magna. Curabitur scelerisque risus cursus arcu viverra.</p>

				<ol>
					<li>Ut vitae lectus ac purus porttitor tempus</li>
					<li>Ut vitae lectus ac purus porttitor tempus </li>
					<li>Ut vitae lectus ac purus porttitor tempus</li>
				</ol>

				<p>Dolor sit amet, consectetur adipiscing elit. Etiam dictum diam quis quam rutrum ultrices. Nunc magna sem, faucibus quis tincidunt eget, cursus eget lorem. Nulla diam lectus, rhoncus vitae embeeded link. embeeded link rollover t turpis. Phasellus imperdiet a mauris ut egestas. Nulla mattis tellus in lectus posuere ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum diam nisl, ultricies ut rhoncus. Dolor sit amet, consectetur adipiscing elit. Etiam dictum diam quis quam rutrum ultrices. Nunc magna sem, faucibus quis tincidunt eget, cursus eget lorem. Nulla diam lectus, rhoncus vitae embeeded link. </p>

				<?php //get_template_part( 'loop', 'page' ); ?>

				</div><!-- page_content_inner -->
    	
    	</div><!-- page_content -->

			<?php if(!get_field('disable_sidebar')) {

				get_sidebar();

			} ?>

	</div><!-- page_wrapper -->

</div><!-- internal_main -->
		

<?php get_footer(); ?>
