/**
 * Created by Judah on 10/1/15.
 */
function fileTreeController() {

    // Hide all subfolders at startup
    $(".phpFileTree").find("UL").hide();

    // Expand/collapse on click
    $(".pft-directory A").click( function() {
        $(this).parent().find("UL:first").slideToggle("medium");
        if( $(this).parent().attr('className') == "pft-directory" ) return false;
    });

}
