<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Admission Form Submitted successfully</h2><br>";
    echo "<p>Here are the details you submitted:</p>";

    // Personal Information
    echo "<h3>Personal Information</h3>";
    echo "<p>Name: " . htmlspecialchars($_POST['name']) . "</p>";
    echo "<p>Father's Name: " . htmlspecialchars($_POST['fatherName']) . "</p>";
    echo "<p>Mother's Name: " . htmlspecialchars($_POST['motherName']) . "</p>";
    echo "<p>Guardian's Name: " . htmlspecialchars($_POST['guardianName']) . "</p>";
    echo "<p>Phone Number: " . htmlspecialchars($_POST['phoneNumber']) . "</p>";
    echo "<p>Parent's Phone Number: " . htmlspecialchars($_POST['parentPhoneNumber']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p>Aadhar Number: " . htmlspecialchars($_POST['aadharNumber']) . "</p>";
    echo "<p>Correspondence Address: " . htmlspecialchars($_POST['correspondenceAddress']) . "</p>";
    echo "<p>Permanent Address: " . htmlspecialchars($_POST['permanentAddress']) . "</p>";
    echo "<p>Gender: " . htmlspecialchars($_POST['gender']) . "</p>";
    echo "<p>Nationality: " . htmlspecialchars($_POST['nationality']) . "</p>";
    echo "<p>Area: " . htmlspecialchars($_POST['area']) . "</p>";
    echo "<p>Religion: " . htmlspecialchars($_POST['religion']) . "</p>";
    echo "<p>Category: " . htmlspecialchars($_POST['category']) . "</p>";
    echo "<p>Date of Birth: " . htmlspecialchars($_POST['dob']) . "</p>";
    echo "<p>Birth Place: " . htmlspecialchars($_POST['birthPlace']) . "</p>";

    // Course Selection
    echo "<h3>Course Selection</h3>";
    echo "<p>Course: " . htmlspecialchars($_POST['course']) . "</p>";
    echo "<p>Second Language: " . htmlspecialchars($_POST['secondLanguage']) . "</p>";

    // Educational Details
    echo "<h3>Educational Details</h3>";
    echo "<p>10th Register Number: " . htmlspecialchars($_POST['tenthRegNo']) . "</p>";
    echo "<p>10th Percentage: " . htmlspecialchars($_POST['tenthPercentage']) . "</p>";
    echo "<p>10th School: " . htmlspecialchars($_POST['tenthSchool']) . "</p>";
    echo "<p>10th Passed Year: " . htmlspecialchars($_POST['tenthPassedYear']) . "</p>";
    echo "<p>10th Board: " . htmlspecialchars($_POST['tenthBoard']) . "</p>";
    echo "<p>12th Board: " . htmlspecialchars($_POST['twelfthBoard']) . "</p>";
    echo "<p>12th Stream: " . htmlspecialchars($_POST['twelfthStream']) . "</p>";

    // Stream Specific Option
    if (isset($_POST['streamOption'])) {
        echo "<p>Stream Option: " . htmlspecialchars($_POST['streamOption']) . "</p>";
    }

    // Languages
    if (isset($_POST['tenthLanguages'])) {
        echo "<p>10th Languages: " . implode(", ", $_POST['tenthLanguages']) . "</p>";
    }
    if (isset($_POST['twelfthLanguages'])) {
        echo "<p>12th Languages: " . implode(", ", $_POST['twelfthLanguages']) . "</p>";
    }

    // File Uploads
    echo "<h3>Uploaded Files</h3>";
    $fileInputs = ['tenthMarksCard', 'twelfthMarksCard', 'aadharCard', 'photo'];
    foreach ($fileInputs as $fileInput) {
        if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] == 0) {
            echo "<p>" . ucfirst($fileInput) . ": " . htmlspecialchars($_FILES[$fileInput]['name']) . " (Size: " . ($_FILES[$fileInput]['size'] / 1024) . " KB)</p>";
        } else {
            echo "<p>" . ucfirst($fileInput) . ": Not uploaded or error occurred.</p>";
        }
    }

} else {
    echo "<p>No form data submitted.</p>";
}
?>