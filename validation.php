<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/boostrap.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.js"></script>
</head>
<script>
    $(document).ready(function() {
        $('#form1').validate({
            rules: {
                fn: {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    // lettersonly: true,
                    email: true,
                    pattern:/^[0-9]{10} $/
                }
            },
            messages: {
                fn: {
                    required: "Name cannot be empty",
                    minlength: "Name must have atleat 3 characters",
                    maxlength: "Name cannot contain more than 20 characters",
                    // lettersonly: "Only Letters are allowed for name",
                    email: "invalid email address"
                   
                }
            },
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.insertAfter(element);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass('is-valid').removeClass('is-invalid');
            },
        });
    });
</script>

<body>
    <form action="a.php" method="get" id="form1">
        Enter Name: <input type="text" name="fn" id="fn1" class="form-control">
        <br>
        <input type="submit" value="Register">
    </form>
</body>

</html>