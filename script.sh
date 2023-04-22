#!/bin/bash
echo $USER_PASS | sudo -S docker exec -it app-message /bin/bash -c "cd projects/api-message && sudo -u root composer install"
