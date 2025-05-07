<?php
// Variables for ease of use
$name = urldecode($_REQUEST['name']);
$email = urldecode($_REQUEST['email']);
$issue = urldecode($_REQUEST['issue']);
$comment = urldecode($_REQUEST['comment']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>
    <body>
        <h1>Form Data</h1>
        <?php echo "<p>Name: " . $name . "</p><p>Email: " . $email . "</p><p>Issue: " . $issue . "</p><p>Comment: " . $comment . "</p>" ?>
        <p><a href='index.php'>Back to form -></a></p>
        <p><a href='index.php?<?php echo "name=" . urlencode($name) . "&email=" . urlencode($email) . "&issue=" . urlencode($issue) . "&comment=" . urlencode($comment); ?>'>Edit form -></a></p>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>
