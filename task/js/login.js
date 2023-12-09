    flag=0;
   $(document).ready(function(){
       $('#user').focus(function(){
           $('#userp').css('opacity','1');
       });
       $('#user').blur(function(){
           $('#userp').css('opacity','0.8');
       });
       $('#password').focus(function(){
           $('#psword').css('opacity','1');
       });
       $('#password').blur(function(){
           $('#psword').css('opacity','0.8');
       });
       
      
    $("#psword").click(function(){
        flag=flag+1;
        if(flag%2==0){

        $(this).attr('class','input-group-text fa fa-eye');
        $('#password').attr('type','text');
            }
        else{
        $(this).attr('class','input-group-text fa fa-eye-slash');
        $("#password").attr('type','password');
        }
});
});
