export function custom_input_integer() {

    //custom_input_integer__js
    $('body').on('input', '.custom_input_integer__js', function(){
        this.value = this.value.replace(/[^0-9]/g, '');
    });
}
