 <?php
   session_start();

 ?>
 
 <style>
    body,
h2,
form,
input,
button {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  box-sizing: border-box;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f0f0f0;
}
.login-container {
  background-color: #ffffff;
  padding: 2em;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  text-align: center;
}
h2 {
  margin-bottom: 1em;
  color: #333333;
}
.input {
  margin-bottom: 1em;
  text-align: left;
}
label {
  display: block;
  margin-bottom: 0.5em;
  color: #333333;
}
input {
  width: 100%;
  padding: 0.5em;
  border: 1px solid #cccccc;
  border-radius: 4px;
}
button {
  width: 100%;
  padding: 0.75em;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: #ffffff;
  font-size: 1em;
  cursor: pointer;
}
button:hover {
  background-color: #0056b3;
}
@media (max-width: 600px) {
  .login-container {
    padding: 1em;
  }
  input,
  button {
    padding: 0.75em;
  }
}
 
    </style>
 <div class="login-container">
        <h2>LOGIN</h2>
        
        <?php 
          if(isset($_SESSION["failure"])){
            echo("<p  class='text-danger'>
                 Invalid Credentials
            </p>");
            unset($_SESSION["failure"]); 

          }
        ?>
        <form method="post"  action="../mikes_project/classes/handleLogin.php">
            <div class="input">
                <label for="username">Username:</label>
                <input type="email" id="username" name="email" required  >
            </div>
            <div class="input">
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>
            </div>
            <button type="submit" name ="login"> Login</button>
        </form>
    </div>