function menuVisible(){
	var hamburger = document.getElementsByClassName('hamburger')[0];
	var mainSection = document.getElementsByClassName('mainSection')[0];
	var header = document.getElementsByTagName('header')[0];
	var content = document.getElementById('content');
	var footer = document.getElementsByTagName('footer')[0];
	var body = document.getElementsByTagName('body')[0];

	var hamburgerLine1 = document.getElementsByClassName('hamburgerLine-1')[0];
	var hamburgerLine2 = document.getElementsByClassName('hamburgerLine-2')[0];
	var hamburgerLine3 = document.getElementsByClassName('hamburgerLine-3')[0];


	hamburger.onclick = function () {
		
		if(header.className == 'menuVisible'){
			header.className ='';

			if (screen.width >= 768) {
				
				var clientHeight = document.documentElement.clientHeight / 1.1;
				
				footer.className ='';					
				mainSection.className ='mainSection';					
				content.className ='';					
				content.style.height = document.documentElement.clientHeight+'px';
				body.className ='';					
				hamburgerLine1.className ='hamburgerLine-1 bg-white';					
				hamburgerLine2.className ='hamburgerLine-2 bg-white';					
				hamburgerLine3.className ='hamburgerLine-3 bg-white';					
			}

		}else{
			
			header.className ='menuVisible';	

			if (screen.width >= 768) {
				
				var clientHeight = document.documentElement.clientHeight / 1.1;
				
				footer.className ='menuVisible';					
				mainSection.className ='mainSection menuVisible';					
				content.className ='menuVisible';					
				content.style.height = clientHeight+'px';
				body.className ='menuVisible';					
				hamburgerLine1.className ='hamburgerLine-1 menuVisible';					
				hamburgerLine2.className ='hamburgerLine-2 menuVisible';					
				hamburgerLine3.className ='hamburgerLine-3 menuVisible';					
				
			}

		}
		
	}
}

function mediaController() {
	
	if (screen.width <= 399 ) {
		
		calculateScrollSection(240, 1708, 3911, 4621, 7115);
	
	}else if ( screen.width >= 400 && screen.width < 767 ) {
	
		calculateScrollSection(20, 1530, 3443, 3767, 5833);
	
	}else if ( screen.width >= 768  && screen.width < 1023 ) {
	
		calculateScrollSection(396, 1121, 3122, 3684, 6180);
	
	}else if ( screen.width >= 1024) {
	
		calculateScrollSection(191, 972, 2820, 3327, 5690);
	
	}
}

function calculateScrollSection(first, second, third, fourth, fifth) {
	var scrollPosition = window.scrollY;
	var scrollBall = document.getElementsByClassName('scroll--ball');
	var header = document.getElementsByTagName('header')[0];
	var hamburgerLine1 = document.getElementsByClassName('hamburgerLine-1')[0];
	var hamburgerLine2 = document.getElementsByClassName('hamburgerLine-2')[0];
	var hamburgerLine3 = document.getElementsByClassName('hamburgerLine-3')[0];

	
	
	if( scrollPosition < first){
		if(header.className == 'menuVisible'){
			hamburgerLine1.className ='hamburgerLine-1 menuVisible';					
			hamburgerLine2.className ='hamburgerLine-2 menuVisible';					
			hamburgerLine3.className ='hamburgerLine-3 menuVisible';					
		}else{
			hamburgerLine1.className = 'hamburgerLine-1 bg-white';
			hamburgerLine2.className = 'hamburgerLine-2 bg-white';
			hamburgerLine3.className = 'hamburgerLine-3 bg-white';	
		}
		
		
		for (var i = 0; i < scrollBall.length ; i++) {
			scrollBall[i].className = 'scroll--ball';
		}

	}else if( scrollPosition > first && scrollPosition < second) {
		
		hamburgerLine1.className = 'hamburgerLine-1 bg-blue';
		hamburgerLine2.className = 'hamburgerLine-2 bg-blue';
		hamburgerLine3.className = 'hamburgerLine-3 bg-blue';

		scrollBall[0].className = 'scroll--ball active';
		
		for (var i = 1; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball ';
		}

	}else if( scrollPosition > second && scrollPosition < third) {
		
		hamburgerLine1.className = 'hamburgerLine-1 bg-white';
		hamburgerLine2.className = 'hamburgerLine-2 bg-white';
		hamburgerLine3.className = 'hamburgerLine-3 bg-white';
		
		for (var i = 0; i < 2; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 2; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}

	}else if( scrollPosition > third && scrollPosition < fourth) {
		
		hamburgerLine1.className = 'hamburgerLine-1 bg-blue';
		hamburgerLine2.className = 'hamburgerLine-2 bg-blue';
		hamburgerLine3.className = 'hamburgerLine-3 bg-blue';

		for (var i = 0; i < 2; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}
		
		for (var i = 3; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}

	}else if( scrollPosition > fourth && scrollPosition < fifth) {
		
		hamburgerLine1.className = 'hamburgerLine-1 bg-white';
		hamburgerLine2.className = 'hamburgerLine-2 bg-white';
		hamburgerLine3.className = 'hamburgerLine-3 bg-white';

		for (var i = 0; i < 3; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}
		
		for (var i = 4; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}

	}else{
		
		hamburgerLine1.className = 'hamburgerLine-1 bg-white';
		hamburgerLine2.className = 'hamburgerLine-2 bg-white';
		hamburgerLine3.className = 'hamburgerLine-3 bg-white';

		for (var i = 0; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}
		
	}

}


window.onload = function () {
	menuVisible();
	
	this.onscroll = function () {
		mediaController();
	}
};