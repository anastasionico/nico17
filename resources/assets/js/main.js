/*
 * This function is about the menu,
 * when clicking on the hamburger it check if the menu is already visible or not
 * if is not visible yet it add the menuVisible class and, 
 * if the devices is a tablet or bigger add the menuVisible to the other elements of the page
 * if it is visible instead remove the menuVisible class on the header and, 
 * if the devices is a tablet or bigger put any other elements of the page back
*/
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

/*
 * The below function check the position of the OffsetTop of the various sections of the pages 
 * as soon as they are surpassed by the window.scrollY they active the class on the .scrollBalls changing their colors.
*/
function offsetTop_Hamburger_scrollBalls() {
	var scrollPosition = window.scrollY;
	var scrollBall = document.getElementsByClassName('scroll--ball');
	var header = document.getElementsByTagName('header')[0];
	var hamburgerLine1 = document.getElementsByClassName('hamburgerLine-1')[0];
	var hamburgerLine2 = document.getElementsByClassName('hamburgerLine-2')[0];
	var hamburgerLine3 = document.getElementsByClassName('hamburgerLine-3')[0];

	var heroSection = document.getElementsByClassName('hero--section')[0];
	var heroSectionOffsetTop = heroSection.offsetTop;
	var aboutSection = document.getElementsByClassName('about--section')[0];
	var aboutSectionOffsetTop = aboutSection.offsetTop -200;
	var workSection = document.getElementsByClassName('work--section')[0];
	var workSectionOffsetTop = workSection.offsetTop -420;
	var testimonialSection = document.getElementsByClassName('testimonial--section')[0];
	var testimonialSectionOffsetTop = testimonialSection.offsetTop -450;
	var blogSection = document.getElementsByClassName('blog--section')[0];
	var blogSectionOffsetTop = blogSection.offsetTop -450;
	
	
	if(scrollPosition >= heroSectionOffsetTop){
		if(header.className == 'menuVisible'){
			hamburgerLine1.className ='hamburgerLine-1 menuVisible';					
			hamburgerLine2.className ='hamburgerLine-2 menuVisible';					
			hamburgerLine3.className ='hamburgerLine-3 menuVisible';					
		}else{
			hamburgerLine1.className = 'hamburgerLine-1 bg-white';
			hamburgerLine2.className = 'hamburgerLine-2 bg-white';
			hamburgerLine3.className = 'hamburgerLine-3 bg-white';	
		}

		scrollBall[0].className = 'scroll--ball active';

		for (var i = 1; i < scrollBall.length ; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}
	if(scrollPosition >= aboutSectionOffsetTop){
		hamburgerLine1.className = 'hamburgerLine-1 bg-blue';
		hamburgerLine2.className = 'hamburgerLine-2 bg-blue';
		hamburgerLine3.className = 'hamburgerLine-3 bg-blue';

		for (var i = 0; i <= 1; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 2; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}
	if(scrollPosition >= workSectionOffsetTop){
		hamburgerLine1.className = 'hamburgerLine-1 bg-white';
		hamburgerLine2.className = 'hamburgerLine-2 bg-white';
		hamburgerLine3.className = 'hamburgerLine-3 bg-white';

		for (var i = 0; i <= 2; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 3; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}
	if(scrollPosition >= testimonialSectionOffsetTop){
		hamburgerLine1.className = 'hamburgerLine-1 bg-blue';
		hamburgerLine2.className = 'hamburgerLine-2 bg-blue';
		hamburgerLine3.className = 'hamburgerLine-3 bg-blue';

		for (var i = 0; i <= 3; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 4; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}	
	if(scrollPosition >= blogSectionOffsetTop){
		hamburgerLine1.className = 'hamburgerLine-1 bg-white';
		hamburgerLine2.className = 'hamburgerLine-2 bg-white';
		hamburgerLine3.className = 'hamburgerLine-3 bg-white';
		for (var i = 0; i <= 4; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}
	}	
}

/*
 * The below function check the OffsetTop of the about section (homepage)
 * as soon as the Offset is surpassed by the scrollY of the windows it activate the animation on the about--phases
 * the animation change ( is-translateY or is-translatX) depending of the device;	
 */
function offsetTop_AboutPhases(){
	var aboutSection = document.getElementsByClassName('about--section')[0];
	var aboutSectionOffsetTop = aboutSection.offsetTop;
	var aboutSectionPhasisDivs = document.getElementsByClassName('about--section-phasisDivs');
	
	var scrollPosition = window.scrollY;
	var clientHeight = document.documentElement.clientHeight;
	
	if( scrollPosition > aboutSectionOffsetTop ){
		for (var i = 0; i < aboutSectionPhasisDivs.length; i++) {
			if(window.width <= 480){
				var translateClass = 'is-translatedX';
			}else{
				var translateClass = 'is-translatedY';
			}
			(function(i) {
		        setTimeout(function() {             
	                aboutSectionPhasisDivs[i].className += 'fullWidth--content about--section-phasisDivs is-visible ' + translateClass;		
		        }, i * 100);
		    })(i);
		}
	}

}

















window.onload = function () {
	menuVisible();
	

	this.onscroll = function () {
		offsetTop_Hamburger_scrollBalls();
		offsetTop_AboutPhases();
	}
};





















    