# Installation

Go to your Teemill root dir
```bash
cd ~/teemill
```

Clone the repository

```bash
git clone https://github.com/Teemill/laravel-sandbox.git
```

Install Laravel Sail dependencies

```bash
cd ~/teemill/laravel-sandbox && bash install.bash
```

Start Sail to initialize the application

```bash
vendor/bin/sail up -d
```

Go to http://localhost/welcome to check everything is working as expected
