<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once "model/User.php";
require "model/PaymentMethod.php";
require "model/Profile.php";

class SignUpController
{
  public $user;
  public $paymentMethod;
  public $profile;

  public function __construct()
  {
    $this->user = new User();
    $this->paymentMethod = new PaymentMethod();
    $this->profile = new ProfileModel();
  }

  public function invoke()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($this->missingInformation()) {
        $error = "Missing information in the sign up form.";
        include 'view/signup.php';
        return null;
      }

      $email = filter_var(trim(strtolower($_POST["email"])), FILTER_SANITIZE_EMAIL);

      if ($this->emailIsNotValid($email)) {
        $error = "Email address is not valid.";
        include 'view/signup.php';
        return null;
      }

      if (!is_null($this->user->verifyEmail($email))) {
        $error = "An account already exists with that email.";
        include 'view/signup.php';
        return null;
      }

      $username = htmlspecialchars(trim(strtolower($_POST['username'])), ENT_QUOTES, 'UTF-8');

      if (!is_null($this->user->verifyUser($username))) {
        $error = "An account already exists with that username.";
        include 'view/signup.php';
        return null;
      }

      if ($this->user->createUser(
        $username,
        $email,
        $_POST['password'],
        $_POST['plan']
      )) {
        if ($this->paymentMethod->createPaymentMethod(
          $username,
          $_POST['paymentType'],
          $_POST['cardNumber'],
          true
        )) {
          $message = "You are signed up with username: " . $username . ". You may log in now.";
        } else {
          $error  = "An error occurred.";
          include 'view/signup.php';
          return null;
        }
      } else {
        $error  = "An error occurred.";
        include 'view/signup.php';
        return null;
      }
    }
    include 'view/signup.php';
  }

  public function missingInformation()
  {
    return !(isset($_POST['username'])
      && isset($_POST['email'])
      && isset($_POST['password'])
      && isset($_POST['plan'])
      && isset($_POST['cardNumber'])
      && isset($_POST['paymentType']));
  }

  public function emailIsNotValid($email)
  {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
  }
}
