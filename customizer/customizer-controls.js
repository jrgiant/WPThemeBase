(function (customize) {
    console.log('customize.bind.ready');
    customize.bind('ready', () => {
        console.log('customize.bind.ready');
        customize('show_top_bar', setting => {
            console.log('customize.showtopbar called')
            //originally from customize-controls.js from twentyseventeen
            var visibility = function (control) {
                console.log('visibitlity called')
                if ('show' === setting.get()) {
                    control.container.slideDown(180);
                } else {
                    control.container.slideUp(180);
                }
            };
            var showSubItems = () => {
                customize.control('top_bar_left', control => {
                    visibility(control);
                });
                customize.control('top_bar_right', control => {
                    visibility(control);
                });
            } //./showsubitems
            showSubItems();
            setting.bind(showSubItems);
        });
    }) //./customize.bind(ready)
}(wp.customize));