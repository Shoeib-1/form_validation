<?php

if (isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
}else{
    $firstname = '';
}

if (isset($_POST['lastname'])){
    $lastname = $_POST['lastname'];
}else{
    $lastname = '';
}

if (isset($_POST['email'])){
    $email = $_POST['email'];
}else{
    $email = '';
}

if (isset($_POST['phone'])){
    $phone = $_POST['phone'];
}else{
    $phone = '';
}
if (isset($_POST['address1'])){
    $address1 = $_POST['address1'];
}else{
    $address1 = '';
}
if (isset($_POST['city'])){
    $city = $_POST['city'];
}else{
    $city = '';
}

if (isset($_POST['country'])){
    $country = $_POST['country'];
}else{
    $country = '';
}

if (isset($_POST['region'])){
    $region = $_POST['region'];
}else{
    $region = '';
}
if (isset($_POST['password'])){
    $password = $_POST['password'];
}else{
    $password = '';
}
if (isset($_POST['password_confirmation'])){
    $password_confirmation = $_POST['password_confirmation'];
}else{
    $password_confirmation = '';
}



?>


<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input,
        select {

            width: 90%;
            /* max-width: 500px; */
            margin: 18px 0px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            display: block;
        }

        input[type='radio']  {
            width: 40px;
            display: inline;
        }

        input[type='checkbox']{
            width: 40px;
            display: inline;
        }

       .label_required::before{
        content: "*";
        color: red;
        margin-left: 5px;
       }

       .error{
        font-size: 22px;
        color: red;
       }
    </style>
</head>

<body>

<?php
    // $email = '';
    // $password = '';
      if (isset($_POST['register'])) {
        $error = array();
        if(empty($_POST['firstname'])){
            $error['firstname']= "<div class='error'> Please enter your firstname</div>";
        }
        if(empty($_POST['lastname'])){
            $error['lastname']= "<div class='error'> Please enter your lastname</div>";
        }
        if(empty($_POST['email'])){
            $error['email']= "<div class='error'> Please enter your email</div>";
        }
        if(empty($_POST['phone'])){
            $error['phone']= "<div class='error'> Please enter your phone</div>";
        }
        if(empty($_POST['address1'])){
            $error['address1']= "<div class='error'> Please enter your address1</div>";
        }
        if(empty($_POST['city'])){
            $error['city']= "<div class='error'> Please enter your city</div>";
        }
        if(empty($_POST['country'])){
            $error['country']= "<div class='error'> Please enter your country</div>";
        }
        if(empty($_POST['region'])){
            $error['region']= "<div class='error'> Please enter your region</div>";
        }
        if(empty($_POST['password'])){
            $error['password']= "<div class='error'> Please enter your password</div>";
        }
        if(empty($_POST['password_confirmation'])){
            $error['password_confirmation']= "<div class='error'> Please enter your password_confirmation</div>";
        }
      }
    ?>
    <h1>???????????????? ??????????????</h1>
    <hr>
    <form action="" method="post">
        <div>
            <label class="label_required" for="firstname">?????????? ??????????:</label>
            <input type="text" id="firstname" name="firstname" value="">
            <?php
         if(!empty($error['firstname'])){
         echo  $error['firstname'];
         }
         ?>
        </div>
        <div>
            <label class="label_required" for="lastname">?????????? ????????????:</label>
            <input type="text" id="lastname" name="lastname">
            <?php
         if(!empty($error['lastname'])){
         echo  $error['lastname'];
         }
         ?>
        </div>
        <div>
            <label class="label_required" for="email">???????????? ????????????????????:</label>
            <input type="email" id="email" name="email">
            <?php
         if(!empty($error['email'])){
         echo  $error['email'];
         }
         ?>
        </div>
        <div>
            <label class="label_required" for="phone">?????? ????????????:</label>
            <input type="tel" id="phone" name="phone">
            <?php
         if(!empty($error['phone'])){
         echo  $error['phone'];
         }
         ?>
        </div>
        <div>
            <label for="fax">????????????:</label>
            <input type="tel" id="fax" name="fax">
        </div>
        <h1>???????????????? ???????????? ????</h1>
        <hr>
        <div>
            <label for="company">????????????:</label>
            <input type="text" id="company" name="company">
        </div>
        <div>
            <label class="label_required" for="address1">?????????????? ??????????:</label>
            <input type="text" id="address1" name="address1">
            <?php
         if(!empty($error['address1'])){
         echo  $error['address1'];
         }
         ?>
        </div>
        <div>
            <label for="address2">?????????????? ????????????:</label>
            <input type="text" id="address2" name="address2">
        </div>
        <div>
            <label class="label_required" for="city">??????????????:</label>
            <input type="text" id="city" name="city">
            <?php
         if(!empty($error['city'])){
         echo  $error['city'];
         }
         ?>
        </div>
        <div>
            <label for="zip">?????????? ??????????????:</label>
            <input type="text" id="zip" name="zip">
        </div>
        <div>
            <label class="label_required" for="country">????????????:</label>
            <select dir="rtl" name="country">
                <option value="Egypt">??????</option>
                <option value="Saudi Arabia">????????????????</option>
                <option value="United Arab Emirates">???????????????? ?????????????? ??????????????</option>
                <option value="England">??????????????</option>
            </select>
            <?php
         if(!empty($error['country'])){
         echo  $error['country'];
         }
         ?>

        </div>
        <div>
            <label class="label_required" for="region">??????????????:</label>
            <select dir="rtl" name="region">
                <optgroup label="??????">
                    <option value="Cairo">??????????????</option>
                    <option value="Giza">????????????</option>
                    <option value="Alexandria">????????????????????</option>
                </optgroup>
                <optgroup label="????????????????">
                    <option value="Riyadh">????????????</option>
                    <option value="Jeddah">??????</option>
                    <option value="Mecca">??????</option>
                </optgroup>
                <optgroup label="???????????????? ?????????????? ??????????????">
                    <option value="Dubai">??????</option>
                    <option value="Abu Dhabi">?????? ??????</option>
                    <option value="Sharjah">??????????????</option>
                </optgroup>
                <optgroup label="??????????????">
                    <option value="London">????????</option>
                    <option value="Birmingham">????????????????</option>
                    <option value="Manchester">??????????????</option>
                </optgroup>
            </select>
            <?php
         if(!empty($error['region'])){
         echo  $error['region'];
         }
         ?>

        </div>
        <h1>???????? ???????????? ???????????? ????</h1>
        <hr>
        <div>
            <label class="label_required" for="password">???????? ????????????:</label>
            <input type="password" id="password" name="password">
            <?php
         if(!empty($error['password'])){
         echo  $error['password'];
         }
         ?>
        </div>
        <div>
            <label class="label_required" for="password_confirmation">?????????? ???????? ????????????:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
            <?php
         if(!empty($error['password_confirmation'])){
         echo  $error['password_confirmation'];
         }
         ?>
        </div>
        <label>????????????????:
            <input type="radio" name="subscription" value="yes">??????
            <input type="radio" name="subscription" value="no">????
        </label>
        <br>
        <label  class="checkbox" for="click_checkbox">???????? ???????????? ?????? ?????????? <b>????????????????</b></label>
        <input type="checkbox" id="click_checkbox">

        <div>
            <input type="submit" value="??????????" name="register">
        </div>
    </form>
   <script src="jquery-3.6.2.js"></script>
   <script src="main.js"></script>
</body>

</html>