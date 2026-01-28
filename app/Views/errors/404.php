<?php ob_start(); ?>
<h1>Sayfa bulunamadı</h1>
<p>Aradığınız sayfa mevcut değil.</p>
<a href="/">Anasayfaya dön</a>
<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/../layouts/auth.php'; ?>
