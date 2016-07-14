Development mails
========

Redirect all mails on development and staging environments. Made for WordPress.

### Installation
If you're using Composer to manage WordPress, add this plugin to your project's development dependencies. Run:
```sh
composer require trendwerk/dev-mail 1.0.2 --dev
```

Or manually add it to your `composer.json`:
```json
"require-dev": {
	"trendwerk/dev-mail": "1.0.2"
},
```

### Setup
The constants below should be placed in your environment configuration file.

`WP_ENV`

Defines which environment we're in. This contains either _development_, _staging_ or _production_, depending on the Git branche the environment is linked to.

`TP_DEV_MAIL`

Contains the e-mail address to which e-mail will be sent in the _development_ environment. In _staging_ environments, the e-mail will be sent to the e-mail address set in WordPress admin.
