
 function catc_inline_footer_js() {
    ?>
    <script>
       jQuery(document).ready(function(jQuery) {
    jQuery(document).on('click' , '.tc-element-container img.wp-post-image', function(){
        var image_url = jQuery(this).attr('src');
        console.log(image_url);
        jQuery('body').append('<div class="catcPopup"><div class="catcinnerPopup"><span class="catcClose">+</span><img src="' + image_url + '"></div></div>');
        jQuery('.catcPopup').fadeIn();
    });

    jQuery(document).on('click', '.catcClose', function() {
        jQuery(this).parents('.catcPopup').remove();
    });

    jQuery(document).on('click', function(event) {
        if (!jQuery(event.target).closest('.catcinnerPopup, .tc-element-container img.wp-post-image').length) {
            jQuery('.catcPopup').remove();
        }
    });
});
    </script>
    <?php
}
add_action('wp_footer', 'catc_inline_footer_js');