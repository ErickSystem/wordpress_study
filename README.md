# PROJECT WORDPRESS TO LEARN BETTER ABOUT THE TOOL

## REQUIRED TO PROJECT

- bootstrap 4.1.3

    https://getbootstrap.com/
    
- wordpress 4.9.8

    https://wordpress.org/download/

- xampp 7.2.10

    https://www.apachefriends.org/pt_br/download.html


## CONFIG

Do the installation of xampp and wordpress, after following to create the symbolic link

```bash

# simbolic link to project, usually the path stay in /opt/lampp/htdocs
ln -sf <path of theme inside of wordpress>  <your path with the theme name>

```

### Configure the FTP

To configure FTP on your local machine to be able to download Wordpress plugins,follow the steps below:

```bash

# Create a new group called ftp. This group will contain the user accounts 
# authorized to upload files via FTP:
cd /opt/lampp
sudo su
groupadd ftp

# Add your ubuntu user account (in this example, user) to the new group. 
# Add other users if needed.
usermod -a -G ftp user

# Change the ownership and permissions of the htdocs / subdirectories directory of the XAMPP installation 
# directory (usually / opt / lampp) so that it is writable by the new ftp group:
chown root.ftp htdocs
chmod 775 htdocs

# then restart the xampp proFTPD service, and if all goes well you will be able to download the plugins in
# the Wordpress panel successfully!
```
