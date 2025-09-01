# Laravel Multilang

A simple multilingual package for Laravel to manage translations easily using JSON language files.

---

## 📦 Installation

You can install this package directly from GitHub.

### 1. Add the repository to your 
`composer.json`:

```
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/miladul/laravel-multilang.git"
    }
]
```

### 2. Require the package using Composer:
```
composer require miladul/laravel-multilang:dev-main

```

## 3. Publish the configuration and language files:
```
php artisan vendor:publish --tag=multilang
```
This will create the default language files in resources/lang.

### 🌐 Language Files

Language files are stored as JSON files in resources/lang.
like: 
```
resources/lang/
├── en.json      # English
├── bn.json      # Bengali
├── cn.json      # Chinese
└── in.json      # Hindi/India
```
### Example en.json:
```json
{
    "welcome": "Welcome to our website",
    "goodbye": "Goodbye"
}
```
### Example bn.json
```
{
    "welcome": "আমাদের ওয়েবসাইটে স্বাগতম",
    "goodbye": "বিদায়!"
}
```

## 🚀 Usage
### Using the mlang helper function:
```
echo mlang('welcome'); // Outputs translation based on current locale
```
### Using Laravel’s standard __ helper function:
```
<p>{{ __('goodbye') }}</p>
```
#### Both methods work the same way. mlang() is just a shortcut for convenience.

## 🌍 Changing Locale
```angular2html

app()->setLocale('en') // Switch to English
app()->setLocale('bn')  // Switch to Bengali
app()->setLocale('cn')  // Switch to Chinese
app()->setLocale('in')  // Switch to Hindi/India

```

## ✏️ Adding or Updating Translations
1. Open the language JSON file for the desired locale, e.g., resources/lang/bn.json.
2. Add new key-value pairs or update existing ones.
3. you can add new file that must be match with your locale. eg: ```ar.json for arabic language```
4. Run `php artisan config:clear` to clear the configuration cache.
### Example:  bn.json
```
{
    "welcome": "আমাদের ওয়েবসাইটে স্বাগতম",
    "goodbye": "বিদায়!",
    "contact_us": "যোগাযোগ করুন" //new one
}

```

## 📝 Summary
1. Install via Composer from GitHub.
2. Publish language files with php artisan vendor:publish --tag=multilang.
3. Use mlang('key') or __('key') to get translations.
4. Manage translations via JSON files in resources/lang.
5. Dynamically switch locale using App::setLocale('locale').


