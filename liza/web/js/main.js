$(document).ready(function(){
    $(document).on('beforeSubmit', 'form#contactForm', function () {
       var form = $(this);

       if(form.find('.has-error').length) {
           return false;
       }

       $.ajax({
           url: form.attr('action'),
           type: 'post',
           data: form.serialize(),
           success: function (response) {
               $('.modal-body').html("<h5>Ваша заявка успешно отправлена</h5>");
               setTimeout(function(){
                   $('.modal').modal('hide')
               }, 2000);
           },
           
           error: function () {
               console.log('error');
               $('.modal-body').html("<h5>Произошла ошибка, повторите снова</h5>");
               setTimeout(window.location.reload.bind(window.location), 2000);
           }
       });
       return false;
    });
});