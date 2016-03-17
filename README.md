# PittCS1520Spring2016

Database functionality can be tested by running the SQL commands in `PittCS1520Spring2016/project1-dlk36/sql/database.sql`. A database named `project1_dlk36` is created and initialized with three tables.

The site includes a contact form that submits to a database and a blog where you can comment on each post. All blog posts and comments are also stored on a database. A few dummy posts and comments have been initialized directly via SQL. Blogging through SQL is unweildly, so I plan to create an interface to make viewing contacts, posting and comment moderation easier via a password login.

At this point security for the site is at a minimum, which is big problem since there are many text forms interacting with a database. I plan to add further input validation and CAPTCHA verification in the future.