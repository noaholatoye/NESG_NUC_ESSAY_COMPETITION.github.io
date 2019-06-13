// navigation toggle
function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}

// word count
const aboutTextArea = document.getElementById("about-textarea");
const aboutCount = document.getElementById("about-count");
// function countWords(textArea) {
// 	s = textArea.value;
// 	console.log(s);
// 	s = s.replace(/(^\s*)|(\s*$)/gi, "");
// 	s = s.replace(/[ ]{2,}/gi, " ");
// 	s = s.replace(/\n /, "\n");
// 	let count = s.split(" ").length;
// 	if (count.value == 10) {
// 		alert("You've reach the maximum letter");
// 	}
// }

// $("#about-textarea").on("keyup", function() {
// 	s = $("#about-textarea").value;
// 	console.log(s);
// 	s = s.replace(/(^\s*)|(\s*$)/gi, "");
// 	s = s.replace(/[ ]{2,}/gi, " ");
// 	s = s.replace(/\n /, "\n");
// 	c.value = s.split(" ").length;
// 	if (c == 10) {
// 		alert("You've reach the maximum letter");
// 	}
// });

// countWords(aboutTextArea);

function countWords() {
	s = document.getElementById("inputString").value;
	s = s.replace(/(^\s*)|(\s*$)/gi, "");
	s = s.replace(/[ ]{2,}/gi, " ");
	s = s.replace(/\n /, "\n");
	let count = (document.getElementById("wordcount").value = s.split(
		" "
	).length);
	if (count > 11) {
		alert("You've exceeded the maximum words");
	}
}
// TextArea Validation
function validateForm() {
	let about = document.getElementById("about-textarea").value;
	let sum = document.getElementById("summary-textarea").value;
	let essay = document.getElementById("essay-textarea").value;

	// check word count
	let aboutWords = about.split(" ").length;
	let aboutCount = aboutWords - 100;
	let summaryWords = sum.split(" ").length;
	let summaryCount = summaryWords - 100;
	let essayWords = essay.split(" ").length;
	let essayCount = essayWords - 1500;
	if (aboutWords > 100) {
		alert(
			`Opps, you've exceeded with ${aboutCount} word(s). Make sure about you section is not more than "100" words`
		);
		return false;
	}
	if (summaryWords > 100) {
		alert(
			`Opps, you've exceeded with ${summaryCount} word(s). Make sure your essay summary is not more than "100" words`
		);
		return false;
	}
	if (essayWords > 1500) {
		alert(
			`Opps, you've exceeded with ${essayCount} word(s). Make sure your essay is not mre than "1500" words`
		);
		return false;
	}
	
}
