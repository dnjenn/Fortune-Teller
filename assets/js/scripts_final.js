window.onload = function() {
	var anchorTagMe = "";

	var stage = document.getElementById('stage');
	if(stage) {
		stageOne();
		console.log('stage one');
	}


///// function to listen for an anchor click
	function checkAnchor() {
		var anchor = stage.getElementsByTagName('a');

//loop through the anchors
		for (var k=0; k<anchor.length; k++) {
			anchor[k].addEventListener('click', function(e) {
				e.preventDefault();
	//			sendRequest(this.href); send data as $_POST

				anchorTagMe = this.getAttribute('id');

//this.parentNode.parentNode.getElementById('divStageOne').onclick

				var stageName = this.parentNode.parentNode.getAttribute('id');
				if(stageName == 'divStageOne') {
					stageTwo();
					//console.log('stage two');
				} else if(stageName == 'divStageTwo') {
					stageThree();
					//console.log('stage three');
				} else if(stageName == 'divStageThree') {
					stageFour();
					//console.log('stage four');
				}

				//console.log(anchorTagMe);
				return anchorTagMe;
			}, false);
		}
	}



function stageOne() {
	stage.innerHTML = "";
// element id's: "red" || "yellow" || "blue" || "green"
	//console.log(stage);
	stage.style.background="url('assets/img/step1_1.png')";

	stage.innerHTML += "<div id='divStageOne'><div class='stepTop'>" +
	"<a id='red' class='stepLeft' href='' >Red</a>" +
	"<a id='yellow' class='stepRight' href='' >Yellow</a> </div>" +
	"<div class='stepBottom'>" +
	"<a id='blue' class='stepLeft' href='' >Blue</a>" +
	"<a id='green' class='stepRight' href='' >Green</a> </div></div>";
	if(stage != null) {
		checkAnchor();
	}

	// change background image in CSS
	// then add animation
}

// element id's: "one" || "two" || "three" || "four"
function stageTwo() {
		stage.innerHTML = "";
//		document.getElementById("stage").style.visibility= "visible";
//		document.getElementById("stage").style.backgroundImage="url('assets/img/step2_1.png')";

document.getElementById("stage").setAttribute('class', 'stageOneLooks');

		stage.innerHTML += "<div id='divStageTwo'><div class='stepTop'>" +
		"<a id='one' class='stepLeft' href='' >One</a>" +
		"<a id='two' class='stepRight' href='' >Two</a> </div>" +
		"<div class='stepBottom'>" +
		"<a id='three' class='stepLeft' href='' >Three</a>" +
		"<a id='four' class='stepRight' href='' >Four</a> </div></div>";
	if(stage != null) {
		checkAnchor();
	}
// change background image in CSS
// then add animation
}

// the following are element id's "five" || "six" || "seven" || "eight"
// element id's: "five" || "six" || "seven" || "eight"
function stageThree() {
		stage.innerHTML = "";
		stage.innerHTML += "<div id='divStageThree'><div class='stepTop'>" +
		"<a id='five' class='stepLeft' href='' >Five</a>" +
		"<a id='six' class='stepRight' href='' >Six</a> </div>" +
		"<div class='stepBottom'>" +
		"<a id='seven' class='stepLeft' href='' >Seven</a>" +
		"<a id='eight' class='stepRight' href='' >Eight</a> </div></div>";
	if(stage != null) {
		checkAnchor();
	}
// change background image in CSS
// then add animation
}

// print the fortune
function stageFour() {
			console.log('starthere');
			stage.innerHTML = "";
			stage.innerHTML += "<div id='divStageFour'><div class='stepTop' id='divStageFour'>Fortune</div></div>";
// change background image in CSS
// then add animation
}


} //end: window.onload = function()

