restart_containers
sleep 15
docker exec -it ztsphp bash -c "cd channel; php zts.php;"
