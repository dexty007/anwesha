# ANWESHA 2016
- Website for anwesha 2016

##Instructions:
- PHP version - 5.6.12
- Apache : Apache/2.4.16 (Unix) OpenSSL/1.0.1p PHP/5.6.12 mod_perl/2.0.8-dev Perl/v5.16.3
- MySQL : 5.6.26
- Place the anwesha folder in your server's root direcory. If not then edit the __RewriteBase__ in __.htaccess__ accordingly.
- Create database anwesha.
- For creating database tables import __migrations/anwesha.sql__ in mysql ~~OR run __migrations/setupdb.php__~~
- For populating database import __migrations/data.sql__ in mysql ~~OR run __migrations/migrate.php__~~
- For generating random anwesha ID run __migration/randomID.php__
- Use can change the caching time by updating $cache_time variable in the specific controller. Current cache time is 60 second.

## TODO
- [ ] Write setupdb.php.
- [ ] Write Trigger to clean tables in 4-5 days.
- [ ] ~~Write backend for Campus Ambassador.~~(See below)
- [ ] Testing Registration (User/Campus Ambassador).
- [x] Testing Events Details.
- [ ] Testing Events Details [With Image rendering].
- [ ] Add caching to Events.
- [ ] Write fb register backend and frontend.
- [ ] Add __re-captcha__ on registration page.
- [ ] Login for users.
- [ ] Write registration for particular Event.
- [ ] Write group registration.
- [ ] Suggest list of colleges, cities, states. __FRONTEND!__
- [x] Use PHPMailer
- [ ] ~~Create a nice looking HTML page for email~~
- [ ] ~~Scheduling (Fontend + backend).~~
- [ ] ~~OTP!~~
- [ ] Write backend for registration of Femina Miss India.
- [ ] Login for Core/organizing committee
- [ ] Expanded Features for above (delete/add registration, add/delete/edit teams)
- [ ] Fee payment portal.

## DEADLINE
- [ ] ~~Campus Ambassador Completion - 2 Nov 2015~~(Campus ambassador is already up, kindly migrate the data from the table using a script or get it done manually)
- [ ] User Registration Completion - 4 Nov 2015
- [ ] Event Page Completion - 4 Nov 2015
- [ ] User Login - 16 Nov 2015
- [ ] Events Registration - 16 Nov 2015
- [ ] re-captcha on each page - 16 Nov 2015
- [ ] FB Registration & Login - 16 Nov 2015
- [ ] FB Integration - 7 Dec 2015
- [ ] Login page for Core & Organising Committee - 14 Dec 2015
