<!DOCTYPE HTML>
<html>
    <head>
        <style>
            form {
                display: grid;
                grid-template-columns: 250px 200px;
                grid-gap: 10px;
            }
            .output {
                margin-top: 20px;
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="text">A required text input</label>
            <input name="text" type="text" required>
            <label for="number">A number input with a max allowed value of 6</label>
            <input name="number" type="number" max="6">
            <label for="password">A password input</label>
            <input name="password" type="password">
            <label for="colour">A colour input</label>
            <input name="colour" type="color">
            <label for="radio">Some radio boxes</label>
            <div>
                <input name="radio" type="radio" value="1">
                <input name="radio" type="radio" value="2">
                <input name="radio" type="radio" value="3">
                <input name="radio" type="radio" value="4">
            </div>
            <label for="email">An email input</label>
            <input name="email" type="email">
            <label for="date">A date input</label>
            <input name="date" type="date">
            <label for="datetime-local">A datetime-local input</label>
            <input name="datetime-local" type="datetime-local">
            <input name="submit" type="submit">
            </div>
        </form>
        <div class="output">
            <?php
                if (isset($_POST["submit"])) {
                    echo "<span style='color:" . $_POST["colour"] . ";'>";
                    echo "form submitted!<br />";
                    if ($_POST["text"] == "") {
                        echo "<b>Oh, it looks like you've edited the HTML of the page.<br />You shouldn't submit a form without entering something in the required text input.</b><br />";
                    }
                    echo "Text: " . $_POST["text"] . "<br />";
                    if ($_POST["number"] > 6) {
                        echo "<b>Oh, it looks like you've edited the HTML of the page.<br />You shouldn't submit number higher than 6 if the limit is 6.</b><br />";
                    }
                    echo "Number: " . $_POST["number"] . "<br />";
                    echo "Password: " . $_POST["password"] . "<br />";
                    echo "Colour: " . $_POST["colour"] . "<br />";
                    if ($_POST["radio"] != null) {
                        echo "Radio: you picked radio box " . $_POST["radio"] . "<br />";
                    }
                    else {
                        echo "Radio: You haven't picked a radio box<br />";
                    }
                    echo "Email: " . $_POST["email"] . "<br />";
                    echo "date: " . $_POST["date"] . "<br />";
                    echo "datetime: " . $_POST["datetime-local"] . "<br />";
                    echo "</span>";
                }
                else {
                    echo "no form submitted yet.";
                }
            ?>
        </div>
    </body>
</html>