<?php
require 'function.php';

// Query the database to retrieve articles
$articles = query("SELECT articles.*, doctors.doctor_name, categories.category_name FROM articles
          INNER JOIN doctors ON articles.author_id = doctors.doctor_id
          INNER JOIN categories ON articles.category_id = categories.category_id");

// Delete Article
if (isset($_GET['delete'])) {
    $articleId = $_GET['delete'];

    // Prepare the SQL statement
    $sql = "DELETE FROM articles WHERE article_id = '$articleId'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Article deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hygieia - Articles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #406349;
        }

        th {
            background-color: #406349;
            color: #fff;
        }

        .action-links {
            white-space: nowrap;
        }

        .action-links a {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>Hygieia - Articles</h1>
    <a href="save_article.php">Tambah Article</a>
    <a href="create_user_account.php">Create User Account</a>
    <a href="create_doctor_account.php">Create Doctor Account</a>
    <a href="login_process.php">login user</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Date Published</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($articles as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td class="action-links">
                <a href="articles_edit.php?id=<?= $row['article_id']; ?>">Edit</a>
                <a href="articles_edit.php?delete=<?= $row['article_id']; ?>" onclick="return confirm('Are you sure you want to delete this article?')">Delete</a>
            </td>
            <td>
                <a href="#<?= strtolower(str_replace(' ', '-', $row['title'])); ?>">
                    <?= $row["title"]; ?>
                </a>
            </td>
            <td><?= $row["doctor_name"]; ?></td>
            <td><?= $row["category_name"]; ?></td>
            <td><?= $row["created_date"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <?php foreach ($articles as $row): ?>
    <h2 id="<?= strtolower(str_replace(' ', '-', $row['title'])); ?>"><?= $row['title']; ?></h2>
    <p><?= $row['content']; ?></p>
    <?php endforeach; ?>
</body>
</html>
