<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="content">
        <div>
             
        </div>
        <div class="inputs">
            <input type="text" name="log" class="input" id="log"><br>
            <input type="password" name="pass" class="input hidden" id="pass">
        </div>
        <div>
            <button class="login-button" id="btn">Login</button>
        </div>
        <div>
            
        </div>
    </div>
</body>
    <script>
        document.getElementById('btn').addEventListener('click', function() {
        var pass = document.getElementById('pass');
        var log = document.getElementById('log');


        
        if (pass.classList.contains('hidden')) 
        {
            pass.classList.remove('hidden');
            log.disabled = true;
            log.classList.add('disabled');

        } else 
        {
            
        }
        });
    </script>
</html>