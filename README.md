Dokuwiki in Docker
==================

To work on the initial dokuwiki setup locally, just run `./dc up -d` and it
will start up some basic dev containers with the initial admin password of
`password`, running the wiki at `https://wiki.dev:9443` (alias `wiki.dev` in
your hosts file).

The wiki is started already secured.  There is an account called `admin` that
is pregenerated with the password that you specify in the envvar
`INITIAL_ADMIN_PASSWORD` to the wiki container.  Once you access the wiki, you
should create another admin account that is associated with a personal user and
then delete the initial admin account. 

All of the wiki data and configuration is stored in a named data volume called
`wiki_data`, which is mounted at `/wiki` inside the wiki container.
