<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="Pizza-form.js"></script>
    <title>Grants Pizza</title>
</head>

<body>
    <!-- The button to open the form -->
    <div id="button-container">
        <button class="start-form-button" onclick="showForm()">Start your order from Grant's Pizza!</button>
        <img src="./Pizza.png">
    </div>

    <div id="overlay"></div>

    <!-- This is the interactive form used by potential customers to order a pizza -->
    <div id="form-container">

        <!-- This is the button used to close the form -->
        <button id="x" onclick="hideForm()">X</button>

        <form method="post">
            <form id="pizza-form">

                <label for="delivery">Delivery:</label>
                <input type="radio" id="delivery" name="delivery" value="yes" required>
                <label for="delivery">Yes</label>
                <input type="radio" id="delivery" name="delivery" value="no" required>
                <label for="delivery">No</label>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="size">Size:</label>
                <select id="size" name="size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>

                <label for="toppings">Toppings:</label>
                <input type="checkbox" id="toppings" name="toppings[]" value="pepperoni">
                <label for="toppings">Pepperoni</label>
                <input type="checkbox" id="toppings" name="toppings[]" value="green olives">
                <label for="toppings">Green Olives</label>
                <input type="checkbox" id="toppings" name="toppings[]" value="bacon">
                <label for="toppings">Bacon</label>
                <div>
                    <input type="submit" value="Place Order">

                    <?php
                    require_once ('database.php');
                    $database = new Database(); // creates a new database
                    if (isset($_POST) && !empty($_POST)) {
                        $delivery = $_POST['delivery'];
                        $name = $_POST['names'];
                        $address = $_POST['address'];
                        $size = $_POST['size'];
                        $toppings = $_POST['toppings'];
                        $res = $database->create($delivery, $names, $size, $toppings);
                        if($res){
                            echo "<p>Thank you for your order!</p>";
                        }
                        else{
                             echo "<p>Oops something went wrong! Please try again</p>";
                    }
                }
                    ?>
                </div>

            </form>
    </div>

    <footer>&copy;Grant's Pizza 2023</footer>
</body>
</html>