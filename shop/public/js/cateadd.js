$(function(){
    let sub = $('button:submit');
    sub.on('click',function(e){
        let data = $('form').serialize();
        // let formdata = new FormData($('form')[0]);
        $.ajax('/shop/index.php/categoryManage/add',{
            data:data,
            success:function(data){
                // location.href = '/shop/index.php/categoryManage/show';
            }
        });
        return false;
    })
});