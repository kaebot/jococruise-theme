(function($) {
    $(document).ready(function() {
    	$("#exp-photos").fitVids();
    	
        $('#gallery-experience .gallery-icon a').magnificPopup({
            type : 'image',
            closeOnContentClick : true,
            mainClass : 'mfp-img-mobile',
            image : {
                verticalFit : true,
                horizontalFit : true
            },
            disableOn : function() {
                if ($(window).width() < 600) {
                    return false;
                }
                return true;
            }
        });

        function advanceToGalleryIdx(idx) {
            // move orange-text to the correct bull
            $('#gallery-experience .gallery-bull').removeClass('orange-text');
            $('#gallery-experience a[href=#gallery-item-' + idx + ']').addClass('orange-text');
            // show & hide the correct dealio
            $('#gallery-experience .gallery-item:visible').hide();
            $('#gallery-experience .gallery-item-' + idx).show();
            gallery_spacing_adjust();
        }
        function moveGallery(dir) {
        	var totElem = $('#gallery-experience .gallery-item').length;
            // depends on last class being gallery-item-%d
            var visClass = $('#gallery-experience .gallery-item:visible').attr('class').split(/\s+/).pop();
            var visIdx = parseInt(visClass.split(/-/).pop());
            var nextIdx = (visIdx + 1) % totElem;
            var prevIdx = visIdx < 1 ? totElem - 1 : visIdx - 1;
            if (dir=="left") {
            	advanceToGalleryIdx(prevIdx);
            } else {
            	advanceToGalleryIdx(nextIdx);
            }
        } 


        $('#gallery-experience .gallery-bull').click(function() {
            advanceToGalleryIdx(parseInt($(this).attr('href').split(/-/).pop()));
            // so as to prevent default
            return false;
        });
        
        $('#gallery-experience .glyphicon').click(function() {
            if ('left' === $(this).attr('class').split(/\s+/).pop().split(/-/).pop()) {
                moveGallery("left");
            } else {
                moveGallery("right");
            }

        });
        jQuery('#gallery-experience').on('swipeleft',function() {
        	moveGallery("right"); // Touch metaphore is backwards from arrow metaphore
        });
        jQuery('#gallery-experience').on('swiperight',function() {
        	moveGallery("left");
        });

        // console.log($('#exp-photos .gallery .gallery-icon a'));
    });

})(jQuery);
