# set up for docker

1. Install docker desktop
    => https://www.docker.com/products/docker-desktop/
2. Open docker desktop applictaion.
3. Clone project.
4. run docker below commands:
    => docker-compose build app [This command is create conatiner][https://prnt.sc/sy0IGXcrKNGs].
    => docker-compose up -d [This command is running/created container images][https://prnt.sc/TcU0lfrduN9y]
    => Go to docker desktop and you will see the one script conatiner with four child conatiner. [ https://prnt.sc/NxhxyUItyena]
    => go to "gostock-db" container, click on CLI and run the mysql login command.
        => mysql -u root -p
        => password id: Root@123 [https://prnt.sc/9uRy1T7IqceV]
    => After that run change password command for root user.
        => ALTER USER root@localhost IDENTIFIED WITH mysql_native_password BY 'Root@123'; 
            [set your password] [https://prnt.sc/i_K8JofibsBB]
    => After that you will set PRIVILEGES on users.
        => GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';
        => GRANT ALL PRIVILEGES ON *.* TO 'gostock'@'%';
    => After that run change password command for gostock user.
        => ALTER USER root@localhost IDENTIFIED WITH mysql_native_password BY 'Root@123'; 
            [set your password] [https://prnt.sc/9z4AKcUpBJtc]
    => Set created new password on .env file [https://prnt.sc/2YLR9xU_RtBV]
    => docker-compose down [This command is removed container][OPTIONAL] 
5. After all set you will run phpmyadmin.
    => Database URL [http://localhost:8081/index.php] [https://prnt.sc/DBDibsflF5mV]
    => after run you will see DB in phpmyadmin. [https://prnt.sc/XHnm6bL3V00Q]
6. When phpmyadmin set then you'll set user/admin panel.
    => Installer URL [http://localhost:8000/installer/script] [https://prnt.sc/mrXywPnRziSP]
    => Filled all database credentials and application admin user with APP URL. [https://prnt.sc/j443mOlPWZPG]
    => Once installation finished you will be able to see the success message with admin username and password. [https://prnt.sc/UdD2wY0jxXyq]
	=> Admin Panel. [https://prnt.sc/iqBZR2Vx2YKR] 
    => User Panel. [https://prnt.sc/EcZgBK80cWA9]  