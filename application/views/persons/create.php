<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="<?= base_url('persons/store')?>" method="post">
            <div>
                <label for="personFirst">Firstname</label>
                <input type="text" required name="personFirst">
            </div>
            <div>
                <label for="personLast">Lastname</label>
                <input type="text" required name="personLast">
            </div>
            <div>
                <label for="personAdd">Address</label>
                <input type="text" required name="personAdd">
            </div>
            <div>
                <label for="personBirth">BirthDay</label>
                <input type="date" required name="personBirth">
            </div>
            <div>
                <label for="contactNo">Contact No</label>
                <input type="number" required name="contactNo">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>