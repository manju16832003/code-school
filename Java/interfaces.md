// The Java programming language is mainly about developing four kinds of types - classes, interfaces, enums, and annotations

Interfaces in Java could contain only two kind of members

- Static constants: All variable declarations in an interface would always be public static and final and would require an assignment
- Abstract methods: All methods in an interface would be public and abstract

Example: 

public interface SomeInterface {
    int SOME_CONSTANT = 35; // variable declaration
    int abstractMethod(int x, int y);   // method declaration
}

