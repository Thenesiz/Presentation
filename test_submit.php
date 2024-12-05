<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Form submitted! Feedback: " . htmlspecialchars($_POST['feedback']);
} else {
    echo "Form not submitted.";
}
?>
