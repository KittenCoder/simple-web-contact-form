<?php
// Set values for ease of use
$name = urldecode($_REQUEST['name']);
$email = urldecode($_REQUEST['email']);
$issue = urldecode($_REQUEST['issue']);
$comment = urldecode($_REQUEST['comment']);
$issues = array("Query", "Feedback", "Complaint", "Other");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Simple Web Contract Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>
    <body>
        <h1>Simple Web Contact Form</h1>
        <form method='POST' action='show-form-data.php'>
            <label for='name'>Name: </label><br>
            <input type='text' id='name' name='name' value='<?php echo $name; ?>'>
            <br>
            <label for='email'>Email: </label><br>
            <input type='text' id='email' name='email' value='<?php echo $email; ?>'>
            <br>
            <label for='issue'>Issue: </label><br>
            <select name='issue' id='issue'>
                <?php
                    // Loop through each issue to see if one matches.
                    // If it does, then we print it out as the selected one
                    foreach($issues as $currentIssue) {
                        if ($currentIssue === $issue) {
                            echo "<option value='" . $currentIssue . "' selected>" . $currentIssue . "</option>";
                        } else {
                            echo "<option value='" . $currentIssue . "'>" . $currentIssue . "</option>";
                        }
                    }
                ?>
            </select>
            <br>
            <label for='comment'>Comment: </label><br>
            <textarea id='comment' name='comment' rows='4' cols='50'><?php echo $comment; ?></textarea>
            <br>
            <input type='submit' value='Submit'>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </form>
    </body>
</html>
