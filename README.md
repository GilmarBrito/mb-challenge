[![License: MIT](https://img.shields.io/badge/License-MIT-brightgreen.svg)](https://opensource.org/licenses/MIT)

# MB test
Candidate challenge for PHP Developer position at MB.

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Installation

#### Install Using Docker Compose

##### Repository
https://github.com/GilmarBrito/mb-challenge

##### Prerequisites
- [Docker version 25.0.2 and later](https://docs.docker.com/engine/install/)
- [Docker Compose version v2.24.5 and later](https://docs.docker.com/compose/install/)

##### Docker Environment

- PHP v8.3.2
- Nginx Latest
- MySQL v8.3.0

##### Steps
Step 1 - Clone this repo:

```BASH
git clone git@github.com:GilmarBrito/mb-challenge.git
```
or
```BASH
git clone https://github.com/GilmarBrito/mb-challenge.git
```

Step 2 - Open folder:

```BASH
cd mb-challenge
```

Step 3 - Copy .env.template for .env file:

```BASH
cp .env.template .env
```

Step 4 - Run migrations an seeders:

```BASH
docker compose exec php-service php artisan migrate --seed
```

##### Execute (After run up docker containers)

[http://localhost:8080](http://localhost:8080)
User:
Password: secret

* PS.:
  - To run the application, port 8080 on localhost (127.0.0.1) must be free.
  - The .env was posted with the api-key just to facilitate installation by the evaluator. We do not recommend this practice.
  - The user and password data was posted just to facilitate installation by the evaluator. We do not recommend this practice.
  - The api-key was created precisely for this challenge, so it can be shared in the repository.
