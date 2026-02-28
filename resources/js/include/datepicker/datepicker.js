import {Datepicker} from 'vanillajs-datepicker';
import ru from 'vanillajs-datepicker/locales/ru';
import moment from 'moment'; // Или подключите глобально через CDN

Object.assign(Datepicker.locales, ru);


export function topPositionLabel(elem) {
    // Обработчик события изменения даты
    elem.addEventListener('changeDate', function () {
        const parentEl = elem.closest('.input-date-picker')
        const label = parentEl.querySelector('label')
        label.classList.add('position_top')

    });
}


export function datepicker_excursion_date() {


    const elem = document.querySelector('input[name="excursion_date"]');

    if (elem) {


        const today = new Date(); // Получаем сегодняшнюю дату
        const dates = JSON.parse(elem.dataset.dates); // Преобразуем JSON обратно в массив

        // Получаем текущую дату
        let now = moment();
        const Y = now.format('YYYY')
    /*    console.log('------')
          console.log(elem.dataset.dates)*/
        new Datepicker(elem, {
            /** ПОРЯДОК имеет значение !!!!!! */
            title: "Дата экскурсии",
            datesDisabled: dates,
            format: "dd.mm.yyyy",
            language: "ru",
            minDate: today.toLocaleDateString(),
            maxDate: "01.10." + Y,
            autohide: true,

        });

        topPositionLabel(elem)
    }


}




