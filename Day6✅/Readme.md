

## ✅ **Day 6: Forms and Superglobals**

### 🔹 1. **HTML Form Basics**

```html
<form action="process.php" method="post">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    <input type="submit" value="Submit">
</form>
```

* `method="post"` → Data is sent securely.
* `action="process.php"` → Form data goes to this PHP file.

---

### 🔹 2. **Using `$_POST` and `$_GET`**

#### In `process.php`:

```php
<?php
if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if (!empty($name) && !empty($age)) {
        echo "Hello, $name. You are $age years old.";
    } else {
        echo "Please fill in all fields.";
    }
}
?>
```

✅ **Note:**

* `$_POST`: Data from POST method
* `$_GET`: Data from URL using GET
* `$_REQUEST`: Accepts both GET and POST
* `$_SERVER`: Gives server-related info like path, request method, etc.

---

### 🔹 3. **Example Using `$_GET`**

```html
<form method="get" action="get_example.php">
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>
```

#### `get_example.php`:

```php
<?php
echo "Welcome, " . $_GET['username'];
?>
```

---

### 🔹 4. **Superglobals Recap**

| Superglobal | Description                            |
| ----------- | -------------------------------------- |
| `$_POST`    | Data from POST forms                   |
| `$_GET`     | Data from URL/form with method GET     |
| `$_REQUEST` | Combines GET + POST + COOKIE           |
| `$_SERVER`  | Server info (path, request type, etc.) |

---

### ✅ **Practice Task**

**👉 Create a form that:**

* Asks for your **name** and **age**
* Submits via POST method
* Validates using `isset()` and `empty()`
* Displays the result if data is filled

