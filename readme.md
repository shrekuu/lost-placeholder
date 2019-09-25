# 内容占位服务

> Laravel 6.x, 需要 PHP 7.2 以上

## 如何使用

```
# 安装依赖
composer install

# 使几个 Laravel 目录可写
sudo chmod -R a+rwx storage/ bootstrap/cache

# 复制环境配置
cp env.example .env

# 生成 key
php artisan key:generate

# 手动去创建 MySQL 数据库 lost_placeholder

# 手动更新数据库数信息据到 .env

# 填充假数据
php artisan migrate:refresh --seed -vvv

# 手动配置 nginx
```

## nginx 配置参考

```
server {
    listen 80;

    root /var/www/lost-placeholder/public;
    index index.php index.html index.htm;

    server_name lost-placeholder.你的域名;

    access_log /var/log/nginx/lost-placeholder.access.log;
    error_log /var/log/nginx/lost-placeholder.error.log;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        try_files $uri /index.php =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/run/php/php7.3-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```
