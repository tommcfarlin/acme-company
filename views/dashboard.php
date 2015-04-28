<?php
/**
 * The primary Dashboard for the Acme Company
 *
 * @since      1.0.0
 *
 * @subpackage Acme_Company/views
 * @package    Acme_Company
 *
 */
?>

<div class="wrap">

	<h2>Acme Company</h2>

	<?php settings_errors(); ?>

	<form method="post" action="options.php">
		<?php
			settings_fields( 'acme_company_group' );
			do_settings_sections( 'acme-company-page' );
			submit_button();
		?>
	</form>

</div><!-- .wrap -->