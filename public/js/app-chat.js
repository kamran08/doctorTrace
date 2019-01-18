//[app Javascript]


$(function () {
    "use strict";    
		
	 // chat app scrolling
	
		 var height = $(window).height();

		 if (height >= 1080) {
			$('#chat-app').slimScroll({
				height: '680px'
				});	
		 }
		 else if (height >= 636) {
			$('#chat-app').slimScroll({
				height: '350px'
				});	
		 }
	
  }); // End of use strict