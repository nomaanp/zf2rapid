# ZF2rapid tutorial

In this tutorial you will learn how to create an application step by step with
ZF2rapid.

 * [Create new project](tutorial-create-project.md)
 * Create new module
 * Create controllers and some views
 * Create routing and generate maps
 * Create view helper and controller plugin

## Create new project

When creating a new project you can choose from different Skeleton Applications 
to be installed. After choosing option 3. you need to specify the URL to a ZIP 
file with your custom Skeleton Application.

 1. Official Zend Skeleton Application
 2. ZF2rapid Skeleton Application
 3. Your Skeleton Application

To create a new project you need to specify the path of the new project. 
Assuming that all your projects are placed in the path `/home/devhost` the 
command to create a new project for this tutorial below this path could be as 
follows:

    $ zf2rapid create-project /home/devhost/zf2rapid-tutorial

The following tasks are executed when creating a new project:

 * Create project path
 * Download chosen Skeleton Application
 * Unzip chosen Skeleton Application
 * Self-updating Composer
 * Installing dependencies with Composer
 * Prepare project (set user rights and copy config files)
 
When the installation was successful you need to change the working dir to 
your new project path:

    $ cd /home/devhost/zf2rapid-tutorial

The installation is finished now

## View new project in browser

To view the new project in your browser you need to do some further work. We are
assuming that you are using Apache 2 and want to create a 
Virtual Host now. Please refer to the official 
[Apache Virtual Host documentation](http://httpd.apache.org/docs/2.2/en/vhosts/)
for more details.

On **Ubuntu Linux** please create the new file 
`/etc/apache2/sites-available/zf2rapid.tutorial.conf` with the following 
content:

    <VirtualHost 127.0.0.1>
	    ServerName zf2rapid.tutorial
	    DocumentRoot /home/devhost/zf2rapid-tutorial/public/
    	AccessFileName .htaccess

        SetEnv APPLICATION_ENV development

	    <Directory "/home/devhost/zf2rapid-tutorial/public/">
		    DirectoryIndex index.php
		    AllowOverride All
		    Require all granted
	    </Directory>
    </VirtualHost>

Add the new virtual host to your `/etc/hosts` file:

    [...]
    127.0.0.1	zf2rapid.tutorial

Enable new virtual host:

    sudo a2ensite zf2rapid.tutorial.conf 

Restart Apache 2:

    sudo service apache2 restart

Now you can open your new project in your prefered browser by calling the URL 
[http://zf2rapid.tutorial](http://zf2rapid.tutorial). Your screen should look 
like this:

![Screen shot new project](screen_new_project.jpg)

## Configure your project

Before you start to create modules, controllers and other stuff you should take 
some time and configure your new project.
