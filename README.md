# ShortsScheduler Pro

Bu proje, cPanel uyumlu ve framework kullanmadan (pure PHP) geliştirilmiş bir SaaS temel iskeletidir.

## Gereksinimler
- PHP 8.x
- MySQL/MariaDB
- Apache + mod_rewrite

## Kurulum (cPanel)
1. Proje dosyalarını `public_html` altına kopyalayın.
2. Veritabanı oluşturun ve kullanıcı atayın.
3. `schema.sql` ve `seed.sql` dosyalarını phpMyAdmin üzerinden çalıştırın.
4. `app/config.php` içindeki ayarları veya ortam değişkenlerini düzenleyin:
   - `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`
   - `APP_KEY` (en az 32 karakter)
5. `storage/` dizini web erişimine kapalıdır, izinlerini yazılabilir yapın.
6. Cron job ekleyin:
   ```
   php /home/USER/public_html/cron/run.php
   ```

## Geliştirme Notları
- Router basit bir yapıdadır. Yeni route eklemek için `public_html/index.php` dosyasını kullanın.
- CSRF koruması için `csrf_field()` kullanılmalıdır.
- Token şifreleme `app/Core/Crypto.php` içinde AES-256-GCM ile yapılır.
