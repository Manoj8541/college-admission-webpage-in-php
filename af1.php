<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_admissions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected Successfully";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $fatherName = $_POST['fatherName'];
    $motherName = $_POST['motherName'];
    $guardianName = $_POST['guardianName'];
    $phoneNumber = $_POST['phoneNumber'];
    $parentPhoneNumber = $_POST['parentPhoneNumber'];
    $email = $_POST['email'];
    $aadharNumber = $_POST['aadharNumber'];
    $correspondenceAddress = $_POST['correspondenceAddress'];
    $permanentAddress = $_POST['permanentAddress'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $specifyNationality = $_POST['specifyNationality'] ?? '';
    $area = $_POST['area'];
    $religion = $_POST['religion'];
    $otherReligion = $_POST['other_religion'] ?? '';
    $category = $_POST['category'];
    $dob = $_POST['dob'];
    $birthPlace = $_POST['birthPlace'];
    $course = $_POST['course'];
    $secondLanguage = $_POST['secondLanguage'];
    $tenthBoard = $_POST['tenthBoard'];
    $tenthRegNo = $_POST['tenthRegNo'];
    $tenthPercentage = $_POST['tenthPercentage'];
    $tenthPassedYear = $_POST['tenthPassedYear'];
    $tenthSchool = $_POST['tenthSchool'];
    $twelthBoard = $_POST['twelthBoard'];
    $twelthRegNo = $_POST['twelthRegNo'];
    $twelthPercentage = $_POST['twelthPercentage'];
    $twelthPassedYear = $_POST['twelthPassedYear'];
    $twelthSchool = $_POST['twelthSchool'];
    $twelthStream = $_POST['twelthStream'];
    $admissionNumber = $_POST['admissionNumber'];

    // Insert data into the database
    $sql = "INSERT INTO admissions (name, fatherName, motherName, guardianName, phoneNumber, parentPhoneNumber, email, aadharNumber, correspondenceAddress, permanentAddress, gender, nationality, specifyNationality, area, religion, otherReligion, category, dob, birthPlace, course, secondLanguage, tenthBoard, tenthRegNo, tenthPercentage, tenthPassedYear, tenthSchool, twelthBoard, twelthRegNo, twelthPercentage, twelthPassedYear, twelthSchool, twelthStream, admissionNumber) 
            VALUES ('$name', '$fatherName', '$motherName', '$guardianName', '$phoneNumber', '$parentPhoneNumber', '$email', '$aadharNumber', '$correspondenceAddress', '$permanentAddress', '$gender', '$nationality', '$specifyNationality', '$area', '$religion', '$otherReligion', '$category', '$dob', '$birthPlace', '$course', '$secondLanguage', '$tenthBoard', '$tenthRegNo', '$tenthPercentage', '$tenthPassedYear', '$tenthSchool', '$twelthBoard', '$twelthRegNo', '$twelthPercentage', '$twelthPassedYear', '$twelthSchool', '$twelthStream', '$admissionNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Admission number $admissionNumber has been successfully stored.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
