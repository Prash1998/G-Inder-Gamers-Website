# Ginder

## Names:
Prashanth Sivoththaman (8693247)  
Rafi Biouss (300018927)  
Gabrelle Duenas (300081950)  



# Deliverable 4


G-inder is an online gamer database where different players from different games can put up posts looking for other people to play with. In each of these posts players will discuss what kind of players they’re looking for whether it be purely to have fun with others, or it be skilled based if someone is looking for a person of similar ranks in their game.



# Implementation Features Server / Client / HTML / CSS


This project utilizes html and css to create the front end of this website.

Php is the server language used to communicate, write data, and fetch data from the databases on the backend

html is used in create_post.php, createprofile.php, find_gamers.php, homepage.html, report.php

css is used in: styles.css

php is used in : create_post.php, createprofile.php, find_gamers.php, report.php and post.php

The database langauages used are mysql and sql




# Software Documentation

## Server Installation

## PHP

This project requires php 8.1.3 to be installed
https://windows.php.net/download#php-8.1

The server technology we chose to integrate was php. 

Install XAMP so that website can be run from local host XAMP server
https://www.apachefriends.org/index.html

Install files for phpmyAdmin
https://www.phpmyadmin.net/

## Database Technology

The database technology we chose use was MySQL

MySQL was run using phpmyadmin

(instalation instructions for phpMyadmin)

Install files for phpmyAdmin
https://www.phpmyadmin.net/

the other databse  we used was pgAdmin

link to install

https://www.pgadmin.org/download/pgadmin-4-windows/




# Demployment Instructions

move GINDER project into XAMP\htdocs in your C directory

open XAMP, and click start for both APACHE and MySQL

![XAMPpicSTART](https://user-images.githubusercontent.com/55245271/156675587-f43486d0-b92c-4b69-b066-7b9d6b52fd10.JPG)

on your webbrowser type this link:  http://localhost/Ginder/homepage.html

Setup postgres database

1.open Pgadmin
2. Right click "Database"
3. Click Create..
4. Click Databse
5. Name the database GinderDB
6. right click on GinderDB
7. click restore
8. select "GinderDatabase"

# Adherance to UI Design System

## Colour Palette

Background gradient goes from top to bottom from dark blue to light blue

Letters are white with a dark grey background for easibility to read 

Grey background boxes are bordered with black for organizing and easier to distinguish sections

## Fonts and Type Scale

Font is Calibri in order to make the words very easy to read

Title of website is size h1 to draw your attention first

Subsections is size h2 to draw attention second

Paragraphs are wrriten with size 12 for easibility to read and not too big to take up too much space 

![ad1](https://user-images.githubusercontent.com/55245271/161641623-d34cc250-4e61-43f6-a82b-7a9b93c86d12.JPG)


## Icons/Images

Icons-REPORT A PROBLEM.png was used for the report a problem icon![ad2](https://user-images.githubusercontent.com/55245271/161641656-baa62dae-b574-4f52-a9f2-561cdf0dc7ef.JPG)




th.png was used in the homepage.html page in the website details section
![ad3](https://user-images.githubusercontent.com/55245271/161641675-408b9b82-3f16-4c9a-b9e5-2ca731d715db.JPG)

## UI Components

radio inputs, and drop downs inputs were used in createprofile.php and  create_post.php


The dropdown inputs allows for users to select their skill level
![ad4](https://user-images.githubusercontent.com/55245271/161641759-226f2de8-8318-43a4-b55d-90ebabb3d195.JPG)

A navigation bar is used to go from website section to another efficiently.![ad5](https://user-images.githubusercontent.com/55245271/161641772-f65a8772-8cf8-49e2-96c7-9c35133789b3.JPG)




# Seeding application with sample data


Setup phpmyadminDB

open XAMP, and click start for both APACHE and MySQL
Click the "Admin" button for the mySQL row


Setup postgres database

1.open Pgadmin
2. Right click "Database"
3. Click Create..
4. Click Databse
5. Name the database GinderDB
6. right click on GinderDB
7. click restore
8. select "GinderDatabase"

## screenshot from phpmyadmin

The table profile contains the attributes fname (first name), lname (last name), email, gender, gtag (gamertag), console, skill, and description
the values are inputted and processed by createprofile.php
![phpmyadminseed](https://user-images.githubusercontent.com/44557578/161653494-1ec60a5c-1dbe-4077-95c5-7f27d8b02def.png)


## screenshot from pgadmin

The table entitygamerposts contains the attributes gamertag, console, rank, skill, and descriptipn,  
the values are inputted by the create_post.php
![dbseed](https://user-images.githubusercontent.com/55245271/161630746-5fa01eba-2e4c-4c17-8b83-490082456c97.JPG)



# Screenshots of available features

## Feature 1: creating profile

This feature allows a user to register their profile to the website.

On page createprofile.php, user inputs their information, then clicks submit.

![inputprofiledata](https://user-images.githubusercontent.com/44557578/161653663-3091bf91-2b4c-4f56-b2f8-67961381832f.png)

The data is processed by the php page and posted to the database

![uploadedprofiledata](https://user-images.githubusercontent.com/44557578/161653747-95979737-93e5-4d38-b2e8-c7114b0d42a6.png)


## Feature 2: Report Problem

This feature allows a user to report a problem they may have with either the site, or the users on it.

On page report.php, user inputs the problem they have, then clicks submit.

![inputreportdata](https://user-images.githubusercontent.com/44557578/161658189-d25cd4d7-02f0-4c29-a1f3-f90d1c866069.png)

The data is then processed by the php page and posted to the database

![uploadreportdata](https://user-images.githubusercontent.com/44557578/161658220-8de08375-82be-4786-b0d0-7d36ad3b3c25.png)


##  Feature 3: Create Post

This feature allows a user to create posts under their gamertag

first user navigates to create_post.php

next user inputs the required fields in the create post form and clicks submit

![post1](https://user-images.githubusercontent.com/55245271/161453505-8b664688-9f4a-475f-9d53-41dce6c3ac8c.JPG)

The form then posts to the database

![post2](https://user-images.githubusercontent.com/55245271/161453510-b0b2345e-4a4a-4573-ba2c-7b5cce6993f1.JPG)


## Feature 4: Find gamer

This feature allows the user to find the information and post of a desired game
once the user types in the gamertag ame, the webpage displays the information of the gamertag

user navigates to find gamer page (find_gamers.php)
![Search1](https://user-images.githubusercontent.com/55245271/161453517-d0851716-c656-4f1a-a2ff-8b1fc427e77a.JPG)


user inputs gamertag of desired gamer that the user wants infomation for and hits submit
![Search2](https://user-images.githubusercontent.com/55245271/161453521-705b91db-3efb-406c-acf9-220ef0596fda.JPG)

the webpage then displays the info of that specifc gamer  (fetching values from the database)

![Search3](https://user-images.githubusercontent.com/55245271/161453529-f1e95f85-4569-45a9-867b-0e52b449a234.JPG)



# Git usage (commit messages, all students involved)

link to commit history

https://github.com/GDuenas/Ginder/commits/deliverable04

Prashanth Sivoththaman (8693247)  
Rafi Biouss (300018927)  
Gabrelle Duenas (300081950)  












