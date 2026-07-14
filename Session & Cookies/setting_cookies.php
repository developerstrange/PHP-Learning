<!-- Cookies
 
Cookies are small text files websites send to your device while you browse. A small piece of file which website set on user machines to remember certain things about the user.
Their primary purpose is to give the website "memory," allowing the site to remember your actions, login status, and preferences so you don't have to re-enter information each time you visit.

Common Uses of Cookies:
  Authentication: They keep you logged into your accounts as you navigate across different pages.

  Site Preferences: They remember custom settings like your chosen language, dark mode, or localized currency.

  Shopping Carts: They keep track of items you add to your cart while browsing an online store.

  Shopping Carts: They keep track of items you add to your cart while browsing an online store.


Types of Cookies:
  Session Cookies: Temporary files that are deleted as soon as you close your web browser.

  Persistent Cookies: Files that remain on your hard drive for a set period (or until you delete them) so the site remembers you on future visits

  First-Party Cookies: Created by the exact website you are currently visiting.

  Third-Party Cookies: Created by a domain other than the one you are visiting (often used by advertisers to track you across multiple sites).


-->

<?php


// Syntax to set cookies
// setcookie(name, value, expire, path, domain, secure, httponly);

setcookie("Category","Cars", time()+86400, "/");

?>

<html>
  <body>
    <?php
      if(isset($_COOKIE["Category"])){
        echo "Cookie value : " . $_COOKIE['Category'];
      }else{
        echo "Cookie is not set";
      }
    ?>
  </body>
</html>

