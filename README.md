<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Introduction

Intervention Image is the most popular open source PHP image processing library. It provides an easy and expressive way to edit images and supports PHP's two most common image processing libraries GD Library and Imagick.

The library is written to make PHP image manipulation easy and effortless. Whether you want to create image thumbnails, set watermarks, or format large large image files, Intervention Image helps you accomplish any task with just a few lines of code.

## Example

-   composer require intervention/image
-   use Intervention\Image\ImageManager;
-   use Intervention\Image\Drivers\Gd\Driver;
-   $imgManager = new ImageManager(new Driver());
-   $fileName='public/uploads/imageName.png';
-   $image = $imgManager->read('uploads/' . $fileName);
-   $image->resize(500, 500);
-   $image->save(public_path('uploads/optimizeImage/' . $fileName));
