<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Material</title>
</head>
<body>
    <form action="buildplan_entry.php" method="post">
    <h3>Build new Plan</h3>
    <label for="">Plan Name:</label><br>
    <input type="text" id="planname" name="planname">
    <br>
    <label for="">Cost:</label><br>
    <input type="number" id="cost" name="cost">
    <br>
    <label for="">Duration:</label><br>
    <input type="number" id="duration" name="duration">
    <br>
    <label for="">Trip#1:</label><br>
    <input type="number" id="trip1" name="trip1">
    <br>
    <label for="">Trip#2:</label><br>
    <input type="number" id="trip2" name="trip2">
    <br>
    <input type="submit" name="submit1" id="submit1">
    </form>
</body>
</html>