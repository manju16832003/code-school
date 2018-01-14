# Erlang/Elixir/Phoenix

`elixir -v`

## Phoenix First time
- Install Elixir - When we install Elixir, we will usually get Erlang too.
- Install Hex package manager `mix local.hex`

For Debian-based systems may need to explicitly install Erlang to get all the needed packages
```
$ wget https://packages.erlang-solutions.com/erlang-solutions_1.0_all.deb && sudo dpkg -i erlang-solutions_1.0_all.deb
$ sudo apt-get update
$ sudo apt-get install esl-erlang
```

### Install Phoenix Archive
`$ mix archive.install https://github.com/phoenixframework/archives/raw/master/phx_new.ez`

### Phoenix App commands

Create new app

`mix phx.new hello`

`mix phx.server` --> Run The APP

`mix ecto.create`  --> Configure Database


