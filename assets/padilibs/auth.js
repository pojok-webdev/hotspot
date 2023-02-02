$('#btnchangepassword').click(function(){
    $('#changepassword').modal()
  })
  $('#btnUpdatePassword').click(function(){
    console.log('update passwore')
    if($('#password').val()!==$('#confirmpassword').val()){
      alert('Isian password tidak sama')
    }else{
      $.ajax({
        url:'/users/changepassword',
        type:'post',
        dataType:'json',
        data:{
          password:$('#password').val()
        }
      })
      .done(res=>{
        console.log('Success update password',res)
      })
      .fail(err=>{
        console.log('Error update password',err)
      })
    }
  })
