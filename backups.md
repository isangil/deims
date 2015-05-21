## what you should always do ##

### Emergencies happen ###
This is a bit beyond the scope of the project, but you need to backup and have rapid redeployment plans, anyway.

It does not matter how careful and delicate you are, and it does not matter how solid, hacker proof your system are.  You may have six raids and what not, but your DEIMS instance will go down - no doubt.

So you need a contingency plan.  Oh well, a number of plans.

Regular backups.  Two flavors
  1. A drupal based (backup\_migrate module) backups, and then a
  1. A system backup.
  1. My sysadmin backps up my servers too, several ways, I assume.

I am not going to cover the backup and migrate Drupal module, there is superb documentation in the corresponding project page.  You can back up also to your Dropbox like that - your choices are there.

My system backup allows me to deploy rapidly in other server, need be.  What I do is a tar of the drupal root directory.  Say we fire a shell (in the hosting server) and we go to /var/www/ (cd /var/www )and my drupal instance root is the folder named "deims" in there.

I issue these commands at the prompt
```
sudo tar cvf ~/deims_todaysdate.tar deims/ 
```

that is followed by a compression (you can do this in one command, yes)
```
gzip ~/deims_todaysdate.tar 
```

Then you need the mysql backup.  I use the command mysqldump at the shell, but you may use navicat or the mysql GUI tools, etc.  many methods, what you want is your "sql" backup or dump file.

```
mysqldump -u root -p databasename > dbbackup_todaysdate.sql
```

Compress the file if you are going to move it around.
```
gzip dbbackup_todaysdate.sql
```

Now you can move these files to other server that has a similar LAMP (or WAMP, XAMP, blah) distro (hopefully it has matching apache modules, like perhaps "mod\_rewrite". I usually use the command line "scp" or the sftp that comes with SSH - there are also many other ways to move files around, including just placing them into a web accessible folder to download using http (the internet browser).

unzip, untar the folder deims\_todaysdate.tar.gz into a web accessible directory.  unzip the SQL file, and for example, using the mysql shell
(login in as mysql -u root -p ) then create a new database
```
mysql> create database databasename;
```
then execute the dump file like this.
```
mysql> use databasename;
mysql> source dbbackup_todaysdate.sql;
```

Now you should have an exact copy of your system.  the only caveat is that the priviledged mysql user of this database may be different than in your other instance.  In this case, either create the priviledged user in this new mysql instance, or just change the credentials in the "sites/default/settings.php" file, look for the mysqli: directive, change the username:password accordingly.

This process may take anywhere from 5 to 15 minutes. Yes, you can do it faster, good.

Dont let me tell you "I told you so".
Happy Drupaling!