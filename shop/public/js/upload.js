$(function(){
  let uploadBtn =  $('#uploadInputFile'),
      img = $('.img-rounded'),
      hiddenInput = $('input:hidden');
  uploadBtn.on('change',function(e){
      img.attr('src','');
      let data = this.files[0];
      let reader = new FileReader();
      reader.readAsDataURL(data);
      reader.onload = function(e){
          img.attr('src',e.currentTarget.result);
          let formdata = new FormData();
          formdata.append('file',data);
          $.ajax('/shop/index.php/upload/index',{
              type:'post',
              dataType:'text',
              data:formdata,
              contentType:false,
              processData:false,
              success:function(data){
                  hiddenInput.attr('value',data);
              }
          })
      }
  })
});