# Hanna 411

## Prereqs

- [Homebrew](https://brew.sh/) - package installation systeem for macOS

## Setup

Install php using Homebrew.

```
brew install php@7.2
```

Serve project

```
php -S localhost:8000
```

## Using project

Once php is running on localhost:8000, you can view the pages.

`http://localhost:8000/html` to view full report generator HTML with button.

`http://localhost:8000/spreadsheet/download.php` to download spreadsheet directly.

`http://localhost:8000/spreadsheet/db_up.php` to add test data to database (in case db is deleted.)
