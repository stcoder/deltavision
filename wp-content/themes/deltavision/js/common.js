var app = {
    mainMenu: null,
    _navItemCorrect: function(transit) {
        transit = transit || false;
        if (!app.mainMenu) {
            app.mainMenu = $('#main_menu');
        }

        var w = app.mainMenu.width();
        var i = app.mainMenu.find('li');
        var iw = w / i.length;

        i.each(function() {
            if (transit) {
                $(this).find('a').transition({width: iw});
            } else {
                $(this).find('a').css({width: iw});
            }
        });
        app.mainMenu.transition({opacity: 1});
    }
};