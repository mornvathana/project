<?php
include('includes/header.php');
?>

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
  <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md text-center">
    <h1 class="text-2xl font-bold mb-4 text-red-600">Email Verification Required</h1>
    <p class="mb-6 text-gray-700">
      Your email has not been verified yet. Please check your inbox and click the verification link to activate your account.
    </p>
    <a href="login.php" class="inline-block px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
      Back to Login
    </a>
  </div>
</div>

<?php
include('includes/footer.php');
?>
