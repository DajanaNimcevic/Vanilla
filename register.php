<?php
include 'includes/db_config.php';
?>
<html lang="en">
<head>
    <title>Vanilla | Registracija</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color: white">
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white" >
                    <h2 class="text-center">Registracija</h2>
                </div>
                <div class="card-body">
                    <form method="post" name="registration-form" action="register.php" id="registration-form">
                        <label for="username">Korisničko ime</label>
                        <small class="text-danger" id="username-message"></small>
                        <input type="text" class="form-control" id="username" name="username">
                        <label for="email">Email adresa</label>
                        <small class="text-danger" id="email-message"></small>
                        <input type="email" class="form-control" id="email" name="email">
                        <label for="password1">Lozinka</label>
                        <small class="text-danger" id="password1-message"></small>
                        <input type="password" class="form-control" id="password1" name="password1">
                        <label for="password2">Potvrdite lozinku</label>
                        <small class="text-danger" id="password2-message"></small>
                        <input type="password" class="form-control" id="password2" name="password2">
                        <button  type="submit" name="submit" class="btn btn-primary mt-3 text-white"><i class="fa fa-sign-in"></i> Registruj me</button>
                        <div class="alert" id="ajax-message"></div>
                        <p class="text-center">
                            Već ste registrovani? <a href="login.php">Ulogujte se.</a>
                        </p>
                    </form>
                    <div class="wrapper">
                    </div>
                    <?php
                    $nav = 0;
                    if(isset($_GET['nav']))
                        $nav = $_GET['nav'];
                    switch ($nav){
                        case 0:
                        default: echo "";
                            break;
                        case 1: echo "<span> Username already exists !</span>";
                            break;
                        case 2: echo "<span> The passwords don't match !</span>";
                            break;
                        case 3: echo "<span> Check username and password !</span>";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

    $('form').on('submit',function (e) {
        e.preventDefault();
        if(validateForm()){
            sendAjax(e.currentTarget);
        }
    })
    function validateForm() {

        var $inputs = $('input');
        var $messages = $('small');
        var isValid = true;

        for(var i=0; i<$inputs.length; i++){

            console.log($inputs[i]);
            if($inputs[i].value.trim() === '') {
                $inputs[i].classList.add('error');
                $messages[i].innerHTML = 'Ovo polje je obavezno!';
                isValid = false;
            } else {
                $inputs[i].classList.remove('error');
                $inputs[i].classList.add('success');
                $messages[i].innerHTML = '';
            }
        }

        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!regex.test($inputs[1].value)) {
            $inputs[1].classList.remove('success');
            $inputs[1].classList.add('error');
            $messages[1].innerHTML = 'Molimo Vas unesite pravilnu e-mail adresu';
            isValid = false;
        } else {
            $inputs[1].classList.remove('error');
            $inputs[1].classList.add('success');
            $messages[1].innerHTML = '';
        }

        if($inputs[2].value !== $inputs[3].value){
            $inputs[2].classList.remove('success');
            $inputs[2].classList.add('error');
            $inputs[3].classList.remove('success');
            $inputs[3].classList.add('error');
            $messages[2].innerHTML = 'Lozinke se ne podudaraju!';
            isValid = false;
        }

        return isValid;
    }
    function sendAjax(data) {

        var username = data[0].value;
        var email = data[1].value;
        var password = data[2].value;
        var ajaxMessage = document.querySelector('#ajax-message');
        var form  = document.getElementById('registration-form');

        $.ajax({
            url: 'includes/register.inc.php',
            type: 'POST',
            data: 'username='+username+'&email='+email+'&password='+password+'&js='+1,
            success: function (response) {

                if(response.error) {
                    ajaxMessage.classList.remove('alert-success');
                    ajaxMessage.classList.add('alert-danger');
                    ajaxMessage.innerHTML = response.error;

                } else {
                    ajaxMessage.classList.remove('alert-danger');
                    ajaxMessage.classList.add('alert-success');
                    ajaxMessage.innerHTML = response.success;
                    form.reset();
                }
            }
        })
    }


</script>

</body>
</html>
