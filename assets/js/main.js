
$(document).ready(function() {
    $('.hero-banner.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    /* Mega menu*/
    $('#header nav').megaMenu({
        logo_align: 'left',
        links_align: 'right',
        searchBar_align: 'right',
        trigger: 'hover',
        effect: 'scale',
        mobile_settings: {
            collapse: true
        }
    });
    /* To stick navbar at top when scroll*/
    $('#header nav').scrollToFixed();

    /*smooth scrolling*/
    $('.smoothScroll').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 85
                }, 1000);
                return false;
            }
        }
    });


    //FAQ Accordion
    const items = document.querySelectorAll(".accordion .head");

    function toggleAccordion() {
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('active');
    }
    
    items.forEach(item => item.addEventListener('click', toggleAccordion));



    const inputs = document.querySelectorAll(".form-control");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

});