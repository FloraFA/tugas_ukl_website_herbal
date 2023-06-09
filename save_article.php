<!DOCTYPE html>
<html>
<head>
    <title>Create user Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Create new article</h1>
    <form method="POST" action="articles_edit.php">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>
        
        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="5" required></textarea><br><br>
        
        <label for="doctor_name">Author Name:</label>
        <input type="text" name="doctor_name" id="doctor_name" required><br><br>

        <label for="category_id">Category ID:</label>
        <input type="text" name="category_id" id="category_id" required><br><br>
        
        <input type="submit" value="Create new article">
    </form>
</body>
</html>
