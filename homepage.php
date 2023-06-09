<!DOCTYPE html>
<html>
<head>
    <title>Herb and Health Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #406349;
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        h1 {
            font-size: 32px;
            margin: 0;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        .navbar {
            background-image: url('gambar/group_9.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .hero h2 {
            font-size: 48px;
            margin: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .article {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .article h3 {
            font-size: 24px;
            margin-top: 0;
        }

        .article p {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Herb and Health</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="articles_edit.php">Articles</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="create_user_account.php">Create User Account</a></li>
        <li><a href="create_doctor_account.php">Create Doctor Account</a></li>
        <li><a href="login.php">log in Account</a></li>

        </ul>
    </nav>
    <div class="hero">
        <h2>Welcome to Herb and Health</h2>
    </div>
    <div class="container">
        <div class="article">
            <h3>Discover the Power of Herbal Medicine</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae metus vel purus volutpat pulvinar nec vitae tortor. Quisque consequat erat sed gravida efficitur.</p>
        </div>
        <div class="article">
            <h3>Natural Remedies for Common Ailments</h3>
            <p>Curabitur ac sem id arcu pharetra semper ut id metus. Integer non dolor diam. Ut consequat euismod consequat.</p>
        </div>
        <div class="article">
            <h3>Healthy Living Tips</h3>
            <p>Nulla facilisi. Sed varius nisl in aliquam fringilla. Phasellus non neque eu neque feugiat feugiat.</p>
        </div>
    </div>
    <footer>
        &copy; 2023 Herb and Health. All rights reserved.
    </footer>
</body>
</html>
