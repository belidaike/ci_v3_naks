<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            background-color: lightgray;
        }
        .asd{
            max-width: 900px;
            margin: 0 auto;
        }
        .center{
            text-align: center;
        }
        .right{
            display: flex;
            justify-content: end;
        }
        .right a{
            text-decoration: none;
            background-color: blue;
            padding: 10px 15px;
            color: white;
            margin-bottom: 100px;
            border-radius: 2em;
        }
        table{
            text-align: center;
            padding: 10px;
            width: 100%;
            background-color: white;
        }
        th{
            background-color: pink;
            padding: 15px;
        }
        td{
            padding: 10px;
            background-color: orange;
        }
    </style>

</head>
<body>
    <div class="asd">
        <div class="center"><h1>Person List</h1></div>
        <div class="right">
            <a class="create" href="<?= base_url('persons/create')?>">Create</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>BirthDay</th>
                    <th>Contact No</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($persons as $person): ?>
                <tr>
                    <td><?= $person->FIRSTNAME?></td>
                    <td><?= $person->LASTNAME?></td>
                    <td><?= $person->ADDRESS?></td>
                    <td><?= $person->BIRTHDAY?></td>
                    <td><?= $person->CONTACTNO?></td>
                    <td>
                        <a class="edit" href="<?= base_url('persons/edit/'.$person->id) ?>">Edit</a>
                        <a onClick="return confirm('are you sure you want to delete it?')" class="delete" href="<?= base_url('persons/delete/'.$person->id) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>