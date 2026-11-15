# containers-test
 PHP/MySQL in docker containers

Tutorials which helped me make this:
- https://dev.to/satellitebots/create-a-web-server-and-save-form-data-into-mysql-database-using-php-beginners-guide-fah
- https://dev.to/ehtesham_ali_abc367f36a5b/dockerize-your-php-and-mysql-application-a-step-by-step-guide-to-multi-container-apps-4g4g
- https://oneuptime.com/blog/post/2026-03-31-mysql-docker-init-sql-scripts/

This is a small personal project in which I start a Docker container containing an Apache version of PHP, and a MySQL server. I didn't do this to make anything novel; I did it for exercising my own hands-on experience with setting this stuff up (As helpful as the tutorials were, there were a few areas in which I had to stray from them in order to get stuff running.) And I'm posting it to GitHub so that I don't lose it, in case my computer breaks.

If I end up making enough of these smaller projects, I'll probably end up re-organizing them into one repository.

If you have Docker installed, running the command in `start.sh` should start the server; then go to `localhost:8080` to see the main page.