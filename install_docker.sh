#!/bin/bash

sudo apt update
sudo apt upgrade -y

sudo apt install apt-transport-https ca-certificates curl software-properties-common -y
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"

sudo apt update
sudo apt install docker-ce -y
apt  install docker-compose -y
apt  install tree
apt-get install php-mysqli -y

sudo systemctl status docker
