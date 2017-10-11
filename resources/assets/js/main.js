
/*
 * This function is about the menu,
 * when clicking on the hamburger it check if the menu is already visible or not
 * if is not visible yet it add the menuVisible class and, 
 * if the devices is a tablet or bigger add the menuVisible to the other elements of the page
 * if it is visible instead remove the menuVisible class on the header and, 
 * if the devices is a tablet or bigger put any other elements of the page back
*/
function menuVisible()
{
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
function offsetTop_Hamburger_scrollBalls() 
{
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
function offsetTop_AboutPhases()
{
	var aboutSection = document.getElementsByClassName('about--section')[0];
	var aboutSectionOffsetTop = aboutSection.offsetTop;
	var aboutSectionPhasisDivs = document.getElementsByClassName('about--section-phasisDivs');
	// console.log(aboutSectionOffsetTop);
	var scrollPosition = window.scrollY;
	var clientHeight = document.documentElement.clientHeight;
	
	if( scrollPosition > aboutSectionOffsetTop ){
		for (var i = 0; i < aboutSectionPhasisDivs.length; i++) {
			if(screen.width <= 480){
				var translateClass = 'is-translatedY';
			}else{
				var translateClass = 'is-translatedX';
			}
			(function(i) {
		        setTimeout(function() {             
	                aboutSectionPhasisDivs[i].className += 'fullWidth--content about--section-phasisDivs is-visible ' + translateClass;		
		        }, i * 300);
		    })(i);
		}
	}
}

/*
 * The below function edit the about--section-skills section
 * as soon as the offsetTop of the section is hight enough a loop add the is-visible class
 * at the same time the visibleWidth class is added to the about--section-skills-divs-logo 
 * thanks to the css this class allow the animation of the after elements 
*/
function offsetTop_AboutSkills()
{
	var scrollPosition = window.scrollY;
	var skillsSection = document.getElementsByClassName('about--section-skills')[0];
	var skillsSection_OffsetTop = skillsSection.offsetTop;
	var skillsDivs = document.getElementsByClassName('about--section-skills-divs');
	var skillsDivsLogo = document.getElementsByClassName('about--section-skills-divs-logo') 
	var clientHeight = document.documentElement.clientHeight;

	

	if( scrollPosition > skillsSection_OffsetTop - (clientHeight/1.5)){
		for (var i = 0; i < skillsDivs.length; i++) {
			(function(i){
				setTimeout(function(){
					skillsDivs[i].className = 'sectionCenter--content about--section-skills-divs is-visible';	
					skillsDivsLogo[i].className = 'about--section-skills-divs-logo mt-1 smallCircle flexCenter visibleWidth ';				
					// var width = window.getComputedStyle( document.querySelector('.skillsDivs'+[i]), ':after').getPropertyValue('width');
					// console.log(width);



				}, i * 150);
			})(i);
		}
	}
}

/*
 * The below function make the .card of the work--section in the homepage appears one after another
 * the direction of the animation depend of the class triggered by the funtion and the devices
*/
function offsetTop_homeWork()
{
	var scrollPosition = window.scrollY;
	var clientHeight = document.documentElement.clientHeight;
	var workSection = document.getElementsByClassName('work--section')[0];
	var workSectionOffsetTop = workSection.offsetTop;
	var cards = document.querySelectorAll('.work--section .card');


	

	if( scrollPosition > workSectionOffsetTop - (clientHeight/2)){
		for (var i = 0; i < cards.length; i++) {
			

			// console.log( i + translateClass);
			
			(function(i){
				setTimeout(function(){

					if(screen.width <= 480){
						cards[i].className = 'card is-visible is-translatedY';		
					}else{
						if( i % 2 == 0 ){
							cards[i].style.left = '-50px';
							cards[i].className = 'card is-visible is-translatedX';		
						}else{
							cards[i].style.left = '50px';
							cards[i].className = 'card is-visible is-translatedXReverse';		
						}
					}
				}, i * 700);							
			})(i);
		}
	}
}

/*
 * The function below takes care of the scroll of the testimonials' photo during scrolling
*/
function offsetTop_testimonial()
{
	var scrollPosition = window.scrollY;
	var screenWidth = screen.width;
	var testimonialsContainer = document.querySelector('.testimonials--container');
	var photos = document.querySelectorAll('.testimonials--container-photo');

	photos.forEach(function(photo){

		//if the photos have the class of .photoClicked they do not have to move anymore
		
		if( photo.getAttribute('class').indexOf('photoClicked') == -1 ){
		
			if( screenWidth >= 0 && screenWidth <= 479 && scrollPosition > 4300){
				testimonialsContainer.style.left = ((scrollPosition - 4650)* -1) + 'px';	
			}else if( screenWidth >= 480 && screenWidth <= 767 && scrollPosition > 3828){
				testimonialsContainer.style.left = ((scrollPosition - 3225)* -1) + 'px';	
			}else if( screenWidth >= 768 && screenWidth <= 1023 && scrollPosition > 3100){
				testimonialsContainer.style.top = ((scrollPosition - 3225)* -1) + 'px';	
			}else if( screenWidth >= 1024 && screenWidth <= 1365 && scrollPosition > 2923){
				testimonialsContainer.style.top = ((scrollPosition - 2750)* -1) + 'px';	
			}else if( screenWidth >= 1366 && screenWidth <= 1919 && scrollPosition > 2800){
				testimonialsContainer.style.top = ((scrollPosition - 3300)* -1) + 'px';	
			}else if( screenWidth >= 1920 && scrollPosition > 2600){
				testimonialsContainer.style.top = ((scrollPosition - 3550)* -1) + 'px';	
			}		
		
		}

	});

	

	
	
}

/*
 * The function below update the class of the testimonials' photo when the click event occurs
*/
function click_testimonial_photos()
{
	var testimonialsContainer = document.querySelector('.testimonials--container');
	var photos = document.getElementsByClassName('testimonials--container-photo');
	var quotes = document.querySelectorAll('.testimonials--quote');

	var photoPrev = document.querySelector('.photo-prev');
	var photoActive = document.querySelector('.photo-active');
	var photoNext = document.querySelector('.photo-next');

	Array.from(photos).forEach(function(photo){
		photo.addEventListener('click', function(){

			// add tabulation with the quotes
			var quoteRef = photo.dataset.quote;
			
			quotes.forEach(function(quote){
				var quoteId = quote.getAttribute('id'); 
				if( quoteId == quoteRef){
					quote.classList.add('active');
				}else{
					quote.classList.remove('active');
				}
			})

			// changing the state of the photos
			var siblings = photo.parentNode.children;

			Array.from(siblings).forEach(function(s){
				s.classList.remove('photo-prev');
				s.classList.remove('photo-active');
				s.classList.remove('photo-next');
				s.classList.add('photoClicked');
			})

			
			if(photo.previousElementSibling != null){
				photo.previousElementSibling.classList.add('photo-prev');	
			}
			if(photo.nextElementSibling != null){
				photo.nextElementSibling.classList.add('photo-next');
			}
			photo.classList.add('photo-active');

			//to move the photos according with the active one I set the container's position relative
			//and I've removed the pixel of the offset left and right from it
			testimonialsContainer.style.position = 'relative';
			
			if ( screen.width <= 480){
				testimonialsContainer.style.left = -(photo.offsetLeft -65) + 'px';	
			}else{
				testimonialsContainer.style.top = -(photo.offsetTop -150) + 'px';	
			}
			
			
			
			
		})
	})
}

/*
 * The below function make the .card of the blog--section in the homepage appears one after another
 * the direction of the animation depend of the class triggered by the funtion and the devices
*/
function offsetTop_homeBlog()
{
	var scrollPosition = window.scrollY;
	var clientHeight = document.documentElement.clientHeight;
	var blogSection = document.getElementsByClassName('blog--section')[0];
	var blogSectionOffsetTop = blogSection.offsetTop;
	var cards = document.querySelectorAll('.blog--section .card');

	if( scrollPosition > blogSectionOffsetTop - (clientHeight/2)){
		for (var i = 0; i < cards.length; i++) {

			(function(i){
				setTimeout(function(){

					if(screen.width <= 480){
						cards[i].className = 'card is-visible is-translatedY';		
					}else{
						if( i % 2 == 0 ){
							cards[i].style.left = '-50px';
							cards[i].className = 'card is-visible is-translatedX';		
						}else{
							cards[i].style.left = '50px';
							cards[i].className = 'card is-visible is-translatedXReverse';		
						}
					}
				}, i * 700);							
			})(i);
		}
	}
}

window.onload = function () {
	menuVisible();
	click_testimonial_photos();


	this.onscroll = function () {
		offsetTop_Hamburger_scrollBalls();
		offsetTop_AboutPhases();
		offsetTop_AboutSkills();
		offsetTop_homeWork()
		offsetTop_testimonial();
		offsetTop_homeBlog()

	}
};    