# sparkswag

<h1>Spark Open Research</h1>

<h2>Overview</h2>

The purpose of this project is to connect students with researchers in their field, providing real career experience prior to join the work force. Design a site that will allow researchers to CRUD research projects and students to view available research projects. The website should be similar to Facebook, LinkedIn, and Match.com. 

<h2>Product Backlog</h2>
[![Stories in Ready](https://badge.waffle.io/asu-cis-capstone/sparkswag.svg?label=ready&title=Ready)](https://waffle.io/asu-cis-capstone/sparkswag)

<h2>How to install</h2>
Install Apache, PHP, and MYSQL.
$ apt-get install lamp-server php5-gd

Edit php.ini to turn on or off errors.
$ nano /etc/php5/apache2/php.ini

Clone the repo into your webroot.
$ git clone https://github.com/asu-cis-capstone/sparkswag.git

Give apache permission to read / write files.
chown -R ubuntu:www-data sparkswag
chmod -R 770 sparkswag 

Create database and user then grant access.
$ mysql -u root -p
mysql> create database drupal;
mysql> create user drupaluser identified by '[REDACTED]';
mysql> grant all on drupal.* to drupaluser;

Import SQL into database.
$ mysql -u root -p < drupaldump.sql


<h2>Contributors</h2>
<br>1. Matinee Cheevasittirungruang</br>
<br>2. Jamie Ell</br>
<br>3. Bill Tan</br>
<br>4. Walter Harvey</br>
<br>5. Justin Giddens</br>

<h2>Release Notes</h2>
** Release 0.1 Version **
<br>1. GitHub repository</br>
<br>2. Waffle.io</br>
