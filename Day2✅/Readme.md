Perfect, Maroof! Let’s dive into **Day 2: PHP Variables, Data Types & Operators** 🔥

---

# 📅 **Day 2: Variables, Data Types & Operators**

## 🎯 Goal:

* Understand PHP variables and their types
* Learn how to use different operators
* Build a **basic calculator**

---

## 🧠 **1. Variables in PHP**

* Start with `$`
* Don’t need to declare type — PHP is dynamically typed

```php
<?php
$name = "Maroof";      // String
$age = 16;             // Integer
$height = 5.8;         // Float
$isStudent = true;     // Boolean

echo "Name: $name, Age: $age";
?>
```

---

## 🧪 **2. Data Types**

| Type    | Example           |
| ------- | ----------------- |
| String  | `"Hello"`         |
| Integer | `100`             |
| Float   | `3.14`            |
| Boolean | `true` / `false`  |
| Array   | `["red", "blue"]` |
| NULL    | `NULL`            |

You can check the data type using:

```php
var_dump($name); // Shows type and value
```

---

## ➗ **3. Arithmetic Operators**

```php
$a = 10;
$b = 3;

echo $a + $b;  // Addition
echo $a - $b;  // Subtraction
echo $a * $b;  // Multiplication
echo $a / $b;  // Division
echo $a % $b;  // Modulus (Remainder)
```

---

## 🧮 **4. Assignment Operators**

```php
$x = 5;
$x += 2;  // Same as $x = $x + 2;
$x -= 1;
```

---

## 🔍 **5. Comparison Operators**

```php
$a = 10;
$b = 5;

echo $a == $b;  // Equal
echo $a != $b;  // Not equal
echo $a > $b;   // Greater than
echo $a < $b;   // Less than
```

---

## 🔗 **6. Logical Operators**

```php
$x = 10;
$y = 5;

if($x > 5 && $y < 10) {
    echo "Both conditions are true";
}

if($x > 20 || $y < 10) {
    echo "One of the conditions is true";
}
```

---

# 🔨 Practice Project: **Basic PHP Calculator**

📄 **calculator.php**

```php
<form method="POST">
  <input type="number" name="num1" placeholder="First Number">
  <input type="number" name="num2" placeholder="Second Number">
  
  <select name="operator">
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="mul">*</option>
    <option value="div">/</option>
  </select>

  <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if(isset($_POST['calculate'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $op = $_POST['operator'];

  if($op == 'add') {
    $result = $num1 + $num2;
  } elseif($op == 'sub') {
    $result = $num1 - $num2;
  } elseif($op == 'mul') {
    $result = $num1 * $num2;
  } elseif($op == 'div') {
    $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero!";
  } else {
    $result = "Invalid operator!";
  }

  echo "<h3>Result: $result</h3>";
}
?>
```

---

## ✅ Checklist for Day 2

| Task                         | Done |
| ---------------------------- | ---- |
| Learn variables & data types | ✅    |
| Understand operators         | ✅    |
| Build a calculator           | ✅    |

---

Would you like:

* 📁 A downloadable ZIP with today’s files?
* 📄 A PDF summary?
* 🚀 Move on to **Day 3: Conditionals & Loops**?

Let me know, bro!
