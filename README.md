# Installation

You can run this script to run the installation and get started _fast_...
```bash
cd ~/teemill && \
git clone https://github.com/Teemill/laravel-sandbox.git && \
cd ~/teemill/laravel-sandbox && bash ./install
```

When you're ready, you can start the application by running...
```
./vendor/bin/sail up
```

If you don't want to write out `./vendor/bin/sail` each time you execute a command, you can add shortcut to your `./.zshrc`.

```bash
# Copy a shortcut helper into the user's path to make it easier
# for the user to run commands
echo 'alias sandbox="~/teemill/laravel-sandbox/sandbox $@"' >> ~/.zshrc

# Reload the bash config with the new alias
source ~/.zshrc
```

Now you should be able to execute all sail commands through the `sandbox` shortcut. For example, if you want to make a new test file. instead of running...
```bash
./vendor/bin/sail artisan make:test --pest ExampleTest
```
You can run...
```bash
sandbox artisan make:test --pest ExampleTest
```


Go to http://localhost/welcome to check everything is working as expected

For more information on how to interact with laravel Sail - the [documentation](https://laravel.com/docs/8.x/sail#executing-sail-commands) has no equal
