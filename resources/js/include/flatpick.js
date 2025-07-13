import flatpickr from "flatpickr"
import { Russian } from "flatpickr/dist/l10n/ru.js"

export function private_excursion_datepicker() {

    // Basic
   flatpickr('#input-flatpickr-date', {

        locale: 'ru',
        monthSelectorType: 'static',
        dateFormat: "d M Y",

    })
}
