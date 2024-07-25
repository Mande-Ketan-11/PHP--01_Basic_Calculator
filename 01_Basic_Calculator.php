<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Calculator</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body 
            {
                background-color: #2c2c2c; 
                color: #ecf0f1;
                font-family: 'Times New Roman', Times, serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .calculator 
            {
                background-color: #000000;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                width: 300px;
            }
            .calculator h2 
            {
                text-align: center;
                margin-bottom: 20px;
                color: #ffffff;
            }
            .result 
            {
                text-align: center;
                margin-top: 20px;
                color: goldenrod;
                font-weight: bold; 
            }
            .form-control, .btn 
            {
                border-radius: 0.25rem;
            }
            .btn-primary 
            {
                background-color: #007bff;
                border: none;
            }
            .btn-primary:hover 
            {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="calculator">
            <h2>PHP Calculator</h2>
            <form method="post" action="">
                <div class="form-group">
                    <label for="num1">First Number:</label>
                    <input type="number" class="form-control" id="num1" name="num1" required>
                </div>
                <div class="form-group">
                    <label for="num2">Second Number:</label>
                    <input type="number" class="form-control" id="num2" name="num2" required>
                </div>
                <div class="form-group">
                    <label for="operation">Operation:</label>
                    <select id="operation" name="operation" class="form-control" required>
                        <option value="add">Add</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="divide">Divide</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Calculate</button>
            </form>

            <?php
                if (isset($_POST['submit'])) 
                {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'];
                    $result = "";

                    switch ($operation) 
                    {
                        case 'add':
                            $result = $num1 + $num2;
                            break;
                        case 'subtract':
                            $result = $num1 - $num2;
                            break;
                        case 'multiply':
                            $result = $num1 * $num2;
                            break;
                        case 'divide':
                            if ($num2 != 0) 
                            {
                                $result = $num1 / $num2;
                            } 
                            else 
                            {
                                $result = "Error: Division by zero!";
                            }
                            break;
                        default:
                            $result = "Invalid operation selected";
                    }
                    echo "<div class='result'><h3>Result: $result</h3></div>";
                }
            ?>
        </div>
    </body>
</html>