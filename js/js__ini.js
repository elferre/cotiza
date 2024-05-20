 $(function() {
     $('.wifeo_rubrique > p').click(function() {
         if ($(this).next().is(':visible')) { $('.wifeo_sousmenu').slideUp(300); } else {
             $('.wifeo_sousmenu').slideUp(300);
             $(this).next().slideToggle(300);
         }
     });
 });