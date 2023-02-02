
<?php require 'header_view.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url("assets/css/style.css")?> " rel="stylesheet">
    <title>Contact us</title>
</head>
<body>
 
 <!--Modern JS Project #7
Contact Form using Regulkar Expressions for form validations-->
<div class="container ">
      <div class="row mt-4">
        <div class="col-md-6 mx-auto">
          <h1 style="text-align: center;">CONTACT FORM</h1>
          <hr>
          <form>
          <br> <br>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name">
              <div class="invalid-feedback">
                Name must be between 2 and 10 characters
              </div>
            </div>
            <div class="form-group">
              <label>Zipcode</label>
              <input type="text" class="form-control" id="zip" placeholder="Zipcode">
              <div class="invalid-feedback">
                Enter a valid zipcode
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" id="email" placeholder="Email">
              <div class="invalid-feedback">
                Enter a valid email
              </div>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" id="phone" placeholder="Phone Number">
              <div class="invalid-feedback">
               Enter a valid phone
              </div>
            </div>
            <input href="#" type="submit" value="Submit" class="btn btn-dark btn-block">
          </form>
        </div>
      </div>
    </div>
    <script>//Vanilla JavaScript with Regular Expressions for form validation
// Form Blur Event Listeners
document.getElementById('name').addEventListener('blur', validateName);
document.getElementById('zip').addEventListener('blur', validateZip);
document.getElementById('email').addEventListener('blur', validateEmail);
document.getElementById('phone').addEventListener('blur', validatePhone);

function validateName() {
  const name = document.getElementById('name');
  const re = /^[a-zA-Z]{2,10}$/;

  if(!re.test(name.value)){
    name.classList.add('is-invalid');
  } else {
    name.classList.remove('is-invalid');
  }
}

function validateZip() {
  const zip = document.getElementById('zip');
  const re = /^[0-9]{5}(-[0-9]{4})?$/;

  if(!re.test(zip.value)){
    zip.classList.add('is-invalid');
  } else {
    zip.classList.remove('is-invalid');
  }
}

function validateEmail() {
  const email = document.getElementById('email');
  const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

  if(!re.test(email.value)){
    email.classList.add('is-invalid');
  } else {
    email.classList.remove('is-invalid');
  }
}

function validatePhone() {
  const phone = document.getElementById('phone');
  const re = /^\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/;

  if(!re.test(phone.value)){
    phone.classList.add('is-invalid');
  } else {
    phone.classList.remove('is-invalid');
  }
} 
</script>
<?php require 'footer_view.php';
?>

</body>
</html>