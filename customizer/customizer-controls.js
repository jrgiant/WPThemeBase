(function (customize) {
    //console.log('customize.bind.ready');
    customize.bind('ready', () => {
        //console.log('customize.bind.ready');
        customize('show_top_bar', setting => {
            //console.log('customize.showtopbar called')
            //originally from customize-controls.js from twentyseventeen
            var visibility = function (control) {
                //console.log('visibitlity called')
            };
            var showSubItems = () => {
                var isShown = ('show' === setting.get());
                customize.control('top_bar_left', control => {
                    showMe(control, isShown);
                });
                customize.control('top_bar_right', control => {
                    showMe(control, isShown);
                });
            } //./showsubitems
            showSubItems();
            setting.bind(showSubItems);
        });//./customize('show_top_bar'...)
        customize('header_media_type', header=> {
            //TODO: create function to either show the Video control or the Image control
            //TODO: fix error resulting inc capital I for Image
            var showMediaTypes = () => {
                var typeShown = header.get();
                switch (typeShown){
                    case 'video':
                        console.log(`video shown`);
                        break;
                    case 'image':
                        console.log(`image shown`);
                        break;
                }
            }
            showMediaTypes();
            header.bind(showMediaTypes);
        });//./customize('header_media_type')

    }) //./customize.bind(ready)
    function showMe(control, isShown) {
        if (isShown) {
            control.container.slideDown(180);
        }
        else {
            control.container.slideUp(180);
        }
    }
}(wp.customize));