//[app Javascript]


$(function () {
    "use strict";    
		
	 // chat app scrolling
	
		var height = $(window).height();
		var width = $(window).width();
		console.log(height);
		

		 if (width >= 1500 && height >= 750) {
			$('#chat-app').slimScroll({
				height: '430px'
				});	
		 }
		 else if (width < 1500 && height < 750) {
			$('#chat-app').slimScroll({
				height: '350px'
				});	
		 }
	
  }); // End of use strict