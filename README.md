# service wordpress
A wordpress container based on `lacquerlabs/service-webapp`

Need documentation of the ENV vars here

Want to docker build it manually?  cool..

**build it**
`docker build -t webapp .`

**run it**
`docker run --name webapp_test --rm -id webapp`

**connect to it**
`docker exec -it webapp_test /bin/sh`

**kill it**
`docker kill webapp_test`
