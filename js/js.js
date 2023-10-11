$(document).ready(function () {
    $('#toggle-menu').on('click', function () {    //menu open/close
        $('nav').slideToggle(300);
        let images = ['img/nav/menu.png', 'img/nav/close.png'];
        let menuSelect = $('#toggle-menu img').attr('src');
        if (menuSelect == images[0]) {
            $('#toggle-menu img').attr('src', 'img/nav/close.png');
        }
        else {
            $('#toggle-menu img').attr('src', 'img/nav/menu.png');
        }

    });
});

