<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>counter</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">  
    <script src="script.js" defer></script>      
</head>
<body>
    <div class="wrapper">
        <div class="counter">
            <p class="value">0</p>
            <div class="counter-bottoms">
                <button type="buttom" class="btn increase">Increase</button>
                <button type="buttom" class="btn reset">Reset</button>
                <button type="buttom" class="btn decrease">Decrease</button>
                <div class="increaseby">
                    <label for="increaseby-value">Increase by:</label>
                    <input type="text" id="increaseby-value" value="1">
                </div>
            </div>
        </div>
    </div>
</body>
</html>