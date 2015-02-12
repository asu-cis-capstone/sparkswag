# sparkswag

#Spark Open Research

##Overview

The purpose of this project is to connect students with researchers in their field, providing real career experience prior to join the work force. Design a site that will allow researchers to CRUD research projects and students to view available research projects. The website should be similar to Facebook, LinkedIn, and Match.com. 

##Product Backlog
[![Stories in Ready](https://badge.waffle.io/asu-cis-capstone/sparkswag.svg?label=ready&title=Ready)](https://waffle.io/asu-cis-capstone/sparkswag)

##How to install
* Install Apache, PHP, and MYSQL.
<br>```$ apt-get install lamp-server php5-gd```

* Edit php.ini to turn on or off errors.
<br>```$ nano /etc/php5/apache2/php.ini```

* Clone the repo into your webroot.
<br>```$ git clone https://github.com/asu-cis-capstone/sparkswag.git```

* Give apache permission to read / write files.
<br>```$ chown -R ubuntu:www-data sparkswag```
<br>```$ chmod -R 770 sparkswag ```

* Create database and user then grant access.
<br>```$ mysql -u root -p```
<br>```mysql> create database drupal;```
<br>```mysql> create user drupaluser identified by '[REDACTED]';```
<br>```mysql> grant all on drupal.* to drupaluser;```

* Import SQL into database.
<br>```$ mysql -u root -p < drupaldump.sql```


##Contributors
1. Matinee Cheevasittirungruang
2. Jamie Ell
3. Bill Tan
4. Walter Harvey
5. Justin Giddens

##Release Notes
** Release 0.1 Version **
1. GitHub repository</br>
2. Waffle.io</br>
