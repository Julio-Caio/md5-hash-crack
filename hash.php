<?php
function md5_crack($hash, $wordlist) {
    $wordlist = explode("\n", trim($wordlist));
    foreach ($wordlist as $word) {
        $word = trim($word);
        if (md5($word) === $hash) {
            return $word;
        }
    }
    return null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['hash']) && isset($_FILES['wordlist'])) {
        $hash = trim($_POST['hash']);
        $wordlist = '';

        if ($_FILES['wordlist']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['wordlist']['tmp_name'];
            $wordlist = file_get_contents($fileTmpPath);
        } else {
            header('Location: index.php?result=Erro ao carregar o arquivo');
            exit();
        }

        $password = md5_crack($hash, $wordlist);

        if ($password) {
            header('Location: index.php?result=' . urlencode($password));
        } else {
            header('Location: index.php?result=Senha não encontrada');
        }
    } else {
        header('Location: index.php?result=Dados insuficientes');
    }
    exit();
}
?>
