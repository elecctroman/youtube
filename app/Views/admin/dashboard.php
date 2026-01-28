<?php ob_start(); ?>
<h2>Admin Paneli</h2>
<p class="text-muted">Paketler, kullanıcılar ve sistem ayarlarını buradan yönetebilirsiniz.</p>
<div class="row g-3">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6>Paketler</h6>
                <p class="mb-0">Aktif paket sayısı: 0</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6>Kullanıcılar</h6>
                <p class="mb-0">Toplam kullanıcı: 0</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6>Ödemeler</h6>
                <p class="mb-0">Bekleyen bildirim: 0</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6>Loglar</h6>
                <p class="mb-0">Bugün hata: 0</p>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/../layouts/app.php'; ?>
