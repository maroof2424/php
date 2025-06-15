## ✅ **Day 7: PHP with MySQL (CRUD Basics)**

**Goal**: Learn how to connect PHP to a MySQL database and perform basic CRUD (Create, Read, Update, Delete) operations.

---

### 🔧 Prerequisites

* Start your Apache & MySQL from **XAMPP** or **WAMP**
* Open **phpMyAdmin** at `http://localhost/phpmyadmin/`

---

### ✅ Step 1: Create a MySQL Database

```sql
CREATE DATABASE school;
USE school;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    email VARCHAR(100)
);
```

---

### ✅ Step 2: Connect PHP to MySQL

```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "school";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

---

### ✅ Step 3: Create Student Form (HTML + PHP Insert)

```php
<!-- save this as insert.php -->
<form method="post" action="">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<?php
include("db.php"); // Your database connection file

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $age   = $_POST['age'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, age, email) VALUES ('$name', $age, '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
```

---

### ✅ Step 4: Fetch and Display Students

```php
<?php
include("db.php");
$result = mysqli_query($conn, "SELECT * FROM students");

echo "<h2>Student List</h2>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "Name: {$row['name']} - Age: {$row['age']} - Email: {$row['email']}<br>";
}
?>
```

---

### ✅ Step 5: Update & Delete (Optional for Day 7)

Let me know if you'd like to implement **Update** and **Delete** operations in a student table UI.

---

## 🧪 Practice Task

👉 Build a form that:

* Accepts **student name**, **age**, and **email**
* Saves to MySQL
* Displays all saved students below
