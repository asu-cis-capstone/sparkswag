# sparkswag

##Spark Open Research Repository

##Purpose

Spark allows any student, anywhere to participate in cutting-edge research. It is seeking passionate students and inspiring researchers to join the Spark community to collaborate on pressing challenges in science, technology, engineering and math

##Overview

The purpose of this project is to connect students with researchers in their field, providing real career experience prior to join the work force. Design a site that will allow researchers to CRUD research projects and students to view available research projects. The website should be similar to Facebook, LinkedIn, and Match.com. 

##Product Backlog
[![Stories in Ready](https://badge.waffle.io/asu-cis-capstone/sparkswag.svg?label=ready&title=Ready)](https://waffle.io/asu-cis-capstone/sparkswag)

##System Requirements

Spark Open Research Repository requires a working web server, php, mysql database setup.

##v0.4 Spark Open Research Video
https://youtu.be/IKJ9-__-5_o

##How to install

* Clone the repo onto your server.
<br>```$ git clone https://github.com/asu-cis-capstone/sparkswag.git```
<br>```set ./pivot/ as webroot ```

* Create database and user then grant access.
<br>```$ mysql -u root -p```
<br>```mysql> create database [DB_NAME]```
<br>```mysql> create user [DB_USER] identified by '[REDACTED]';```
<br>```mysql> grant all on [DB_NAME].* to [DB_USER];```

* Import SQL into database.
<br>```$ mysql -u root -p < sql/createTables.sql```

##Contributors
| Member                       | Affiliation             | Role             |
|:-----------------------------|:------------------------|:-----------------|
| Kathryn Scheckel             | Chief Executive Officer | Product Owner    |
| Walter Harvey                | Capstone Team Member    | Development Team |
| Jamie Ell                    | Capstone Team Member    | Scrum Master     |
| Matinee Cheevasittirungruang | Capstone Team Member    | Development Team |
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

** Release Version 0.4 **
* Technology Pivot
* Built a new webpage from scatch using MVC architecture to build the website (http://pivot.sparkopenresearch.com/)
* Project Demo Video (https://youtu.be/IKJ9-__-5_o)

** Release Version 0.5 **
* Added refined search functionality
* Created backend validation for forms
* Added step form process via jQuery and CSS
* Enabled My Account Profile editions via JavaScript

** Release Version 0.6 **
* Added administration functionality
