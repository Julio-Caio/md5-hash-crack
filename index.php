<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site que fornece uma interface de brute-force md5.">
    <meta name="keywords" content="Hash, MD5, Crack, Password">
    <meta name="author" content="Julio Caio R dos Santos">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>HashCrack - Docker Exercise</title>
</head>
<body>
    <header>
        <h3>Home</h3>
        <nav>
            <ul>
                <li><a href="https://github.com/Julio-Caio" target="_blank"><i class="bi bi-github"></i></a></li>
                <li><a href="https://linkedin.com/in/julio-caio-r-santos" target="_blank"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>HashCrack MD5</h1>
        <div class="form">
            <form action="hash.php" method="POST" enctype="multipart/form-data">
                <h2>Convert hash to String</h2>
                <input type="text" name="hash" id="hash" placeholder="Ex.: 24c9e15e52afc47c225b757e7bee1f9d" required />
                <input type="file" name="wordlist" id="wordlist" required />
                <button type="submit">Crack</button>
            </form>
        </div>

        <div class="result">
            <?php
            if (isset($_GET['result'])) {
                echo '<p> ' . htmlspecialchars($_GET['result']) . '</p>';
            }
            ?>
        </div>
    </main>
</body>
</html>
