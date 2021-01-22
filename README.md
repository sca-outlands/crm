# Outlands CRM

This is a bare docker setup for a Drupal site and CiviCRM implementation.

## Requirements
Install Docker.

* Mac: https://hub.docker.com/editions/community/docker-ce-desktop-mac
* PC: https://docs.docker.com/docker-for-windows/install/
* Ubuntu: https://docs.docker.com/engine/install/ubuntu/


## Usage

From the root of this directory, do
```
docker-compose up
```
This sets up a full Drupal 8 site at http://localhost:8080

The admin user and password for the site are 'admin'.

### Useful Commands

Access the site container
```
docker exec -it outlands_civicrm bash
```

Update the site using composer, from within the container
```
php -d memory_limit=2048M /usr/local/bin/composer update --prefer-dist
```

Export the MySQL container database to the stored database (when you want to rebuild an image)
```
cd etc/mysql
docker exec -i site-template_mysql_1 mysqldump -uroot -p12345 sca_template > sca_template.sql
```

Update the MySQL container database from a stored copy
```
docker exec -i site-template_mysql_1 mysql -uroot -p12345 outlands_civicrm < outlands_civicrm.sql
```


