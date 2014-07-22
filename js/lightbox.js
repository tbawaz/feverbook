/****************************************
	Barebones Lightbox Template
	by Kyle Schaeffer
	http://www.kyleschaeffer.com
	* requires jQuery
****************************************/

// display the lightbox
function lightbox(insertContent){

	// jQuery wrapper (optional, for compatibility only)
	(function($) {
	
		// add lightbox/shadow <div/>'s if not previously added
		if($('#lightbox').size() == 0){
			var theLightbox = $('<div id="lightbox"/>');
			var theShadow = $('<div id="lightbox-shadow"/>');
			$(theShadow).click(function(e){
				closeLightbox();
			});
			$('body').append(theShadow);
			$('body').append(theLightbox);
		}
		
		// remove any previously added content
		$('#lightbox').empty();
		
		// insert HTML content
		if(insertContent != null){
			$('#lightbox').append(insertContent);
		}
		
		// insert AJAX content
		// if(ajaxContentUrl != null){
		// 	// temporarily add a "Loading..." message in the lightbox
		// 	$('#lightbox').append('<p class="loading">Loading...</p>');
			
		// 	// request AJAX content
		// 	$.ajax({
		// 		type: 'GET',
		// 		url: ajaxContentUrl,
		// 		success:function(data){
		// 			// remove "Loading..." message and append AJAX content
		// 			$('#lightbox').empty();
		// 			$('#lightbox').append(data);
		// 		},
		// 		error:function(){
		// 			alert('AJAX Failure!');
		// 		}
		// 	});
		// }
		
		// move the lightbox to the current window top + 100px
		$('#lightbox').css('top', $(window).scrollTop() + 100 + 'px');
		
		// display the lightbox
		$('#lightbox').show();
		$('#lightbox-shadow').show();
	
	})(jQuery); // end jQuery wrapper
	
}

// close the lightbox
function closeLightbox(){
	
	// jQuery wrapper (optional, for compatibility only)
	(function($) {
		
		// hide lightbox/shadow <div/>'s
		$('#lightbox').hide();
		$('#lightbox-shadow').hide();
		
		// remove contents of lightbox in case a video or other content is actively playing
		$('#lightbox').empty();
	
	})(jQuery); // end jQuery wrapper
	
}

// // lightbox method #2

// //Problem: User when clicking on image goes to a dead end
// //Solution: Create an overlay with the large image - Lightbox

// var $overlay = $('<div id="overlay"></div>');
// var $image = $("<img>");
// var $caption = $("<p></p>");

// //An image to overlay
// $overlay.append($image);

// //A caption to overlay
// $overlay.append($caption);

// //Add overlay
// $("body").append($overlay);

// //Capture the click event on a link to an image
// $("#imageGallery a").click(function(event){

//   var imageLocation = $(this).attr("href");
//   //Update overlay with the image linked in the link
//   $image.attr("src", imageLocation);
  
//   //Show the overlay.
//   $overlay.show();
  
//   //Get child's alt attribute and set caption
//   var captionText = $(this).children("img").attr("alt");
//   $caption.text(captionText);
// });

// //When overlay is clicked
// $overlay.click(function(){
//   //Hide the overlay
//   $overlay.hide();
// });