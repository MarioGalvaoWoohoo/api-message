#!/bin/bash
ls -la
echo $USER_PASS | sudo -S docker exec -T app-message /bin/bash -c "cd projects/api-message && sudo -u root composer install"
