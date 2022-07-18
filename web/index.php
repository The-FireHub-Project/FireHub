<?php declare(strict_types = 1);

/**
 * Main App public landing file
 *
 * This is a landing file for all HTTP requests.
 * @since 0.1.2.pre-alpha
 *
 * @author Danijel Galić
 * @copyright 2022 FireHub Web Application Framework
 * @license OSL Open Source License version 3 - [https://opensource.org/licenses/OSL-3.0](https://opensource.org/licenses/OSL-3.0)
 *
 * @package App\Web
 * @version 1.0
 *
 * @todo Remove ini settings after logger provider is implemented.
 */

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);