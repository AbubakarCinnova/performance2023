// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

jQuery(document).ready(function($){

//****************************************************
// ************  Boot strap3 Lightbox Start *********

    // delegate calls to data-toggle="lightbox"
    $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
        event.preventDefault();
        return $(this).ekkoLightbox({
            onShown: function() {
                if (window.console) {
                    return console.log('Checking our the events huh?');
                }
            },
            onNavigate: function(direction, itemIndex) {
                if (window.console) {
                    return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                }
            }
        });
    });

    // navigateTo
    $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
        event.preventDefault();

        var lb;
        return $(this).ekkoLightbox({
            onShown: function() {

                lb = this;

                $(lb.modal_content).on('click', '.modal-footer a', function(e) {

                    e.preventDefault();
                    lb.navigateTo(2);

                });

            }
        });
    });

//**************************************************
//************  Boot strap3 Lightbox End ***********


//**************************************************
//************  Owl Caraousal start ******************

    $("#owl-example").owlCarousel();

//**************************************************
//************  Owl Caraousal End ******************





});



