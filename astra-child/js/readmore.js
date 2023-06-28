    jQuery($ => {
        $(document).ready(function () {
            var size_li = $(".faq-container.faqc1 .faq").length;
            var x = 5;
            $('.faq-container.faqc1 .faq:lt('+x+')').show();
            $('#loadMore').click(function () {
                x = (x+5 <= size_li) ? x+5 : size_li;
                $('.faq-container.faqc1 .faq:lt('+x+')').show();
                if(x == size_li){
                    $('#loadMore').hide();
                    $('#showLess').show();
                }
            });
            $('#showLess').click(function () {
                x = 5;
                $('.faq-container.faqc1 .faq').not(':lt('+x+')').hide();
                $('.faq-container.faqc1 .faq').not(':lt('+x+')').hide();
                $('#loadMore').show();
                $('#showLess').hide();
            });
            $('#showLess').hide();
        });
    });
	
    jQuery($ => {
        $(document).ready(function () {
            var size_li = $(".faq-container.faqc2 .faq").length;
            var x = 5;
            $('.faq-container.faqc2 .faq:lt('+x+')').show();
            $('#loadMore').click(function () {
                x = (x+5 <= size_li) ? x+5 : size_li;
                $('.faq-container.faqc2 .faq:lt('+x+')').show();
                if(x == size_li){
                    $('#loadMore').hide();
                    $('#showLess').show();
                }
            });
            $('#showLess').click(function () {
                x = 5;
                $('.faq-container.faqc2 .faq').not(':lt('+x+')').hide();
                $('.faq-container.faqc2 .faq').not(':lt('+x+')').hide();
                $('#loadMore').show();
                $('#showLess').hide();
            });
            $('#showLess').hide();
        });
    });	


