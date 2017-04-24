
$(document).ready(function () {	
    $('#wizard').smartWizard();

    function onFinishCallback() {
        $('#wizard').smartWizard('showMessage', 'Finish Clicked');
    }
});


$(document).ready(function () {	
    $('#wizard1').smartWizard({transitionEffect: 'slide'});

});

