export function custom_click(){
    $('body').on('click', '.c_click__js', function (event) {
        $(this).next('div').hide();
        $(this).hide();
        $('.c_paste__js').html($('.c_copy__js').html());
    });



}
