
$(document).ready(function() {

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

    /* Select Picker */
    $('.selectpicker').selectpicker(
        {
            liveSearchPlaceholder: 'Placeholder text'
        }
    );

    //FAQ Accordion
    const items = document.querySelectorAll(".accordion a");

    function toggleAccordion() {
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('active');
    }
    
    items.forEach(item => item.addEventListener('click', toggleAccordion));
});