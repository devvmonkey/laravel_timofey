sudo apt update
sudo apt install apache2
sudo ufw app list
sudo ufw app info "Apache Full"
sudo ufw allow in "Apache Full"
ip addr show eth0 | grep inet | awk '{ print $2; }' | sed 's/\/.*$//'
sudo apt install mysql-server
sudo mysql_secure_installation
SELECT user,authentication_string,plugin,host FROM mysql.user;
sudo mysql
sudo apt install php libapache2-mod-php php-mysql
/etc/apache2/mods-enabled/dir.conf
sudo nano /etc/apache2/mods-enabled/dir.conf
sudo systemctl restart apache2
sudo systemctl status apache2
)
sudo nano /etc/apache2/mods-enabled/dir.conf
sudo nano /var/www/html/info.php
sudo apt install phpmyadmin php-mbstring php-gettext
sudo phpenmod mbstring
sudo systemctl restart apache2
mysql -u root
musql -u root -p
mysql -u root -p
apt install git
sudo apt install curl php-cli php-mbstring git unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
HASH=795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
composer
cd /var/www/html/
cd~
cd ~
git
ls
cp -a games1/. /var/www/html/
git clone https://github.com/devvmonkey/games1.git
ls
cp -a games1/. /var/www/html/
cd /var/www/html/
nano .env
composer install
php artisan migrate
rm index.html
cd /etc/apache2/sites-enabled
ls
nano 0*
sudo chown -R www-data:www-data /var/www/html/
sudo find /var/www/html/ -type f -exec chmod 644 {} \;
sudo find /var/www/html/ -type d -exec chmod 755 {} \;
sudo chgrp -R www-data storage bootstrap/cache
sudo chgrp -R www-data /var/www/html/storage bootstrap/cache
nano 0*
systemctl restart apache2
cd /var/www/html/
php artisan migrate 
php artisan:migrate 
cd /var/www/html
ls
php artisan migrate 
cd /var/www/html/
php artisan cache:clear
php artisan route:cache
git clone https://github.com/devvmonkey/test_laravel.git
rm -rf /var/www/html/.git
cp -a test_laravel/. /var/www//html
git config --global user.name "Yaroslav"
git config --global user.email "yar.vynnychuck@gmail.com"
cd /var/www/html/
git add .
git commit -m "initial"
git push
git add .
git commit -m"color_red"
git commit -m "color_red"
git pull
a2enmod rewrite
systemctl restart apache2
sudo mysql –u root
sudo mysql –u root -p
sudo mysql –u root –p
mysql -u root
mysql -u root -p
cd /var/www/html/
nano .env
cd /var/www/html/
php artisan cache:clear
cd /var/www/html 
php artisan cache:clear
