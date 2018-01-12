$(function () {
    $('.main').on('click', '.del', function () {
        let id = $(this).attr('id');
        $.ajax('/shop/index.php/categoryManage/delete', {
            data: {id},
            context: this,
            success: function (data) {
                if (data == 'ok') {
                    $(this).closest('tr').remove();
                }else if(data == 'error'){
                    console.log('error');
                }
            }
        })
    })
});