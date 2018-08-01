require(['jquery', 'jquery/ui'], function($){
    jQuery(document).ready(function() {
        jQuery('label[data-role=minisearch-label]').click(function () { //Bind click event for search click
            jQuery(this).addClass('active');
            jQuery(this).parent().find('.control').addClass('visible');
            jQuery(this).parent().parent().find('.actions').addClass('visible');
        });
    });
});