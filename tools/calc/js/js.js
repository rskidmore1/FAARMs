$(document).ready(function() {
						   
	var hash = window.location.hash.substr(1);
	var href = $('#nav li a').each(function(){ /* #nav li a activates the same in css */
		var href = $(this).attr('href');
		if(hash==href.substr(0,href.length-5)){
			var toLoad = hash+'.html #content';
			$('#content').load(toLoad) /* #content is in a div in html. This div is what changes the content via AJAX on the webpage*/
		}											
	});


	$('#nav li a').click(function(){ /* not sure yet*/
								  
		var toLoad = $(this).attr('href')+' #content'; /* not sure yet */
		$('#content').hide('slow',loadContent); /*roles up the content section quickly */ 
		$('#load').remove(); /*not sure what this does*/
		$('#wrapper').append('<span id="load">LOADING...</span>'); /* #wrapper holds the header. span appends the #wrapper */ 
		$('#load').fadeIn('normal');  /* fades in load gif */
		window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5); /*not sure yet */ 
		function loadContent() {
			$('#content').load(toLoad,'',showNewContent()) /* loads new content */
		}
		function showNewContent() {
			$('#content').show('normal',hideLoader()); /* shows new content. Not sure why hideLoader is above where the function is declared*/ 
		}
		function hideLoader() {
			$('#load').fadeOut('normal'); /* hides #load at a normal speed */ 
		}
		return false;
		
	});
	$('div').click(function(){
		$(this).animate({left: '+=10px'}, 500) 
		
	}); 
		
});