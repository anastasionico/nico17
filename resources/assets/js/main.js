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
				hamburgerLine1.className ='hamburgerLine1 menuVisible';					
				hamburgerLine2.className ='hamburgerLine2 menuVisible';					
				hamburgerLine3.className ='hamburgerLine3 menuVisible';					
				
			}

		}
		
	}

}



window.onload = function () {
	menuVisible();
};