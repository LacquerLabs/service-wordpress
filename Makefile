.DEFAULT_GOAL := help

NAME = wordpress
VERSION = 1.0.0
PORT = 80

build: ## Build it
	docker build --pull --tag $(NAME) .

buildnocache: ## Build it without using cache
	docker build --pull --tag $(NAME) --no-cache .

run: ## run it -v ${PWD}/code:/app/code
	docker run -p $(PORT):$(PORT) --name $(NAME)_run --rm -id $(NAME)

runvolume: ## run it with code volume attached
	docker run -p $(PORT):$(PORT) --name $(NAME)_run -v ${PWD}/code:/app/code --rm -id $(NAME)

runshell: ## run the container with an interactive shell
	docker run -p $(PORT):$(PORT) --name $(NAME)_run --rm -it $(NAME) /bin/sh

connect: ## connect to it
	docker exec -it $(NAME)_run /bin/sh

watchlog: ## connect to it
	docker logs -f $(NAME)_run

kill: ## kill it
	docker kill $(NAME)_run

it: build run connect kill ## do it all

.PHONY: help

help: ## Helping devs since 2016
	@cat $(MAKEFILE_LIST) | grep -e "^[a-zA-Z_\-]*: *.*## *" | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
	@echo "For additional commands have a look at the README"

