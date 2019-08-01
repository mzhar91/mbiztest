#!/usr/bin/env bash

echo "Build image"
nohup sh -c "docker build --no-cache -t mbztest ." &

wait

echo "Run container"
nohup sh -c "docker run -p $2:80 -v $1:/app -d mbztest"

wait

sudo chown $USER:$USER www
sudo chmod -R 777 www

cd www
composer dump-autoload
cd ..