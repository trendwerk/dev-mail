Development mails
========

Redirect all mails on development and staging environments. Made for WordPress.

### Installation
```sh
composer require trendwerk/dev-mail --dev
```

### Setup
The constants below should be placed in your environment configuration file.

`WP_ENV`

Defines which environment we're in. This contains either _development_, _staging_ or _production_, depending on the Git branche the environment is linked to.

`TP_DEV_MAIL`

Contains the e-mail address to which e-mail will be sent in the _development_ environment. In _staging_ environments, the e-mail will be sent to the e-mail address set in WordPress admin.
