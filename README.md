# S2Y.IO WEDDING PLANNER - SILVERSTAR

## Introduction

The SilverStar wedding management system includes a web system, customer dashboard, vendor dashboard and admin dashboard. Languages used are php, HTML and Javascript. MySql is used for database management. The system is implemented based on MVC architecture with a responsive design.

**Tested Browsers:** - Chrome, FireFox, Edge
**Tested Versions** - PHP 7.3.3, MySql 5.6
**Tested OS** - Windows, MAC, Android

##### Online deployed system
- **Web system URL** - https://www.healthybcon.com/wedding-planner/
- **Admin Dashboard** - https://www.healthybcon.com/wedding-planner/admin

##### Prerequisites
1. Install a Web Server (ex: XAMPP) including Apache and MySql

##### Steps to Local Setup
1. Start XAMPP server (portNo : 8081)
2. Go inside XAMPP htdocs folder.
    > cd htdocs
3. Clone git repository
    > git clone https://github.com/s2y-io/wedding-planner.git
4. Import DB backup to the phpmyadmin which listed in wedding-planner/db/ (FileName: healthyb_wedding_planner.sql)
5. Import database to Phpmyadmin.
6. View local web system and admin dashboard using following URLs
    - http://localhost:8081/wedding-planner/
    - http://localhost:8081/wedding-planner/admin

##### Main Functions in system

**WEB System:**
- Vendors
- Exhibitions and Events
- Offers
- Image and Video gallery
- Magazine
- Marriage proposals

**Customer Dashboard:**
- Customer Registration and login
- Summary Dashboard
- ToDo List
- Guest List
- Seating Table
- Logout

**Vendor Dashboard:**
- Vendor Registration and login
- Summary Dashboard
- Services List
- Add gallery Images
- Requested quotations
- Logout

**Admin Dashboard:**
- Admin Registration and login
- Summary Dashboard
- Requested/Approved/Toprated vendor Management
- Add Categories/ exhibitions and events/ Offres/ Magazine/ Proposals
- Logout