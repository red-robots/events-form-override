/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane
 */

jQuery(document).ready(function ($) {

	/*
	*   Changes button Label
	*    On page: https://livincharlotte.com/events/community/add
	*
	*/
	$("#tribe-add-recurrence span.has-no-recurrence").text(function(index, text) {
	    return text.replace("Schedule multiple events", "Schedule recurring events");
	});


	/*
	*    Hides the Tags box on the form
	*    On page: https://livincharlotte.com/events/community/add
	*
	*/
	$('h3:contains("Event Tags")').closest('.tribe-section-taxonomy').css("display", "none");
	// $('h3:contains("Event Tags"').css("display", "none");


	/*
	*    Hides the Organizer Website field when adding an Organizer
	*    On page: https://livincharlotte.com/events/community/add
	*
	*/

$("a.tribe-button-secondary").bind("DOMSubtreeModified", function() {
    alert("tree changed");
});
	// document.addEventListener("DOMNodeInserted", function(evt) {
	// 	("tr.tribe-linked-type-organizer-website").css("display":"none");
	// }


});  // END