

## ✅ **Day 5: Functions**

### 🔹 1. **Creating and Calling a Function**

```php
function greet() {
    echo "Hello, welcome to PHP!<br>";
}

greet(); // Calling the function
```

---

### 🔹 2. **Function with Parameters**

```php
function greetUser($name) {
    echo "Hello, $name! Welcome back.<br>";
}

greetUser("Maroof");
greetUser("Ali");
```

---

### 🔹 3. **Function with Return Value**

```php
function add($a, $b) {
    return $a + $b;
}

$sum = add(5, 10);
echo "Sum: $sum<br>"; // Outputs: Sum: 15
```

---

### 🔹 4. **Built-in Functions vs User-defined**

#### ✅ Built-in Example:

```php
echo strlen("PHP"); // 3
echo strtoupper("hello"); // HELLO
```

#### ✅ User-defined Example:

```php
function square($n) {
    return $n * $n;
}

echo square(4); // 16
```

---

### ✅ **Practice: Greeting Function**

Create a **reusable greeting function** that:

* Takes a name as a parameter.
* Returns a greeting like “Hello, Maroof! Have a great day.”

#### 🔽 Example:

```php
function customGreeting($name) {
    return "Hello, $name! Have a great day.<br>";
}

echo customGreeting("Maroof");
echo customGreeting("Sara");
```

