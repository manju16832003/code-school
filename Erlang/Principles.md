# Erlang Principles

# Getting Some Other Guy to Fix it

```
Letting somebody else fix an error rather than doing it yourself is a good idea and encourages specialization. If I need surgery, I go to a doctor and don't try to operate on myself.

If something trivial in my car goes wrong, the car's control computer will try to fix it. If this fails and something big goes wrong, I have to take the car to the garage, and some other guy fixes it.

If something trivial in an Erlang process goes wrong, I can try to fix it with a catch or try statement. But if this fails and something big goes wrong. I'd better just crash and let the other process fix the error.
```