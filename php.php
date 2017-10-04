<?php
      if (isset($_GET['najdi']) && ($_GET['najdi'] !== '')) {
      $najdi = $_GET['najdi'];
    
      echo "<a href='http://www.google.com/search?q=".$najdi."'>"."<input type=\"submit\" value=\"Vyhledej\">"."</a>";
}
?>