<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
      
    <title>SCP Voiceover</title>
</head>
<header class="navbar">
  <div class="nav-center">
    <div class="nav-header">
        <a href="index.php">
        <img src="images/logo.png" class='logo' alt="logo">
        </a>
        <button class="nav-toggle">
            <i class="fas fa-bars"></i>
        </button>
    </div> 
    <!-- links -->
    <ul class="links">
        <li>
            <a href="#intro">SCP-002</a>
        </li>
        <li>
            <a href="#one">SCP-003</a>
        </li>
        <li>
            <a href="#two">SCP-004</a>
        </li>
        <li>
            <a href="#three">SCP-005</a>
        </li>
        <li>
            <a href="#SCP-006">SCP-006</a>
        </li>
    </ul>
</header>

<body>
<div class="main-content">
    <div class="intro"  id='intro'>
        <h1>Welcome to The SCP</h1>

        <h3>This website contains sensitive material.  </h3>
    </div>

    <?php
    
        $files = json_decode(file_get_contents("info.json"));
        
        foreach($files as $display)
        {
            echo "
                <div class='SCP-content'>
                <h3>File: $display->file</h3>
                <h3>Special Containment Procedures</h3>
                <p id='$display->file'> $display->scp</p>
                <h3>Description</h3>
                <p id='$display->description'>$display->description</p>
                <h3>Reference</h3>
                <p> $display->reference</p>
                <button id='$display->place' class='btn btn-primary w-25'>Click for SCP</button>
                <button onclick='Stop()' class='btn btn-primary w-25'>Click to Stop</button>
                </div>
                <br>
            ";
        }
    
    ?>

</div>



<!-- JS -->
<script src="script.js"></script>    
</body>
</html>


