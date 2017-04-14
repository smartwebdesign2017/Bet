$('#accordion_results, #accordion_fixtures').accordion({
    fillSpace:true,
    collapsible:true,
    active:false
});
//$('#accordion_fixtures').accordion();

//submit login details
$('#log_btn').click(function () {

    //grab values of the login form
    var log_username = $('#log_username').val();
    var log_pin = $('#log_pin').val();

    //check if user inputted details
    $.post('php/bet_login.php',{username:log_username, pin:log_pin},function (data) {
        $('#alert').html(data).slideDown().delay(1000).slideUp();
    });

});

//submit register details
$('#register_user').click(function () {

    //grab register form details
    var name = $('#name').val();
    var username = $('#username').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var pin = $('#pin').val();
    var cpin = $('#cpin').val();

    //if all details are filled in, send the details to the bet_register.php
    $.post('php/bet_register.php',{name:name, username:username, email:email, phone:phone, pin:pin, cpin:cpin},function (data) {
        $('#alert_reg').html(data).slideDown().delay(1000).slideUp();
    });

});