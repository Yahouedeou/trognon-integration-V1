<?php


if(!isset($_GET['page']))
{
      $titlepage = "HomePage Milkman";
      include ('include/homepage-milkman.inc.html');
}

if(isset($_GET['page'])) {

			$page = $_GET['page'];

      if($page == 'offermilkman')
      {
              $titlepage = "Offer Milkman";
              include ('include/offer-milkman.inc.html');
      }

      if($page == 'subscription')
      {
              $titlepage = "Subscription";
              include ('include/subscription.inc.html');
      }

      if($page == 'confirmation')
      {
              $titlepage = "Confirmation";
              include ('include/confirmation.inc.html');
      }

      if($page == 'account')
      {
              $titlepage = "Confirmation";
              include ('include/account.inc.html');
      }

      if($page == 'panier')
			{
			        $titlepage = "HomePage Panier";
			        include ('include/homepage-panier.inc.html');
			}

}


?>
