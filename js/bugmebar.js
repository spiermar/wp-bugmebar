jQuery(document).ready(function () {
    jQuery('#navigation').bugme({
    	message: 'Check my latest post, "<a id="bugmelink" href="/performance-capacity-cmg-2014">Performance and Capacity by CMG 2014</a>"!',
    	align: "center",
    	remember: true,
        expireIn: 1
    });
    jQuery('#bugmelink').click(function () {
    	_trackEvent("BugMeBar", "Click");
    });
});