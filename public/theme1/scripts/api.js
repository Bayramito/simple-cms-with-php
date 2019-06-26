function contact(formId){
    var data = $(formId).serialize();
               $.post(api_url + '/contact',data,function (response) {
                   if(response.error){
                       $('#contact-form-success').hide();
                       $('#contact-form-error').show().html(response.error);
                   }else{
                       $('#contact-form-error').hide()
                       $('#contact-form-success').show().html(response.success);
                       $(formId + ' input, ' + formId + ' textarea').val('');
                   }
               },'json');
}