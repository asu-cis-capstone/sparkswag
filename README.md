# sparkswag

##Spark Open Research Repository

##Purpose

Spark allows any student, anywhere to participate in cutting-edge research. It is seeking passionate students and inspiring researchers to join the Spark community to collaborate on pressing challenges in science, technology, engineering and math

##Overview

The purpose of this project is to connect students with researchers in their field, providing real career experience prior to join the work force. Design a site that will allow researchers to CRUD research projects and students to view available research projects. The website should be similar to Facebook, LinkedIn, and Match.com. 

##Product Backlog
[![Stories in Ready](https://badge.waffle.io/asu-cis-capstone/sparkswag.svg?label=ready&title=Ready)](https://waffle.io/asu-cis-capstone/sparkswag)

## System Requirements

Spark Open Research Repository is built with Drupal 7.34 which requires:
+ A web server running Apache, Nginx, or Microsoft IIS (We're using Apache)
+ A database utilizing MySQL 4.1+ or PostgreSQL 7.1
+ PHP 5.2+ (We're using PHP 5.4)

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
<br>```$ mysql -u root -p < sql/drupaldump.sql```

##Contributors
| Member                       | Affiliation             | Role             |
|:-----------------------------|:------------------------|:-----------------|
| Kathryn Scheckel             | Chief Executive Officer | Product Owner    |
| Jamie Ell                    | Capstone Team Member    | Scrum Master     |
| Matinee Cheevasittirungruang | Capstone Team Member    | Development Team |
| Walter Harvey                | Capstone Team Member    | Development Team |
| Justin Giddens               | Capstone Team Member    | Development Team |
| Bill Tan                     | Capstone Team Member    | Development Team |

##Release Notes
** Release Version 0.1 **
* GitHub repository
* Waffle.io

** Release Version 0.2 **
* Drupal Installation
* Technology stack chosen: Apache and phpmySQL
* Tables and fields for the database. 

** Release Version 0.3 **
* Module of SparkSwag creation on Drupal
* Research Opportunity Form created only for the researcher to post the opportunities.   
* Frontpage
* User access area and guest access area
* Opportunity page with table
* Mobile compatibility
* Connect website to the database and store data to the database.
