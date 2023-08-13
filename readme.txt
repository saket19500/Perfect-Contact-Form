So, the first file will be form.php in which firstly we will include validate.php file to validate the form details. 
We will create contact form using Html ,Css and Bootstrap in form.php.
Than we wil include two more files in form.php such that if validation is successful one file sendmail.php will send 
a mail with the form data on following mail :test@techsolvitservice.com and the other file that is sql.php will store
the form data into the database.
validate.php will check each input field for validation and give error if something is wrong.
sendmail.php will extract form data and will send it to the owner's email if form is correctly filled.
sql.php will extract the form data and link it to the mentioned database which is contact in this case.
You need to create a database named "contact" in phpmyadmin (in case of xampp) and a table named details inside it with following fields:
1.name
2.phoneNumber
3.email
4.subject
5.message
6.ipAddress
7.timeStatus
Thank you. I hope I was able to make you understood.
