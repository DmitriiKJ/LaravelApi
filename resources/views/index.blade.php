<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD API</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Laravel CRUD</a>
        </nav>
    </header>

    <div class="container">
        <h1>Пости (для додання посту введіть дані та натисніть "Створити пост", для оновлення введіть дані та натисніть "Редагувати")</h1>

        <form id="post-form">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Зміст</label>
                <textarea class="form-control" id="content" name="content" required></textarea>
            </div>

            <button class="btn btn-warning" onclick="createPost()">Створити пост</button>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Зміст</th>
                        <th>Дії</th>
                    </tr>
                </thead>
                <tbody id="post-list">

                </tbody>
            </table>
        </form>


    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 Laravel CRUD API</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
