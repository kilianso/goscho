window.addEventListener('load', function() {
    $(function() {
       var  regForms = $('.event__registration');
            console.log(regForms);
    
       regForms.each(function (){
           var  form = $(this).find('.form'),
                submit = $(this).find('.submit');
            submit.on('click', submitForm);
       });
    });
    
    function submitForm() {
        console.log('clicked');
        var settings = {
            method: 'POST',
            url: 'https://goscho.local/wp-json/gf/v2/forms/1/submissions',
            headers: {
                "Authorization": "Basic " + btoa('0867d2fa-2164-4593-a568-54f6f36e1c3f' + ":" + 'cs_4463fa23b35769f2916947dcf1aa07b6eb1b65bc')
            },
            data: "formData"
        }
            
        $.ajax(settings).done(function (response) {
            console.log(response);
        });
    }
});
