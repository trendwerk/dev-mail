Development mails
========

Redirect all mails on development and staging environments. Made for WordPress.

### Installation
If you're using Composer to manage WordPress, add this plugin to your project's development dependencies. Run:
```sh
composer require trendwerk/dev-mail 1.0.0 --dev
```

Or manually add it to your `composer.json`:
```json
"require-dev": {
	"trendwerk/dev-mail": "1.0.0"
},
```

### Setup
The constants below should be placed in your environment configuration file.

`TP_ENV`

Defines which environment we're in. This contains either _develop_, _release_ or _master_, depending on the Git branche the environment is linked to.

`TP_DEV_MAIL`

Contains the e-mail address to which e-mail will be sent in the _develop_ environment. In staging (_release_) environments, the e-mail will be sent to the e-mail address set in WordPress admin.
