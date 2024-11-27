# SOLID Principles

The SOLID principles are five object-oriented design principles intended to make software systems scalable, maintainable, and easier to understand.

---

## **1. Single Responsibility Principle (SRP)**  
A class should have **one, and only one reason to change**.  
This means a class should focus on a single responsibility or functionality.  

**Example**:  
Instead of a `UserManager` class handling user data, email notifications, and logging, split responsibilities:  
- `UserDataManager` for user data.  
- `EmailService` for sending emails.  
- `ActivityLogger` for logging activities.

---

## **2. Open/Closed Principle (OCP)**  
A class should be **open for extension but closed for modification**.  
New functionality can be added without changing existing code.  

**Example**:  
Instead of adding a new payment method by modifying a `PaymentProcessor` class, use an interface:  
- Define a `PaymentProcessor` interface.  
- Create separate classes for `PayPal`, `CreditCard`, and new payment methods.

---

## **3. Liskov Substitution Principle (LSP)**  
Subtypes must be substitutable for their base types without altering program behavior.  

**Example**:  
A `Bird` base class has a `fly()` method. If a `Penguin` subclass overrides it (since penguins can’t fly), it violates LSP.  
**Solution**:  
- Create an `IFlyingBird` interface for birds that can fly.  
- Exclude `Penguin` from implementing the `fly()` method.

---

## **4. Interface Segregation Principle (ISP)**  
A class should not be forced to implement interfaces it does not use.  

**Example**:  
Instead of a `Printer` interface with `print()`, `scan()`, and `fax()`, break it into smaller interfaces:  
- `IPrintable`, `IScannable`, and `IFaxable`.  
Classes implement only the interfaces they require.

---

## **5. Dependency Inversion Principle (DIP)**  
High-level modules should not depend on low-level modules. Both should depend on abstractions.  

**Example**:  
Instead of a `ShoppingCart` class depending directly on a `PayPalPayment` class:  
- Define a `PaymentProcessor` interface.  
- Both `PayPalPayment` and `CreditCardPayment` implement the interface.  
- `ShoppingCart` depends on the `PaymentProcessor` interface, enabling flexibility.

---

### **Why Use SOLID Principles?**  
1. Improves maintainability and scalability.  
2. Reduces bugs and technical debt.  
3. Encourages modular, reusable, and extensible code.  
