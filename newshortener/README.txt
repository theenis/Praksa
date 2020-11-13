U slucaju da se .htaccess obrise, evo kod:

RewriteEngine On 
RewriteRule ^([a-z0-9]+)$ redirect.php?code=$1 [QSA]
