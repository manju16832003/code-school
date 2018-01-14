
# LEMP Stack Setup DigitalOcean Ubuntu-16.04

https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-16-04

https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-in-ubuntu-16-04


[DigitalOcean Provision Scripts](https://github.com/digitalocean/do_user_scripts)


## Alow MySQL To access remotely

```
mysql -u root -p
CREATE DATABASE databasename;
CREATE USER 'dbuser'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON databasename.* TO 'wordpressuser'@'%';
CREATE USER 'dbuser'@'%' IDENTIFIED BY 'password';
GRANT SELECT,DELETE,INSERT,UPDATE ON databasename.* TO 'dbuser'@'%';
GRANT ALL PRIVILEGES ON databasename.* TO 'dbuser'@'%';
FLUSH PRIVILEGES;
```

## Installing Elixir / Erlang / Phoenixframework

### Install Erlang

Add Erlang Solutions repo: `wget https://packages.erlang-solutions.com/erlang-solutions_1.0_all.deb && sudo dpkg -i erlang-solutions_1.0_all.deb`

`sudo apt-get update`

`sudo apt-get install esl-erlang`

`sudo apt-get install elixir`

### Install Phoenixframework

`mix local.hex`

`mix archive.install https://github.com/phoenixframework/archives/raw/master/phx_new.ez`


