<head>
<?php   session_start();?>
<meta	charset='utf-8' lang='pl-PL'>
<title>Napędzmy Transport 4.0</title>
<meta	name='description'	content='Mobilność, ITS,GSM-R, SESAR, IFS, RIS, '>
<meta	name='viewport'	content='width=device-width,	initial-scale=1'>
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri();?>/css/main.css'>
<script type='text/JavaScript' src='<?php echo get_stylesheet_directory_uri();?>/js/script.js'></script>

<?php wp_head(); ?>
</head>
<body>

    <div class='innerGrid'>
          <div id = 'header'>
        <a href = 'o-nas'>
          <div id = 'logo'>
          </div>
        </a>

        <div class='hamburger' onclick='myFunction(this)'>
            <div class='bar1'></div>
            <div class='bar2'></div>
            <div class='bar3'></div>
          </div>
        <!-- <a>
          <div id = 'nazwa'> <span class = 'Napedzamy'>Napędzamy</span><span class = 'Transport'> Transport 4.0 </span>
            <p class = 'Logowanie'>LOGOWANIE</p>
          </div>
        </a> -->
      <?php
      function halloNotLogged($classLoginForm) {
        echo  "<div class ='";
        print_r ($classLoginForm);
        echo "' >
        Miło Cię widzieć<span class='Witaj'> ".$_POST["name"]."</span>,<br><br>
        <a href = 'useraccounthandling'>    odzyskaj hasło,<br> lub zarejestruj się  </a>
          </div>";
      }

      function hallo($classLoginForm){
        echo  "<div class ='";
        print_r ($classLoginForm);
        echo "' >
        <span class='Witaj'>Witaj ".$_SESSION['user_name']."!!!</span><br>Miło nam, że z nami<br><span class='Witaj'>Napędzasz Tranport 4.0</span><br>
        <form  action = '' method='post'>
          <div class = 'row'>
          <input type='submit' name= 'wyloguj' value='wyloguj'>
          <a href = 'useraccounthandling'>     moje dane  </a> <br>
          </div>
        </form>
        </div>";
      }

      if (isset($_SESSION['user_name'])) {
        hallo('headerForm headerMessage'); } else {
          if (isset($_POST['name'])) { halloNotLogged('headerForm headerMessage'); } else {
          print  "<a href = 'useraccounthandling'>
                <div id = 'nazwa'> <span class = 'Napedzamy'>Napędzamy</span><span class = 'Transport'> Transport 4.0 </span>
                <p class = 'Logowanie'>LOGOWANIE</p>
              </div>
            </a>";}
        };
      ?>

<?php

function loginForm($classLoginForm) {

  echo  "<div class ='";
  print_r ($classLoginForm);
  echo "' >
     <h3>Napędzamy Transport 4.0</h3>
      <div>
        <form  action = '' method='post'>
          <input type='text' id= 'loginname' name='name' placeholder='nazwa użytkownika lub e-mail' required>
          <br>
          <input type='password' id='psw' name='psw' placeholder='hasło' required>
          <br>
          <div class = 'row'>
          <input type='submit' value='  zaloguj mnie   '>
          <a href = 'useraccounthandling'>     zarejestruj się  </a> <br>
        </div>
        </form>
      </div>

    </div>";

}


function login() {


            if($_POST['wyloguj']!==null) {  $_SESSION['user_name']=null; echo '<META HTTP-EQUIV="REFRESH" CONTENT="0">' ;};
             if (isset($_SESSION['user_name'])) {
               }
                else {

                   if (isset($_POST['name']) && isset($_POST['psw'])) {
                         if (strstr($_POST['name'], "'")!==false
                           || strstr($_POST['name'], '"')!==false || strstr($_POST['name'], '--')!==false ||
                          strstr($_POST['name'],' OR ')!==false || strstr($_POST['name'],' or ')!==false || strstr($_POST['name'],' dump ')!==false ||
                          strstr($_POST['psw'],"'")!==false || strstr($_POST['psw'],'"')!==false || strstr($_POST['psw'],'--')!==false ||
                         strstr($_POST['psw'],' OR ')!==false || strstr($_POST['psw'],' or ')!==false || strstr($_POST['psw'],' dump ')!==false) {

                           print "<div class='headerForm'>użyłeś zabronionych znaków<br> - wygląda to na próbę ataku</div>";
                         }
                         else {
                         include('connection.php');
                           $userExists = "SELECT * FROM tr_users WHERE user_pass='".$_POST["psw"]."' AND (user_email='".$_POST["name"]."' OR user_nicename='".$_POST["name"]."');'";
                           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                               try {
                               $result=$conn->prepare($userExists);
                               $result->execute();
                               $data = $result->fetch();

                                   if ($result->rowCount() !== 1) {
                                  //   halloNotLogged('halloNotLogged');
                                   } else {
                                     $_SESSION['user_name'] = $data['user_nicename'];
                                      hallo('headerForm');
                                      echo '<META HTTP-EQUIV="REFRESH" CONTENT="0">' ;
                                    $conn =null;
                                    $result=null;
                                   }
                               } catch (PDOException $e) {
                               echo "Błąd: " . $e->getMessage();
                               }
                        }
                  } else {
                      loginForm('headerForm');
                     }
                   }
                }


 login();?>
          <!-- <div class='menu'> -->
          <!-- </div> -->
          <?php wp_nav_menu([
            'menu'	=>	'Header Menu'
          ]);

          ?>

      </div>
      <?php


      ?>
      <!-- <div class ='paralax'>
      <iframe width='560' height='315' src='https://www.youtube.com/embed/_jLx_Z8mV2g?rel=0&amp;controls=0&amp;showinfo=0&amp;start=2;stop=60' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
    </div> -->
