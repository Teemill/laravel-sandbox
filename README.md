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
cd ~/teemill/laravel-sandbox && bash ./install
```

Start Sail to initialize the application

```bash
vendor/bin/sail up -d
```

Go to http://localhost/welcome to check everything is working as expected

For more information on how to interact with laravel Sail - the [documentation](https://laravel.com/docs/8.x/sail#executing-sail-commands) has no equal
