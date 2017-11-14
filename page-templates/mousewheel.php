<?php
/*
 * Template Name: test for mousewheel
 */
?>


<head>
  <!-- Place somewhere in the <head> of your document -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>

<style>
@keyframes dance_when_animate {
  0%, 10% {
    transform: none;
  }
  25% {
    transform: rotateZ(-20deg);
  }
  50% {
    transform: rotateZ(20deg);
  }
  75% {
    transform: rotateZ(-10deg);
  }
  90%, 100% {
    transform: none;
  }
}
.demo_animated {
  animation: dance_when_animate 1s cubic-bezier(0, .8, .5, 1.5) infinite;
}
.demo_scroll_animation {
  width: 100%;
}
.spacer {
  background: rgba(255,255,255,.1);
  border-radius: 1rem;
  color: black;
  font-size: 4rem;
  height: 90vh;
  line-height: 80vh;
  margin: 4rem 0;
  width: 100%;
  border:1px solid black;
}
button.btn_animation {
  background: #3991AE;
  border: 1px solid #fff;
  border-radius: 1rem;
  color: #fff;
  font-size: 2rem;
  padding: 1rem;
}

</style>

</head>

<script>
    var windowHeight = window.innerHeight,
    gridTop = windowHeight * 0.1,
    gridBottom = windowHeight * 0.9;
    $(window).on('scroll', function() {
      $('button.btn_animation').each(function() {
      var thisTop = jQuery(this).offset().top - $(window).scrollTop();
      if (thisTop >= gridTop && (thisTop + $(this).height()) <= gridBottom) {
        $(this).addClass('demo_animated');
      } else {
        $(this).removeClass('demo_animated');
      }
    });
  });

    $(window).trigger('scroll');
</script>

<?php get_template_part('includes/header'); ?>


<div class="container">
  <div class="row">

  </div><!-- /.row -->
</div><!-- /.container -->

<div class="demo_scroll_animation">
	<div class="spacer">
		Scroll
	</div>

	<p>
		<button class="btn_animation">👋 Hey!</button>
	</p>

	<div class="spacer">
		Scroll
	</div>

	<p>
		<button class="btn_animation">I'm here 😋</button>
	</p>

	<div class="spacer">
		Scroll
	</div>

	<p>
		<button class="btn_animation">Notice me! 😅</button>
	</p>

	<div class="spacer">
		Scroll
	</div>

	<p>
		<button class="btn_animation">Dancing 💃</button>
	</p>

	<div class="spacer">
		Scroll
	</div>

	<p>
		<button class="btn_animation">🎉Party 🎉</button>
	</p>

	<div class="spacer">
		Scroll
	</div>

	<p>
		<button class="btn_animation">Dizzy! 😬</button>
	</p>

	<div class="spacer">
		Scroll
	</div>

	<p>
		<button class="btn_animation">😴 Enough 💤</button>
	</p>

	<div class="spacer">
		Scroll
	</div>
</div>



</?php get_template_part('includes/footer'); ?>
