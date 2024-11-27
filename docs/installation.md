---
title: Installation
---

## Installation

You can install the package via composer:

```bash
composer require codepil0t/filament-tinyeditor
```

After installing the package, you don't have to do anything if you have **Filament** installed. If not, and you want to use it with **Forms standalone**, run the following command:

```bash
php artisan filament:assets
```

Optionally, you can publish the config file for [Customization](./usage-and-customization.md#customization):

```bash
php artisan vendor:publish --tag="filamentTinyEditor-config"
```

You may need to run Artisan storage:link command to see the images stored
```bash
php artisan storage:link
```

## Upgrade

Like installation, you don't have to do anything more after upgrade unless you work using **Forms standalone**. In that case, you need to run the following command:

```bash
php artisan filament:assets
```

## Upgrade from 1.x to 2.x

Version 2.x of the package has been updated to use the CDN version of TinyMCE instead of the local one, resulting in only one file being published. To ensure a smooth upgrade to 2.x, please delete the old local files by removing the directory **public/vendor/filamentTinyEditor** and then execute the following command after upgrading to version 2.x:

```bash
php artisan filament:assets
```
