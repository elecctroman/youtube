<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShortsScheduler Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">ShortsScheduler Pro</a>
        <div class="d-flex">
            <a class="btn btn-outline-light btn-sm" href="/logout">Çıkış</a>
        </div>
    </div>
</nav>
<div class="d-flex">
    <aside class="sidebar bg-light border-end">
        <ul class="nav flex-column p-3">
            <li class="nav-item"><a class="nav-link" href="/dashboard">Gösterge Paneli</a></li>
            <li class="nav-item"><a class="nav-link" href="/videos">Videolar</a></li>
            <li class="nav-item"><a class="nav-link" href="/schedule">Planlama</a></li>
            <li class="nav-item"><a class="nav-link" href="/support">Destek</a></li>
            <li class="nav-item"><a class="nav-link" href="/billing">Faturalandırma</a></li>
        </ul>
    </aside>
    <main class="flex-grow-1 p-4">
        <?= $content ?? '' ?>
    </main>
</div>
</body>
</html>
