# Application

* Setup Hostname & Port:

  - open file: src/Route.php
   - line 5 & 6
     - define("PORT", ":8081");
     - define("BASEURL", "http://" . {server_name} . PORT);

# Docker Way

* Requirement : docker & php composer

* Make executable :
  - sudo chmod +x run.sh
  - sudo chmod +x stop.sh 

* Run : ./run.sh "{fullpath dir}/www" {port}

* Access : http://{server_name}{port}

* Stop: ./stop.sh

* If folder cant be modified or accessed, please type :\
  cd (fullpath dir) \
  sudo chown $USER:$USER www\
  sudo chmod -R 777 www


# Installed Machine (Apache or Nginx)

* Copy all file under **www** folder to your **webroot** folder
* Go to {app_folder}
* Run : composer dump-autoload
