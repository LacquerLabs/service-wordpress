# service wordpress

A wordpress container based on `lacquerlabs/service-php7`

Need better documentation of the ENV vars.

## ENV Variables for your docker-compose.yml
* `DATABASE_URL` ... URI For database in this format `scheme://user:pass@host:port/database`
* `DB_CHARSET` ... utf8mb4
* `AUTH_KEY` ... setme_AUTH_KEY
* `SECURE_AUTH_KEY` ... setme_SECURE_AUTH_KEY
* `LOGGED_IN_KEY` ... setme_LOGGED_IN_KEY
* `NONCE_KEY` ... setme_NONCE_KEY
* `AUTH_SALT` ... setme_AUTH_SALT
* `SECURE_AUTH_SALT` ... setme_SECURE_AUTH_SALT
* `LOGGED_IN_SALT` ... setme_LOGGED_IN_SALT
* `NONCE_SALT` ... setme_NONCE_SALT
* `WP_DEBUG` ... false
* `WP_TABLE_PREFIX` ... wp2_

## Make Options
* `build` Build it
* `buildnocache` Build it without using cache
* `tag` tag the container with the current VERSION (used for doing a release)
* `run` run it as a normal container
* `runshell` run the container with an interactive shell instead of default CMD
* `connect` Start a shell on the running container
* `watchlog` connect to running containers logs
* `kill` kill the running container
* `test` Simple tests - no tests yet
* `release` Create and push release to docker hub
* `help` Shows this makefile
