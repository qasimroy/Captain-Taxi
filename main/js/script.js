// $(function () {
// 	$("#googleSearchForm").submit(function (event) {
// 		event.preventDefault();
// 		if (!!$("#googlebox").val()) {
// 			window.location = `https://google.com/search?q=${$("#googlebox").val()}`;
// 		} else {
// 			alert("WTH?? Don't trick us.. Enter the text!");
// 		}
// 	});
// });
// function scrollToTop() {
// 	$(window).scrollTop(0);
// }

function addNote(){
	$(".notes").toggle();
}

function toggleItems() {
	$("#dropoffFrom").toggle();
}
function toggleAirItems() {
	$("#dropoffAirFrom").toggle();
}

function addAirNote(){
	$(".airNotes").toggle();
}