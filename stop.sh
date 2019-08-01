#!/usr/bin/env bash

docker rm $(docker stop $(docker ps -a -q --filter ancestor=mbztest --format="{{.ID}}"))