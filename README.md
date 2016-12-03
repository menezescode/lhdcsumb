# README

### Install Git Bash
* https://git-scm.com/downloads

### Install VirtualBox
* https://www.virtualbox.org/wiki/Downloads

### Install Vagrant
* https://www.vagrantup.com/downloads.html

### Installing Webserver:
* Open Git Bash
* Clone github repo:
```
git clone https://github.com/menezescode/lhdcsumb.git
```
* Navigate to lhdcsumb/env
* Install webserver: 
```
vagrant up
```
* After installation, ssh into webserver:
```
vagrant ssh
```
* Find inet addr of eth1:
```
ifconfig
```
* On your computer's browser, use the inet addr as the webserver's url page.
