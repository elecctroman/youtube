INSERT INTO packages (name, price_monthly, price_yearly, limits_json, is_active)
VALUES ('Başlangıç', 99.00, 999.00, '{"channels":1,"uploads_per_day":3,"storage_mb":1024,"schedules_per_day":3}', 1);

INSERT INTO personas (name, default_title_tpl, default_desc_tpl, default_tags_tpl, is_active)
VALUES
('Kurumsal', 'Kurumsal Shorts Başlığı', 'Kurumsal açıklama şablonu. Link bio\'da.', '#kurumsal #brand', 1),
('Pro', 'Profesyonel Shorts', 'Profesyonel açıklama şablonu. Related video için yönlendirme.', '#pro #shorts', 1),
('Mizah', 'Mizah Shorts', 'Mizahi açıklama şablonu. Google\'da marka ara.', '#mizah #shorts', 1),
('Haber', 'Haber Shorts', 'Haber açıklama şablonu. Link bio\'da.', '#haber #shorts', 1),
('Estetik', 'Estetik Shorts', 'Estetik açıklama şablonu. CTA unutma.', '#estetik #shorts', 1);

INSERT INTO viral_time_windows (day_type, start_time, end_time, is_active)
VALUES
('weekday', '12:00:00', '13:30:00', 1),
('weekday', '16:30:00', '18:30:00', 1),
('weekday', '19:30:00', '22:00:00', 1),
('weekend', '11:00:00', '14:00:00', 1),
('weekend', '20:00:00', '00:00:00', 1);

INSERT INTO yt_oauth_config (id, client_id, client_secret, redirect_uri, scopes, is_active)
VALUES (1, '', '', '', 'https://www.googleapis.com/auth/youtube.upload', 0);
