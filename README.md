# Installation

You can run this script to run the installation and get started _fast_...
```bash
cd ~/teemill && \
git clone https://github.com/Teemill/laravel-sandbox.git && \
cd ~/teemill/laravel-sandbox && bash ./install && \
sandbox up -d
```

and this is a breakdown of each step...

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

Sandbox is an alias of `sail` and you can use it to start Sail, and initialize the application.

```bash
sandbox up -d
```

Go to http://localhost/welcome to check everything is working as expected

For more information on how to interact with laravel Sail - the [documentation](https://laravel.com/docs/8.x/sail#executing-sail-commands) has no equal
