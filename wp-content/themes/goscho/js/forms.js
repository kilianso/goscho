window.addEventListener('load', function() {
    var  regForms = document.querySelectorAll('article.post');

    regForms.forEach(function (el, index){
        var counter = el.querySelector('.event__image__counter .counter--verfuegbar'),
            form = el.querySelector('.event__registration form'),
            submit = el.querySelector('.event__registration .submit'),
            successMessage = el.querySelector('.event__registration .success');
        
        submit.addEventListener('click', (function(e){
            e.preventDefault();
            submit.innerHTML = 'Bitte warten...';
            submitForm(form, submit, counter, successMessage);
        }));
    });
    
    function submitForm(form, submit, counter, successMessage) {
        var url = './wp-json/gf/v2/forms/1/submissions',
            username = '0867d2fa-2164-4593-a568-54f6f36e1c3f',
            password = 'cs_4463fa23b35769f2916947dcf1aa07b6eb1b65bc',
            formData = new FormData(form);

            xhr = new XMLHttpRequest();

        xhr.open('POST', url);

        xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password));
        xhr.send(formData);

        xhr.onload = function() {
            if (xhr.status != 200) {
                submit.innerHTML = 'Reservieren';
                alert("Hoppla! Etwas ist schief gelaufen. Bitte überprüfen Sie Ihre Eingaben und versuchen Sie es erneut.");
                console.log(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                form.classList.add('disabled');
                successMessage.classList.add('is-visible');
                
                submit.parentNode.removeChild(submit);
                counter.innerHTML -= form.querySelector('input[name="input_1"]').value;

                var disableInputs = form.querySelectorAll('input');
                disableInputs.forEach(function(el, index) {
                    el.setAttribute('disabled', '')
                });
                alert("Vielen Dank für Ihre Reservation! Sie erhalten demnächst eine Bestätigungs-Email.");
                console.log(`Done, got this: ${xhr.response}`);
            }
        };

        xhr.onerror = function() {
            alert("Hoppla! Etwas ist schief gelaufen. Bitte überprüfen Sie Ihre Eingaben und versuchen Sie es erneut.");
            console.log(xhr.response);
        };
    }
});
