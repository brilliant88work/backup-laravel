Download:
 - Clone or Dowload the repository
 
Vendor Installtion
- Download and install Composer by following the official instructions: https://getcomposer.org/download/
- Go to the project root directory
- Open the cmd window and enter the command: composer install 
- Press enter to install and wait for completion

Config Changes
- Please change the follwoing variables in app > Http > Controllers > BackupController.php file
  1. $mysql_path = string
  2. $user_name = string  
  3. $pass_word = string
  4. $data_base = array
- Save the file

Final Step
- Open the project using your localhost link to project directory for bakup, for example: http://localhost/backup-laravel
