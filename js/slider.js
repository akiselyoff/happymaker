$(document).ready(function() {
$(function() {       //slider
        var images = ['img/slider/garland.JPG','img/slider/pastelE.jpg','img/slider/printE.jpg',
            'img/slider/foil.jpg','img/slider/bubble.jpg','img/product/konfetti/konfeti_3.jpg', 'img/slider/diod.jpg'];
        var titles = ['Гирлянды из шаров','Шары из латекса', 'Печать на шарах','Фольгированные шары','Шары Bubble','Шары с конфетти', 'Светящиеся шары'];
        var link = ['garland.php','latex.php','services.php','foil.php','bubble.php','latex.php','latex.php'];
        var slide = 0;
        $('#slider').css('background-image','url(' + images[slide] + ')');
        $('#slider h2').text(titles[slide]);
        $('#slider .more').attr('href', link[slide]);

        $('.next').click(function() {
            slide++;
            if (slide >= images.length)  {
                slide=0;
            }
            $('#slider').css('background-image','url(' + images[slide] + ')');
            $('#slider h2').text(titles[slide]);
            $('#slider .more').attr('href', link[slide]);
        });
        $('.prev').click(function() {
            slide--;
            if (slide < 0)  {
                slide = images.length-1;
            }
            $('#slider').css('background-image','url(' + images[slide] + ')');
            $('#slider h2').text(titles[slide]);
            $('#slider .more').attr('href', link[slide]);

        });
    });
});
