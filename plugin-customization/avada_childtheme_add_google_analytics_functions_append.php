/**
Enqueue Google Analytics 4 code in the site header.
*/
function mychildtheme_add_google_analytics() {
// Only load GA4 if user is not logged in as an admin (optional best practice).
if ( ! current_user_can( 'manage_options' ) ) {
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EVM06EJTVD"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
  gtag('config', 'G-EVM06EJTVD');
</script>
<?php
}
}
add_action( 'wp_head', 'mychildtheme_add_google_analytics' );
