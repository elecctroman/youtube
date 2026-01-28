<?php ob_start(); ?>
<h2>Hoş geldiniz!</h2>
<p class="text-muted">Kanal bağlama, video yükleme ve planlama işlemlerine buradan devam edin.</p>
<div class="row g-3">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Hızlı İşlemler</h5>
                <ul class="list-unstyled">
                    <li><a href="/youtube/connect">YouTube Bağla</a></li>
                    <li><a href="/videos/create">Video Yükle</a></li>
                    <li><a href="/schedule">Planlama Takvimi</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5>Durum Özetleri</h5>
                <div class="row">
                    <div class="col-md-4"><div class="stat-box">Bekleyen: 0</div></div>
                    <div class="col-md-4"><div class="stat-box">Planlanan: 0</div></div>
                    <div class="col-md-4"><div class="stat-box">Yayında: 0</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/../layouts/app.php'; ?>
