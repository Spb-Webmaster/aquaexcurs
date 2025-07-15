import {private_excursion_datepicker} from './include/flatpick';
import {reviews_carousel} from './include/slick';
import {custom_click} from './include/custom_click';

document.addEventListener('DOMContentLoaded', function () {
    private_excursion_datepicker() // календарь индивидуальных туров (экскурсий)
    reviews_carousel() // отзывы
    custom_click() // custom_click
})

