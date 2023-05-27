<br/>
<p align="center">
  <a href="https://github.com/EW-EndWall/SHORT">
    <img src="https://user-images.githubusercontent.com/43109779/240892441-ca51b36a-c92b-4953-9a71-c151f6c6e773.svg" alt="Logo" width="220" height="220">
  </a>

  <h3 align="center">SHORT</h3>

  <p align="center">
    Copy Paste Shorten
    <br/>
    <br/>
  </p>
</p>

  ![Downloads](https://img.shields.io/github/downloads/EW-EndWall/SHORT/total) ![License](https://img.shields.io/github/license/EW-EndWall/SHORT) 

## Table Of Contents

* [About the Project](#about-the-project)
* [Getting Started](#getting-started)
  * [Installation](#installation)
* [License](#license)

## About The Project

![Screen Shot](https://github.com/EW-EndWall/SHORT/assets/43109779/8a658b88-a5d2-4fea-9192-c910ef132a04)

The URL Shortening Application is a tool that turns long web addresses into short and easy-to-share ones. This way, you can share the links you want with less characters on platforms such as social media, email or messaging. Moreover, the application provides you with statistics that show how many times your links were clicked and which countries they were accessed from. This way, you can track your web traffic and better understand your target audience.

The URL Shortening Application is a simple and effective way to optimize your online presence and reach more people with less hassle.

Warning: The link will be deleted after 1 hour, and it does not keep statistics because it is a test application.


## Getting Started

Easy to install, download, put files on server, upload to sql database, update db.php, ready.

### Installation

1. Clone the repo

```sh
git clone https://github.com/EW-EndWall/SHORT.git
```

2. Enter your DB in `db.php`

```php
$servername = "localhost";
$database = "short";
$username = "root";
$password = "";
```

2. Install sql

```php
phpmyadmin import short.sql
```


## License

Distributed under the MIT License. See [LICENSE](https://github.com/EW-EndWall/SHORT/blob/main/LICENSE.md) for more information.
