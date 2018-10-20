
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
function offsetTop_Hamburger_scrollBalls_home() 
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

function offsetTop_Hamburger_scrollBalls_whitePage()
{
	var scrollPosition = window.scrollY;
	var heroHeight = document.querySelector('.hero--section').offsetHeight -200;
	var hamburger = document.querySelectorAll('.hamburger span');
	var bgWhite = document.querySelectorAll('.mainSection .bg-white');
	var bgBlue = document.querySelectorAll('.mainSection .bg-blue');
		
	if(scrollPosition > heroHeight){
		hamburger.forEach(function(line){
			line.classList.add('bg-blue');
			line.classList.remove('bg-white');
		});
	}
	if(scrollPosition < heroHeight){
		hamburger.forEach(function(line){
			line.classList.add('bg-white');
			line.classList.remove('bg-blue');
		});
	}
}

function offsetTop_hero()
{
	var scrollPosition = window.scrollY;
	var content = document.querySelector(".hero--section-content");
	var foreground = document.querySelector(".hero--section-foreground");
	var formContact = document.querySelector(".formContact");
	
	if (screen.width >= 1024) {
		if(content !== null ){
			content.style.transform = "skewY(10deg) translateY(" + scrollPosition/3 + "%)";
		}
		if(foreground !== null ){
			foreground.style.transform = "skewY(10deg) translateY(-" + scrollPosition/10 + "%)";
		}
		if(formContact !== null ){
			formContact.style.transform = "skewY(10deg) translateY(" + scrollPosition/3 + "%)";
		}
	}
}

function offsetTop_shareButtons() 
{
	var scrollHeight = document.body.scrollHeight;
	var scrollPosition = window.scrollY;
	var shareButtons = document.getElementsByClassName('shareButton-div-circle');
	var percentageScrolled = ((scrollPosition + 200 ) / scrollHeight) * 100;
	var scrollPosition = window.pageYOffset;
	var windowSize     = window.innerHeight;
	var bodyHeight     = document.body.offsetHeight;
	var scrollDistanceFromBottom = Math.max(bodyHeight - (scrollPosition + windowSize), 0);
	
	if(scrollPosition > 400 && scrollDistanceFromBottom > 700){
        for (var i = 0; i < shareButtons.length; i++) {
			
			(function(i) {
		        setTimeout(function() {   
		        	shareButtons[i].className = 'bigCircle flexCenter bg-white my-1 shareButton-div-circle visible';		         
	            }, i * 300);
		    })(i);
		}

	} else if(scrollPosition < 400 || scrollDistanceFromBottom < 700){
		for (var i = 0; i < shareButtons.length; i++) {
			
			(function(i) {
		        setTimeout(function() {   
		        	shareButtons[i].className = 'bigCircle flexCenter bg-white my-1 shareButton-div-circle';		         
	            }, i * 300);
		    })(i);
		}
	}
}

function offsetTop_Hamburger_scrollBalls() 
{
	var scrollHeight = document.body.scrollHeight;
	var scrollPosition = window.scrollY;
	var scrollBall = document.getElementsByClassName('scroll--ball');
	var percentageScrolled = ((scrollPosition + 200 ) / scrollHeight) * 100;
	
	if(percentageScrolled <= 16){
		for (var i = 0; i < scrollBall.length ; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}else if(percentageScrolled > 16 && percentageScrolled <= 31){
		scrollBall[0].className = 'scroll--ball active';

		for (var i = 1; i < scrollBall.length ; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}else if(percentageScrolled > 32 && percentageScrolled <= 47){
		for (var i = 0; i <= 1; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 2; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}else if(percentageScrolled > 48 && percentageScrolled <= 61){
		for (var i = 0; i <= 2; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 3; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}else if(percentageScrolled > 62 && percentageScrolled <= 79){
		for (var i = 0; i <= 3; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 4; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}else if(percentageScrolled > 80 && percentageScrolled <= 95){
		for (var i = 0; i <= 4; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}

		for (var i = 5; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball';
		}
	}else if(percentageScrolled > 96){
		for (var i = 0; i < scrollBall.length; i++) {
			scrollBall[i].className = 'scroll--ball active';
		}
	}

	//con else if cambiare il background dei ball depending dalla percentuale 
	//16 32 48 62 80 96
	//0  1. 2. 3. 4  5
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
					skillsDivsLogo[i].className = 'about--section-skills-divs-logo mt-1 smallCircle flexCenter';				
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
				}, i * 200);							
			})(i);
		}
	}
}

function offsetTop_PricingDivs() {
	var screenWidth = screen.width;
	var scrollPosition = window.scrollY;
	var pricingSectionsBasic = document.querySelectorAll('.pricing-sections')[0];
	var pricingSectionsStandard = document.querySelectorAll('.pricing-sections')[1];
	var pricingSectionsPremium = document.querySelectorAll('.pricing-sections')[2];
	
	var pricingSectionsFeaturesBasic = pricingSectionsBasic.querySelectorAll('ul *');
	var pricingSectionsFeaturesStandard = pricingSectionsStandard.querySelectorAll('ul *');
	var pricingSectionsFeaturesPremium = pricingSectionsPremium.querySelectorAll('ul *');
	var distanceFromTop = pricingSectionsBasic.getBoundingClientRect().top;
	
	// console.log(pricingSectionsFeaturesBasic);

	if( screenWidth >= 0 && screenWidth <= 479 && distanceFromTop < 250){
		for (var i = 0; i < pricingSectionsFeaturesPremium.length; i++) {
			(function(i){
				setTimeout(function(){
					pricingSectionsFeaturesBasic[i].style.opacity = 1;
					pricingSectionsFeaturesStandard[i].style.opacity = 1;
					pricingSectionsFeaturesPremium[i].style.opacity = 1;
				}, i * 150);
			})(i);
		}
	}else if( screenWidth >= 480 && screenWidth <= 767 && distanceFromTop < 60){
		for (var i = 0; i < pricingSectionsFeaturesPremium.length; i++) {
			(function(i){
				setTimeout(function(){
					pricingSectionsFeaturesBasic[i].style.opacity = 1;
					pricingSectionsFeaturesStandard[i].style.opacity = 1;
					pricingSectionsFeaturesPremium[i].style.opacity = 1;
				}, i * 150);
			})(i);
		}
	}else if( screenWidth >= 768 && screenWidth <= 1023 && distanceFromTop < 390){
		for (var i = 0; i < pricingSectionsFeaturesPremium.length; i++) {
			(function(i){
				setTimeout(function(){
					pricingSectionsFeaturesBasic[i].style.opacity = 1;
					pricingSectionsFeaturesStandard[i].style.opacity = 1;
					pricingSectionsFeaturesPremium[i].style.opacity = 1;
				}, i * 150);
			})(i);
		}
	}else if( screenWidth >= 1024 && screenWidth <= 1365 && distanceFromTop < 250){
		for (var i = 0; i < pricingSectionsFeaturesPremium.length; i++) {
			(function(i){
				setTimeout(function(){
					pricingSectionsFeaturesBasic[i].style.opacity = 1;
					pricingSectionsFeaturesStandard[i].style.opacity = 1;
					pricingSectionsFeaturesPremium[i].style.opacity = 1;
				}, i * 150);
			})(i);
		}
	}else if( screenWidth >= 1366 && screenWidth <= 1919 && distanceFromTop < 345){
		for (var i = 0; i < pricingSectionsFeaturesPremium.length; i++) {
			(function(i){
				setTimeout(function(){
					pricingSectionsFeaturesBasic[i].style.opacity = 1;
					pricingSectionsFeaturesStandard[i].style.opacity = 1;
					pricingSectionsFeaturesPremium[i].style.opacity = 1;
				}, i * 150);
			})(i);
		}
	}else if( screenWidth >= 1920 && scrollPosition > 2600 && distanceFromTop < 350){
		for (var i = 0; i < pricingSectionsFeaturesPremium.length; i++) {
			(function(i){
				setTimeout(function(){
					pricingSectionsFeaturesBasic[i].style.opacity = 1;
					pricingSectionsFeaturesStandard[i].style.opacity = 1;
					pricingSectionsFeaturesPremium[i].style.opacity = 1;
				}, i * 150);
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
	var testimonialsSection = document.querySelector('.testimonial--section');
	var testimonialsContainer = document.querySelector('.testimonials--container');
	var photos = document.querySelectorAll('.testimonials--container-photo');
	var distanceFromTop = testimonialsSection.getBoundingClientRect().top
	//if the testimonialsContainer have the class of .photoClicked they do not have to move anymore
	if( testimonialsContainer.getAttribute('class').indexOf('photoClicked') == -1 ){
		
		
		if( screenWidth >= 0 && screenWidth <= 479 && distanceFromTop < 500){
			testimonialsContainer.style.left = (distanceFromTop * -1) + 'px';
		}else if( screenWidth >= 480 && screenWidth <= 767 && distanceFromTop < 250){
			testimonialsContainer.style.left = (distanceFromTop * -1.5) + 'px';
		}else if( screenWidth >= 768 && screenWidth <= 1023 && distanceFromTop < 1000){
			testimonialsContainer.style.top = (distanceFromTop * -0.5) + 'px';
		}else if( screenWidth >= 1024 && screenWidth <= 1365 && distanceFromTop < 750){
			testimonialsContainer.style.top = (distanceFromTop * -0.5) + 'px';
		}else if( screenWidth >= 1366 && screenWidth <= 1919 && distanceFromTop < 800){
			testimonialsContainer.style.top = (distanceFromTop * -1) + 'px';
		}else if( screenWidth >= 1920 && scrollPosition > 2600 && distanceFromTop < 1000){
			testimonialsContainer.style.top = (distanceFromTop * -0.5) + 'px';
		}

		// if( screenWidth >= 0 && screenWidth <= 479 && scrollPosition > 5300){
		// 	testimonialsContainer.style.left = ((scrollPosition - 6100)* -1) + 'px';	
		// }else if( screenWidth >= 480 && screenWidth <= 767 && scrollPosition > 3828){
		// 	testimonialsContainer.style.left = ((scrollPosition - 5250)* -1) + 'px';	
		// }else if( screenWidth >= 768 && screenWidth <= 1023 && scrollPosition > 3100){
		// 	testimonialsContainer.style.top = ((scrollPosition - 5150)* -1) + 'px';	
		// }else if( screenWidth >= 1024 && screenWidth <= 1365 && scrollPosition > 2923){
		// 	testimonialsContainer.style.top = ((scrollPosition - 4750)* -1) + 'px';	
		// }else if( screenWidth >= 1366 && screenWidth <= 1919 && scrollPosition > 2800){
		// 	testimonialsContainer.style.top = ((scrollPosition - 4550)* -1) + 'px';	
		// }else if( screenWidth >= 1920 && scrollPosition > 2600){
		// 	testimonialsContainer.style.top = ((scrollPosition - 4650)* -1) + 'px';	
		// }		
	
	}
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


			testimonialsContainer.classList.add('photoClicked');

			// changing the state of the photos
			var siblings = photo.parentNode.children;

			Array.from(siblings).forEach(function(s){
				s.classList.remove('photo-prev');
				s.classList.remove('photo-active');
				s.classList.remove('photo-next');
				
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
	var minutesToReads = document.getElementsByClassName('card--caption-CatnDate-minutesToRead-fg');
	var clientHeight = document.documentElement.clientHeight;
	
	
	if( scrollPosition > blogSectionOffsetTop - (clientHeight/2)){
		for (var i = 0; i < cards.length; i++) {

			(function(i){
				setTimeout(function(){
					// get the minutes that any blog post need to be read and with the number chage the style.transition in second
					minutesToReadsClassName = minutesToReads[i].className;
					var minutes = parseInt(minutesToReadsClassName, 10);
					
					if(screen.width <= 480){
						cards[i].className = 'card is-visible is-translatedY';		
						minutesToReads[i].transitionDuration = minutes + "s";	
						minutesToReads[i].style.width = '100%';
					}else{
						if( i % 2 == 0 ){
							cards[i].style.left = '-50px';
							cards[i].className = 'card is-visible is-translatedX';		

						}else{
							cards[i].style.left = '50px';
							cards[i].className = 'card is-visible is-translatedXReverse';		
						}
						minutesToReads[i].style.transitionDuration = minutes + "s";	
						minutesToReads[i].style.width = '100%';
					}
	
				}, i * 200);							
			})(i);
		}
	}
}

// the following function add the animation at the label in the forms
function formBehaviour()
{
	var labelStayHigh = false;
	formControl = document.querySelectorAll('.form-control');
	
	formControl.forEach(function(form){
		var label = form.children[0];
		var input = form.children[1];
		
		
		
		input.onfocus = function(){
			var label = form.children[0];
			label.style.top = 0;
			label.style.left = 0;
			label.style.fontSize = "0.5rem";
		}
		label.onclick = function(){
			var label = form.children[0];
			label.style.top = 0;
			label.style.left = 0;
			label.style.fontSize = "0.5rem";
		}

	});
}

// The following function increase and descrease the size of the image on the detail page
function enlargeClickable(){
	var clickables = document.querySelectorAll('.clickable');
	clickables.forEach(function(clickable){
		
		clickable.onclick = function (){
			if (clickable.classList.contains('is-enlarged')) {
				clickable.style.overflow = 'auto';
				clickable.classList.remove('is-enlarged');
			}else{
				clickable.classList.add('is-enlarged');
			}
		}

	})
}

function showPopUp(){
	var screenWidth = screen.width;
	var popUp = document.getElementById('popUpDelayed');
	var popUpOffSetTop = popUp.offsetTop;
	
	setInterval(function(){ 
		popUp.style.opacity='1'; 
		if( screenWidth >= 0 && screenWidth <= 479){
			popUp.style.top= '25%'; 
		}else if( screenWidth >= 480 && screenWidth <= 767){
			popUp.style.top= '5%'; 
		}else if( screenWidth >= 768 && screenWidth <= 1023){
			popUp.style.top= '10%'; 
		}else if( screenWidth >= 1024 && screenWidth <= 1365){
			popUp.style.top= '10%'; 
		}else if( screenWidth >= 1366 && screenWidth <= 1919){
			popUp.style.top= '10%'; 
		}else if( screenWidth >= 1920){
			popUp.style.top= '10%'; 
		}
	}, 50000);
}

function faqActiveQuestion(){
	var questions = document.querySelectorAll('.faq-question');
	
	questions.forEach(function(question){
		console.log(question);
		// question.onclick = function () {
		question.addEventListener('click', function() {
			var sign = question.childNodes[3];
			var answer = question.parentNode.children[1];
	
			if (question.className == 'faq-question'){
				question.className = 'faq-question active';
				answer.style.display = 'inline-block';
				answer.style.padding = '1rem';
				sign.innerHTML = '-';
			} else {
				question.className = 'faq-question';
				answer.style.display = 'none';
				answer.style.padding = '0';
				sign.innerHTML = '+';
			}
		})
	})
}

window.onload = function () {
	menuVisible();
	showPopUp();
	click_testimonial_photos();
	formBehaviour();
	// enlargeGist();
	enlargeClickable();
	faqActiveQuestion();
	
	//retrieve the page name 
	var path = window.location.pathname;
	var page = path.split("/").pop();
	
	this.onscroll = function () {
		offsetTop_hero();
		if (page == '') {
			offsetTop_Hamburger_scrollBalls_home();
			offsetTop_AboutPhases();
			offsetTop_AboutSkills();
			offsetTop_homeWork()
			offsetTop_testimonial();
			offsetTop_homeBlog();
		} else if (page == 'projects') {
			offsetTop_Hamburger_scrollBalls();
			offsetTop_homeWork();
		} else if (page == 'blog' || path.includes('blogCat')) {
			// if the name of the page is 'blog' or the path includes blogCat call the method offsetTop_homeBlog()
			offsetTop_homeBlog();
			offsetTop_Hamburger_scrollBalls();
		} else if (path.includes('blog/')) {
			offsetTop_Hamburger_scrollBalls();
			offsetTop_shareButtons();
			offsetTop_Hamburger_scrollBalls();
		} else if (page == 'freelance-web-developer-london' || page == 'web-developer-upwork') {
			offsetTop_Hamburger_scrollBalls();
			offsetTop_testimonial();
			offsetTop_AboutPhases();
			offsetTop_PricingDivs();
		} else {
			offsetTop_Hamburger_scrollBalls_whitePage();
			offsetTop_Hamburger_scrollBalls();
		}
	}
};    