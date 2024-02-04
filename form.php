<!DOCTYPE html>
<html>
<head>
    <title>PHP SMS</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" />
</head>
<body >

    <h1 style="margin-top: 50px;">SMS</h1>
    <form method="post" action="send.php">
        <label for="personne">Title</label>
        <input type="text" name="personne" id="personne" />
        <label for="number">Number</label>
        <input type="text" name="number" id="number" />
        <label for="message">Message</label>
        <textarea name="message" id="message" style="resize: none;"></textarea>
            
            <br />
          
        <button>Send</button>
    </form>
</body>
</html>