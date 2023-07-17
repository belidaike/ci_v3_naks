<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="<?= base_url('persons/update/'.$persons->id)?>" method="post">
            <div>
                <label for="personFirst">Firstname</label>
                <input type="text" value="<?= $persons->FIRSTNAME?>" name="personFirst">
            </div>
            <div>
                <label for="personLast">Lastname</label>
                <input type="text" value="<?= $persons->LASTNAME?>" name="personLast">
            </div>
            <div>
                <label for="personAdd">Address</label>
                <input type="text" value="<?= $persons->ADDRESS?>" name="personAdd">
            </div>
            <div>
                <label for="personBirth">BirthDay</label>
                <input type="date" value="<?= $persons->BIRTHDAY?>" name="personBirth">
            </div>
            <div>
                <label for="contactNo">Contact No</label>
                <input type="text" value="<?= $persons->CONTACTNO?>" name="contactNo">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>