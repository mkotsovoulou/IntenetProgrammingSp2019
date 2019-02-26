<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>collect info</title>
  <!-- Compressed CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous">
</head>
<body>
 
	<form method="get" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
     <div class="card-divider">
  <h1>
     Welcome
  </h1>
  </div>
    <div class="card" style="padding: 20px; width: 70%; margin: 20px auto;">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required/>
     <label for="password">Password</label>
    <input type="password" name="password" id="password" required/>
     <label for="email">email</label>
    <input type="email" name="email" id="email" required/>
     <input type="submit" name="submit" value="submit"/>
    <input type="reset" value="reset"/>
    </div>
  </form>
  
<?php
if (isset($_GET["submit"]))
{
$username = $_GET["username"];
$password = $_GET["password"];
$email = $_GET["email"];

echo "data submitted from the form: $username, $password, $email";
}

?>
  
  <!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg= sha384-9ksAFjQjZnpqt6VtpjMjlp2S0qrGbcwF/rvrLUg2vciMhwc1UJJeAAOLuJ96w+Nj sha512-UMSn6RHqqJeJcIfV1eS2tPKCjzaHkU/KqgAnQ7Nzn0mLicFxaVhm9vq7zG5+0LALt15j1ljlg8Fp9PT1VGNmDw==" crossorigin="anonymous"></script>
</body>
</html>