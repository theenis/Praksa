# Praksa

Kod za htaccess file:

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([a-zA-Z0-9]+)/?$ redirect.php?c=$1 [L] 
</IfModule>
