<?php
wp_interactivity_state(
	'disney',
	array(
		'mobileMenuOpen'    => false,
		'aboutOpen'         => false,
		'experiencesOpen'   => false,
		'impactOpen'        => false,
		'sitesOpen'         => false,
	)
);
?>

<div
	<?php echo get_block_wrapper_attributes( array( 'class' => 'mobile-menu' ) ); ?>
	data-wp-interactive="disney"
	data-wp-bind--hidden="!state.mobileMenuOpen"
	hidden
>
	<div class="mobile-menu-inner">
		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "about" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.aboutOpen">
				<span>About</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<ul class="mobile-submenu" data-wp-bind--hidden="!state.aboutOpen" hidden>
				<li><a href="/about/">Our Story</a></li>
				<li><a href="/employee-experience/">Our People</a></li>
				<li><a href="/about/leadership/">Leadership</a></li>
				<li><a href="/awards/">Awards</a></li>
			</ul>
		</div>

		<a href="/news/" class="mobile-nav-link">News</a>
		<a href="/press-room/" class="mobile-nav-link">Press Room</a>

		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "experiences" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.experiencesOpen">
				<span>Our Experiences</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<ul class="mobile-submenu" data-wp-bind--hidden="!state.experiencesOpen" hidden>
				<li><a href="/parks/">Parks</a></li>
				<li><a href="/cruise-line/">Cruise Line</a></li>
				<li><a href="/products/">Consumer Products</a></li>
				<li><a href="/experiences/">Signature Experiences</a></li>
				<li><a href="/expansions/">Expansions</a></li>
			</ul>
		</div>

		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "impact" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.impactOpen">
				<span>Our Impact</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<ul class="mobile-submenu" data-wp-bind--hidden="!state.impactOpen" hidden>
				<li><a href="/about/community-impact/">Community Impact</a></li>
				<li><a href="/economic-impact/">Economic Impact</a></li>
			</ul>
		</div>

		<div class="gradient-stripe"></div>

		<div class="mobile-nav-section" data-wp-context='{ "sectionId": "sites" }'>
			<button class="mobile-nav-toggle" data-wp-on--click="actions.toggleSection" data-wp-bind--aria-expanded="state.sitesOpen">
				<span>Sites</span>
				<svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<div class="sites-grid" data-wp-bind--hidden="!state.sitesOpen" hidden>
				<div class="sites-column">
					<h4 class="sites-heading">Explore More</h4>
					<ul class="sites-links">
						<li><a href="https://www.thewaltdisneycompany.com/">The Walt Disney Company</a></li>
						<li><a href="https://disneyparks.disney.go.com/blog/">Disney Parks Blog</a></li>
						<li><a href="https://disneyimagining.com/">Walt Disney Imagineering</a></li>
						<li><a href="https://disneyland.disney.go.com/about/">About Disneyland</a></li>
						<li><a href="https://disneyworld.disney.go.com/about/">About Disney in Florida</a></li>
					</ul>
				</div>
				<div class="sites-column">
					<h4 class="sites-heading">Consumers</h4>
					<ul class="sites-links">
						<li><a href="https://disneyland.disney.go.com/">Disneyland Resort</a></li>
						<li><a href="https://disneyworld.disney.go.com/">Walt Disney World Resort</a></li>
						<li><a href="https://disneycruise.disney.go.com/">Disney Cruise Line</a></li>
						<li><a href="https://www.disneystore.com/">Disney Store</a></li>
					</ul>
				</div>
			</div>
		</div>

		<button class="mobile-close-btn" data-wp-on--click="actions.closeMobileMenu">Close</button>
	</div>
</div>
