<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
        }

        table {
            border: 1px solid black;
            border-radius: 5px;
            width: 90%;
            box-shadow: 0px 0px 25px 11px rgba(12, 221, 232, 1);
        }

        th {
            background-color: black;
            color: white;
            border: 1px solid black;
            height: 30px;
            border-radius: 10px;
            min-width: 100px;
            font-size: 20px;
        }

        td {
            background-color: gray;
            color: aqua;
            border: 1px solid black;
            text-align: center;
            height: 60px;
            font-weight: bold;
            font-size: 18px;
        }

        .form {
            box-shadow: 0px 0px 30px 10px aqua;
            width: 600px;
            height: 200px;
            border-radius: 20px;
            background-color: gray;
            font-size: 30px;
            margin: 20px auto;
            padding: 20px;
        }

        input {
            border-radius: 10px;
            width: 250px;
            height: 25px;
            background-color: dimgray;
        }

        button {
            border-radius: 10px;
            height: 30px;
            width: 60px;
        }

        .update {
            background-color: goldenrod;
        }

        .delete {
            background-color: crimson;
        }

        .create {
            background-color: blueviolet;
            height: 40px;
            width: 100px;
        }

        .copy{
            height: 50px;
            width: 100px;
            background-color: orange;
        }
    </style>
</head>

<body>
    <div class="form">
        <label>Name:</label>
        <input type="text" id="name">
        <br>
        <label>Details:</label>
        <input type="text" id="detail">
        <br>
        <button class="create" onclick="create()">Create</button>
    </div>

    <div class="table-container" id="notFound">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Copy</th>
                </tr>
            </thead>
            <tbody id="contentTable">

            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>

</html>
