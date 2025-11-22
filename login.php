<h1>login form</h2>
<form action="register_save.php" method="POST" class="box">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">login</button>
</form>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    h1 {
        color: #444;
        margin-bottom: 20px;
    }

    .box {
        background: white;
        padding: 20px;
        width: 300px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
       background: #4CAF50;
        border: none;
        padding: 10px;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background: #43a047;
    }
</style>
