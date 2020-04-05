
<?php get_header();?>

<ul id='UserAccountOperations'>

  <?php
  if (isset($_SESSION['user_name'])) {
    print"<li id= 'mdane' onclick = 'styleUSAH(this)'><span>moje dane</span></li>";

    include('connection.php');
    $userData = "SELECT * FROM tr_users WHERE user_nicename='".$_SESSION['user_name']."';'";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
        $result=$conn->prepare($userData);
        $result->execute();
        $data = $result->fetch();
            if ($result->rowCount() !== 1) {

            } else {
              $userData = $data['user_email'];

             $conn =null;
             $result=null;
            }
        } catch (PDOException $e) {
        echo "Błąd: " . $e->getMessage();
        }




  } else {

    print "<li id= 'zaloguj' onclick = 'styleUSAH(this)'><span>zaloguj</span></li>
            <li id= 'password' onclick = 'styleUSAH(this)'><span>odzyskaj hasło</span></li>
            <li id= 'zarejestruj' onclick = 'styleUSAH(this)'><span>zarejestruj</span></li>";
  } ?>

</ul>

    <div class = 'UserAccountContainer'>

      <?php
      if (isset($_SESSION['user_name'])) {

      } else {
          loginForm('UserAccountContainerForm');

      } ?>


<?php function RegForm(){
        print "
      <div class = 'pswRemindForm'>
              <form  action='' id='emailPass'>
                <label for 'name'>Nazwa użytkownika lub e-mail</label>
                <input type='text' id= 'loginname' name='name' placeholder='nazwa użytkownika lub e-mail' required>
                <br>
                <input type='submit' value='  wyślij e-mail z nowym hasłem  '>
              </form>
      </div>
      <div class='RegFormIn'>
                <form id='Reg'>
                      <label>Nazwa:</label>
                      <input type='text' class='form-control'  id='surname' name='surname'>
                      <label>Email:</label>
                      <input type='text' class='form-control' id='email' name='email'>
                      <label>Hasło:</label>
                      <input type='password' class='form-control'  id='pass1' name='pass1'>
                      <label>Powtórz hasło:</label>
                      <input type='password' class='form-control'  id='pass2' name='pass2'>
                  <div class='row'>
                  <div class='checkbox'>
                      <label><input type='checkbox' id='agree'> Zgadzam się na warunki...</label>
                  </div>
                  <p>
                      <button class='btn btn-primary'>Zatwierdź</button>
                  </p>
                  </div>
                  <div class='info-container'>
                      <div class='error-message'>
                      </div>
                      <div class='success-message'>
                      </div>
                  </div>
                  </div>
                </form>
          </div>";}  ?>

    <?php  function editProfileForm($x){
    print  "
        <div class='myDataForm'>
          <form  ation=''>
                      <label>Email:</label>
                      <input type='text' class='form-control' id='email' name='email' value ='$x'>
                      <label>Stare hasło:</label>
                      <input type='password'   id='pass1' name='pass1' autocomplete = 'off'>
                      <label>Nowe hasło:</label>
                      <input type='password'  id='pass2' name='pass2'>
                      <label>Powtórz nowe hasło:</label>
                      <input type='password'   id='pass3' name='pass3'>



                  <p>
                      <input type='submit' name = 'Zatwierdź zmiany' value='Zatwierdź zmiany'></button>
                  </p>

                  <div class='info-container'>
                      <div class='error-message'>
                      </div>
                      <div class='success-message'>
                      </div>
                  </div>
        </form>
      </div>
      ";
    }?>



<?php
if (isset($_SESSION['user_name'])) {
  editProfileForm( $userData);
} else {

  RegForm();
}
?>

</div>
<div class='footer-container'>
  <?php
  get_footer();
  ?>
</div>
