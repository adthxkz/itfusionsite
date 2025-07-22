# Инструкция по настройке автодеплоя на Hoster.kz

## Подключение GitHub к хостингу

1. **Войдите в панель управления Hoster.kz**
2. **Найдите раздел "Git Deployment" или "Автодеплой"**
3. **Подключите репозиторий:**
   - URL репозитория: `https://github.com/adthxkz/itfusionsite.git`
   - Ветка: `main`
   - Путь развертывания: корневая папка сайта

## Настройки для корректной работы

### Файлы для проверки на хостинге:
- ✅ PHP файлы должны выполняться
- ✅ Путь к файлам должен начинаться с корня домена
- ✅ Проверить права доступа к папкам и файлам

### Возможные настройки .htaccess (если нужно):
```apache
# Перенаправление с www на без www (опционально)
RewriteEngine On
RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [R=301,L]

# Безопасность
Options -Indexes

# Кэширование статических файлов
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType image/jpg "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 month"
    ExpiresByType image/gif "access plus 1 month"
    ExpiresByType image/svg+xml "access plus 1 month"
</IfModule>
```

## После настройки автодеплоя:

1. **Любые изменения в коде** автоматически будут отправляться на сайт при push в GitHub
2. **Для внесения изменений:**
   ```bash
   git add .
   git commit -m "Описание изменений"
   git push
   ```
3. **Проверьте работу сайта** после первого деплоя

## Контакты для поддержки:
- GitHub репозиторий: https://github.com/adthxkz/itfusionsite
- Рабочий email: info@itfusion.kz

---
Создано: 22 июля 2025
