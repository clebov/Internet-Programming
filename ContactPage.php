<?php include "header.php" ?>
<?php include "sidebar.php" ?>
 <div class="column middle">
    <p> If you'd like to contact me please send me your First name and Last name with your emaile and i'll get back to you</p>
    <form style="color: white";>
        <fieldset>
            <legend> Contact Information></legend>
             First name: <br>
            <input type="text" name="firstname"><br>
            Last name:<br>
            <input type="text" name="lastname"><br>
            Email Address<br>
            <input type="text" nome="Email"><br>
            <label for="subject">Subject</label>
            <br><br>
            <textarea id="subjct" name="subjet" placeholder="Leave me a quick message" ></textarea><br>

            <button onclick="myFunct()"> Submit </button>
            
            <script>
                function myFunct(){
                    confirm("Your information has been sent.")
                }
            </script>
            
         </fieldset>
         <br><br>
    </form>

 </div>