CREATE USER 'chatroot'@'localhost' IDENTIFIED WITH mysql_native_password AS 'user';GRANT USAGE ON *.* TO 'chatroot'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON `chatbox`.* TO 'chatroot'@'localhost' WITH GRANT OPTION;