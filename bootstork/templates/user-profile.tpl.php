<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<div class="profile"<?php print $attributes; ?>>
	<div class="row well">
		<div class="col-md-3">
			<div class="picture_container">
		  	<?php 
		  		print render($user_profile['user_picture']); 
		  	?>
		  	<!-- Harry: Insert edit field to upload new image -->
	  	</div>
		</div>
		<div class="col-md-6">
			<div class="info_container">
				<h4><!-- Harry: Insert Username --></h4>
				<?php
					print render($user_profile['username']);
					print render($user_profile['summary']['member_for']);
				?>
			</div>
		</div>
		<div class="col-md-3">
			<div class="woah_container">
				<h6>Woahs Earned</h6>
				<ul class="woahnumber_container">
					<li class="woahnumber">0</li>
					<li class="woahnumber">0</li>
					<li class="woahnumber">0</li>
					<li class="woahnumber">0</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="well col-xs-12">
			<h2>Recommended Strains</h2>
			<!--Harry: this will remain hidden until we can figure out how to implement Nicco's recommendation code into this-->
			<p>Strains recommended on your past orders. Coming soon.</p>
	  	<?php 
	  		
	  	?>
		</div>
	</div>
	<div class="row">
		<div class="well col-xs-12">
			<h2>Ordered Strains</h2>
			<!--Harry: render ordered strains here, like our Strains page, but only 1 row with horizontal scroll-->
	  	<?php 
	  		print render($user_profile['orders']['strains']);
	  	?>
		</div>
	</div>
	<div class="row">
		<div class="well col-xs-12">
		<h2>Favorite Dispensaries</h2>
		<!--Harry, can we render dispensaries ordered from here?-->
	  	<?php 
	  		print render($user_profile['orders']['dispensaries']);
	  	?>
		</div>
	</div>
</div>
