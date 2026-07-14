<!-- 
Session
  A website session refers to a single, continuous period of a user's interaction with a site. It begins when a visitor arrives and ends after a specific period of inactivity (typically 30 minutes). Sessions track all user actions during that visit, such as page views, clicks, and purchases.
  Session variables hold information about one single user, and are available through all pages in one application.
  When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you close it. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
  Session variables solve this problem by storing user information to be used across multiple pages (e.g. user logins, shopping carts, etc).
  By default, session variables last until the user closes the browser.


Difference between cookies and session:;
  The core difference between cookies and sessions in web technology is where the data is stored. Cookies store data on the client side (the user's browser), while sessions store data on the server side.


Funcitons:
    session_start() - Starts a new session
    $_SESSION - Stores and access session variables
    unset() - Removes a specific session variable (e.g unset($_SESSION["favcolor"]))
    session_destroy() - Destroys all data associated with the current session
    session_unset() - Frees all session variables

-->

<?php

session_start();

// $_SESSION['username'] = "Shifat";
// $_SESSION['password'] = '123';

// if(isset($_SESSION['username'])){
//   echo "Your username is : " . $_SESSION['username'] . "<br>";
//   echo "Your password is : " . $_SESSION['password'] . "<br>";
// }else{
//   echo "No session data found";
// }


session_unset();
session_destroy();

if(!isset($_SESSION['username'])){
  echo "Your session is not set. <br>";
}else{
  echo "First destory your session.";
}

?>