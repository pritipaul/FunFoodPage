<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Food Order-page</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap");

    *,
    body {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
    }

    html,
    body {
        height: 100%;
        background-color: #152733;
        /* overflow: hidden; */
    }

    .form-holder {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 100vh;
    }

    .form-holder .form-content {
        position: relative;
        text-align: center;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
        padding: 60px;
    }

    .form-content .form-items {
        border: 3px solid #fff;
        padding: 40px;
        display: inline-block;
        width: 100%;
        min-width: 540px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        text-align: left;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .form-content h3 {
        color: #fff;
        text-align: left;
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-content h3.form-title {
        margin-bottom: 30px;
    }

    .form-content p {
        color: #fff;
        text-align: left;
        font-size: 17px;
        font-weight: 300;
        line-height: 20px;
        margin-bottom: 30px;
    }

    .requires-validation {
        display: flex;
        flex-direction: column;
    }

    .form-select {
        margin: 10px;
        height: 50px;
        border-radius: 10px;
    }

    .form-button {
        display: block;
        margin: auto;
        font-size: 30px;
    }

    .btn {
        width: 200px;
        height: 30px;
    }
    </style>
    <script>
    (function() {
        "use strict";
        const forms = document.querySelectorAll(".requires-validation");
        Array.from(forms).forEach(function(form) {
            form.addEventListener(
                "submit",
                function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
    </script>
</head>
<?php
    include "./server.php";
    if (isset($_POST['button20'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $district = $_POST['district'];
        $pin = $_POST['pin'];
        $state = $_POST['state'];
        $food = $_POST['food'];
        $number = $_POST['number'];

        $sql = "INSERT INTO `foodbloging` . `order-place` (`name`, `email`, `phone`, `address`, `district`, `pin`, `state`, `food`, `number`) VALUES ('$name', '$email', '$phone', '$address', '$district', '$pin', '$state', '$food', '$number')";

        if (($con->query($sql) == true) && ($state == "Cash on Delivery")) {
            ?>
    <script>
        
        <script>
            <?php
        }
        elseif (($con->query($sql) == true) && ($state == "Online Payment")) {
            include "card.php";
            exit;
        }
        else {           
        ?>

<script>
swal("Click on either the button or outside the modal.").then((value) => {
    swal(`The returned value is: ${value}`);
});
</script>
<?php    
    }
	// $con->close();
    }
?>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Food Order Place for Home Delivery</h3>
                        <p>Fill in the data below.</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="requires-validation"
                            novalidate>

                            <input type="text" class="form-select mt-3" name="name" placeholder="Entered Your Name"
                                value="" required>

                            <input type="email" class="form-select mt-3" name="email"
                                placeholder="Entered Your Email-id" value="" required>

                            <input type="text" pattern="\d*" maxlength="10" class="form-select mt-3" name="phone"
                                placeholder="Entered Your Phone Number" value="" required>

                            <input type="text" class="form-select mt-3" name="address"
                                placeholder="Entered Your Proper Address" value="" required>

                            <input type="text" class="form-select mt-3" name="district"
                                placeholder="Entered Your District Name" value="" required>

                            <input type="number" class="form-select mt-3" name="pin"
                                placeholder="Entered the Pin Number" value="" required>

                            <select class="form-select mt-3" name="state" required>
                                <option selected disabled value="">Payment</option>
                                <option value="Online Payment">Online Payment</option>
                                <option value="Cash on Delivery">Cash on Delivery</option>
                            </select>

                            <input type="text" class="form-select mt-3" name="food" placeholder="Food Name" value=""
                                required>

                            <input type="number" class="form-select mt-3" name="number"
                                placeholder="Entered the food orderd Number" value="" required>

                            <div class="form-button mt-3">
                                <button id="submit" name="button20" type="submit" class="btn btn-primary">Place
                                    Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>