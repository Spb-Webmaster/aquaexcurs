export function uhpv(key){
    setTimeout(function () {

            var elem = document.createElement('script');
          //  elem.type = 'text/javascript';
            elem.src = '/js/uhpv.js';
            document.getElementsByTagName('body')[0].appendChild(elem);


    }, 1000);

}
