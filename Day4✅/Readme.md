Great! Here's your full **Day 4** lesson on **Arrays in PHP** with clear explanations, examples, and a practice task.

---

## ✅ **Day 4: Arrays in PHP**

### 🔹 1. **Indexed Arrays**

An indexed array uses numeric keys (starting from 0).

```php
$students = ["Ali", "Maroof", "Sara"];
echo $students[1]; // Outputs: Maroof
```

Loop through:

```php
foreach ($students as $student) {
    echo "Student: $student <br>";
}
```

---

### 🔹 2. **Associative Arrays**

Associative arrays use named keys.

```php
$marks = [
    "Ali" => 85,
    "Maroof" => 92,
    "Sara" => 78
];
echo $marks["Maroof"]; // Outputs: 92
```

Loop through:

```php
foreach ($marks as $name => $score) {
    echo "$name scored $score <br>";
}
```

---

### 🔹 3. **Multidimensional Arrays**

These are arrays inside arrays.

```php
$students = [
    ["Ali", 85],
    ["Maroof", 92],
    ["Sara", 78]
];

foreach ($students as $student) {
    echo "{$student[0]} scored {$student[1]} <br>";
}
```

---

### 🔹 4. **Useful Array Functions**

```php
$fruits = ["Apple", "Banana"];
array_push($fruits, "Orange"); // Adds to the end

echo count($fruits); // 3

print_r($fruits); // Prints entire array

var_dump($fruits); // Prints array with data types
```

---

### ✅ **Practice Task**

👉 Create an array of student names and loop through it using:

* `for` loop (for indexed)
* `foreach` loop
* Print the total number of students using `count()`

---

