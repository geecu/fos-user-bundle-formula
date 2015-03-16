## Nothing works yet!!!

Here are the steps to reproduce this nothingness! :)

First, install the symfony-bundle-installer, if you don't have it already
```
git clone https://github.com/geecu/symfony-bundle-installer ~/symfony-bundle-installer
cd ~/symfony-bundle-installer
composer install
```

Second, install this formula manually (it's not yet registered in packagist)
```
git clone https://github.com/geecu/fos-user-bundle-formula ~/fos-user-bundle-formula
cd ~/fos-user-bundle-formula
composer dump-autoload
```

Run the formula
```
cd ~/symfony-bundle-installer
./bin/symfony-bundle install ~/fos-user-bundle-formula
```
