/* Set the width of the side navigation to 250px */
function openNav() {
	//document.getElementById("mySidenav").style.width = "250px";
	//document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	//transform: translate(-100%, 0%);
	// $('main').css('opacity', '0.7');
	// $('footer').css('opacity', '0.7');
	$('body').css('position','fixed');
    $('#mySidenav').addClass('show');
    // $('.navbar-toggler.icon').find('fa-bars').removeClass('fa-bars');
    // $('.navbar-toggler.icon').find('i').addClass('fa-times');
	// $('#mySidenav').css({
	// 	'-webkit-transform': 'translate(0%, 0%)',
	// 	'-moz-transform': 'translate(0%, 0%)',
	// 	'-ms-transform': 'translate(0%, 0%)',
	// 	'-o-transform': 'translate(0%, 0%)',
	// 	transform: 'translate(0%, 0%)',
	// });
}

/* Set the width of the side navigation to 0 */
function closeNav() {
	// $('main').css('opacity', '1');
	// $('footer').css('opacity', '1');
	$('body').css('position','relative');
    $('#mySidenav').removeClass('show');
    // $('.navbar-toggler.icon').find('i').removeClass('fa-times');
    // $('.navbar-toggler.icon').find('i').addClass('fa-bars');
	// $('#mySidenav').css({
	// 	'-webkit-transform': 'translate(-100%, 0%)',
	// 	'-moz-transform': 'translate(-100%, 0%)',
	// 	'-ms-transform': 'translate(-100%, 0%)',
	// 	'-o-transform': 'translate(-100%, 0%)',
	// 	transform: 'translate(-100%, 0%)',
	// });
}

let isOpen = false;

function toggleNav() {
	if (isOpen) closeNav();
	else openNav();

	isOpen = !isOpen;
}
