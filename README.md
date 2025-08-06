# 🚨 Laravel Bulk SMS BD (Deprecated)

**⚠️ This package (`iqbalhasandev/laravel-bulksmsbd`) is no longer maintained.**  
For all new projects, we **strongly recommend** migrating to **[`DevWizardHQ/laravel‑textify`](https://github.com/DevWizardHQ/laravel-textify)**, a more modern, well‑supported Laravel SMS package.

## laravel-bulksmsbd - The Missing Bangladeshi 'bulksmsbd' SMS Service Provider package

Made with ❤️ by [Iqbal Hasan](https://www.iqbalhasan.dev)

- **Laravel**: 5.6/5.7/5.8/6.0/7.0/8.0
- **Author**: IQBAL HASAN
- **Website & Documentation:**: https://iqbalhasandev.github.io/laravel-bulksmsbd/

<p align="center">
<a href="https://github.com/iqbalhasandev/laravel-bulksmsbd/issues"><img src="https://img.shields.io/github/issues/iqbalhasandev/laravel-bulksmsbd" alt="issues"></a>
<a href="https://github.com/iqbalhasandev/laravel-bulksmsbd/network/members"><img src="https://img.shields.io/github/forks/iqbalhasandev/laravel-bulksmsbd" alt="forks"></a>
<a href="https://github.com/iqbalhasandev/laravel-bulksmsbd/stargazers"><img src="https://img.shields.io/github/stars/iqbalhasandev/laravel-bulksmsbd" alt="stars "></a>
<a href="https://packagist.org/packages/iqbalhasandev/laravel-bulksmsbd"><img src="https://poser.pugx.org/iqbalhasandev/laravel-bulksmsbd/v" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/iqbalhasandev/laravel-bulksmsbd"><img src="https://poser.pugx.org/iqbalhasandev/laravel-bulksmsbd/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/iqbalhasandev/laravel-bulksmsbd"><img src="https://poser.pugx.org/iqbalhasandev/laravel-bulksmsbd/v/unstable" alt="Latest Unstable Version"></a>
<a href="http://opensource.org/licenses/MIT"><img src="https://img.shields.io/github/license/iqbalhasandev/laravel-bulksmsbd" alt="license"></a>

</p>
<hr>

Integrate SMS system into your project easily with bulk sms bd's API via this plugin.



## Installation Steps

### 1. Require the Package

After creating your new Laravel application you can include the bulksmsbd package with the following command:

```bash
composer require iqbalhasandev/laravel-bulksmsbd
```

### 2. If you're using Laravel 5.5, this is all there is to do.

Should you still be on version 5.4 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

    iqbalhasandev\bulksmsbd\BulkSMSBDServiceProvider::class

### 3. Add `BULK_SMSBD_USERNAME`, `BULK_SMSBD_PASSWORD` to **.env** file.

```
// required
BULK_SMSBD_USERNAME={userName}
BULK_SMSBD_PASSWORD={password}

```

## Overview

Look at one of the following topics to learn more about laravel-bulksmsbd

- [Usage](#usage)
- [Configuration](#configuration)

## Usage

The bulksmsbd gives you the following methods to use:

### BulkSMSBD::send()

Through the `send` method you can give your message delivery numbers and the contents of the message.

Below is an example of how to message a number

```php
$number=01712345678;
$message='this is a demo Example form Laravel bulksmsBD Package.';
BulkSMSBD::send($number,$message);
```

If you want, you can send the same message to many numbers at once.

The following is an example:

```php
$numbers=['01712345678','01712345679','01712345677'];
$message='this is a demo Example form Laravel bulksmsBD Package.';
BulkSMSBD::send($numbers,$message);
```

### Configuration

If you want to change or publish the `config` file.

    php artisan vendor:publish --provider="iqbalhasandev\bulksmsbd\BulkSMSBDServiceProvider"

## Credits

- IQBAL HASAN (the author of laravel-bulksmsbd package)
- [Contributors](https://github.com/iqbalhasandev/laravel-bulksmsbd/graphs/contributors)

## Support

Hey dude! Don't forget to mail me if you have any problem with the package.

- **Author E-mail**: iqbalhasan.dev@gmail.com
- **Author Facebook**: https://www.facebook.com/iqbalhasan.dev/
- **Author linkedin**: https://www.linkedin.com/in/iqbalhasandev
- **Author github**: https://github.com/iqbalhasandev
- **Author twitter**: https://twitter.com/iqbalhasandev

## License

This package inherits the licensing of its parent framework, Laravel, and as such is open-sourced
software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Extra

If you want to contribute, you can

Thank you for using this package😘
If you like it, don't forget to give a star⭐⭐⭐⭐⭐
