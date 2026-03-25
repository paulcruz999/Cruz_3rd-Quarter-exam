<?php 
session_start();
$remarks = "";

if(isset($_POST["Submit"])){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $remarks = "Registration successful! Please login.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" <div style="background-image: url('https://media1.tenor.com/m/XmriPSWwCKUAAAAC/chisa-wuthering-waves.gif'); width: 100%; height: 80vh; background-size: cover; background-position: center; background-attachment: fixed;"></div>>
    
    
    ?>
    <nav class="navbar">
    <div class="navbar-left">
        <img src="Litrato/Baby.jpg" class="Navprofile">
        <h4>AniChisa</h4>
    </div>
      <div class="navbar-right">
         <a class="navbar-btn" href="Login.php">Login</a>
         <a class="navbar-btn" href="Sign-up.php">Sign up</a>
     </div>
 </nav>

    <div style="margin-top: 200px; margin-left: 500px; margin-right: 500px;"   class="card shadow-lg w-100" style="max-width: 480px;">
        
        <div class="card-body">
            <div class="text-center">
                <h1 class="card-title h3">Sign up</h1>
                <p class="card-text text-muted">Register below to create your account</p>
            </div>
            <div class="mt-4">
                <form method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label text-muted">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-muted">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="Submit" class="btn btn-dark btn-lg">Sign up</button>
                    </div>
                    <p class="text-center text-muted mt-4">Already have an account?
                        <a href="Login.php" class="text-decoration-none">Login</a>
                    </p>
                </form>
                <h2><?php echo $remarks; ?></h2>
            </div>
        </div>
       
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>