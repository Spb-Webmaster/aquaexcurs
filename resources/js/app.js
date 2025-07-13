import './bootstrap';
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;
import {Fancybox} from "@fancyapps/ui";
Fancybox.bind("[data-fancybox]", {
    closeExisting: true,
    hideScrollbar: false,
})
import "@preline/overlay/index"; //Предварительный пользовательский интерфейс, созданный с помощью Tailwind CSS
import "slick-carousel/slick/slick"

import './script';


