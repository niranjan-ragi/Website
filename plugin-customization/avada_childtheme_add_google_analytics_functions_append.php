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
// [pages_by_page_type value="AI Agents" per_page="12"]
add_shortcode('pages_by_page_type', function ($atts) {
$atts = shortcode_atts([
'value' => '', // e.g. "AI Agents"
'per_page' => 12,
], $atts, 'pages_by_page_type');

$paged = max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);

$args = [
'post_type' => 'page',
'posts_per_page' => intval($atts['per_page']),
'paged' => $paged,
'meta_query' => [
[
'key' => 'page_type',
'value' => $atts['value'],
'compare' => '=',
],
],
'orderby' => 'menu_order title',
'order' => 'ASC',
];

$q = new WP_Query($args);
ob_start();

if ($q->have_posts()) {
echo '<div class="pages-grid">';
while ($q->have_posts()) { $q->the_post();
echo '<article class="pages-grid__item">';
echo '<h3>'.esc_url(get_permalink()).'</h3>';
if (has_post_thumbnail()) {
echo ''.esc_url(get_permalink()).'';
}
the_excerpt();
echo '</article>';
}
echo '</div>';

// Pagination that works on normal Pages
echo paginate_links([
  'total'   => $q->max_num_pages,
  'current' => $paged,
]);
wp_reset_postdata();
} else {
echo '<p>No pages found.</p>';
}
return ob_get_clean();
});
