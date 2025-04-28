<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];
$full_name = $_POST["full_name"] ?? '';
$linkedin = $_POST["linkedin"] ?? '';
$instagram = $_POST["instagram"] ?? '';
$bio = $_POST["bio"] ?? '';
$interests = $_POST["interests"] ?? '';
$story = $_POST["story"] ?? '';

// Check if profile exists
$stmt = $pdo->prepare("SELECT * FROM profiles WHERE username = ?");
$stmt->execute([$username]);
$existingProfile = $stmt->fetch();

try {
    if ($existingProfile) {
        // Update profile
        $updateStmt = $pdo->prepare("UPDATE profiles SET full_name = ?, linkedin = ?, instagram = ?, bio = ?, interests = ?, story = ? WHERE username = ?");
        $updateStmt->execute([$full_name, $linkedin, $instagram, $bio, $interests, $story, $username]);
    } else {
        // Insert new profile
        $insertStmt = $pdo->prepare("INSERT INTO profiles (username, full_name, linkedin, instagram, bio, interests, story) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $insertStmt->execute([$username, $full_name, $linkedin, $instagram, $bio, $interests, $story]);
    }

    header("Location: profile.php?success=1");
    exit;
} catch (PDOException $e) {
    die("Error updating profile: " . $e->getMessage());
}
?>
