# PHP Input Filter

A lightweight, reusable PHP packagez for sanitizing and validating user inputs. Designed to prevent XSS, malformed inputs, and improve form data consistency.

---

## 📌 Features

- Sanitize and validate:
  - Strings
  - Integers
  - Emails
  - URLs
  - Booleans
  - Arrays
- Centralized input handling
- PSR-4 autoloading (Composer ready)
- No framework dependency

---

## 🚀 Installation

You can use Composer to install this package:

```bash
composer require nhpiash/php-input-filter
```
Or include manually:
---
```php
require 'src/InputFilter.php'
```
### ✨ Usage

```php
use Nhpiash\InputFilter\InputFilter;

$name     = InputFilter::getString($_POST['name']);
$age      = InputFilter::getInt($_POST['age']);
$email    = InputFilter::getEmail($_POST['email']);
$website  = InputFilter::getSanitizedURL($_POST['website']);
$agreed   = InputFilter::getBoolean($_POST['terms']);
$filtered = InputFilter::getFilteredArray($_POST, 'string');
```
### 📂 Project Structure

```bash
php-input-filter/
├── vendor/                  ← Composer autoloading
│   └── autoload.php
├── src/
│   └── InputFilter.php      ← Core Library
├── examples/
│   ├── form.php             ← Bootstrap Example Form
│   └── validate-form.php    ← Input Handling Example
├── README.md
├── documentation.txt
├── composer.json
└── composer.lock
```
## 🙌 Contributing

Contributions, issues, and feature requests are welcome!  
Feel free to check the [issues page](https://github.com/devnhpiash/php-input-filter-package/issues) if you'd like to collaborate.

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

## 📬 Contact

If you like this project or have any questions, feel free to reach out!

- GitHub: [@devnhpiash](https://github.com/devnhpiash)
- Email: developer.nhpiash@gmail.com

---


