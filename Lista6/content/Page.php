<?php

$HEADER =<<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>{{TITLE}}</title> 
  <meta name="author" content="Marcin Musielski">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0"/>
{{STYLES}}
{{SCRIPTS}}
</head>
<body>
<div class="mainContainer">
EOT;

$PAGE_HEADER =<<<EOT
<header id="main-header">
<h1>Bank</h1>


</header>
EOT;

$PAGE_HEADER_IN =<<<EOT
<header id="main-header">
<h1>Bank</h1>
<a href="logout.php">Wyloguj</a>
<a href="changepass.php">Zmiana Hasła</a>
</header>
EOT;

$MENU_DIV = <<<EOT
 <div id={{ID}}>
        <ul class="study">
            {{M1.1}}
            {{M1.2}}
        </ul>
    </div>

EOT;

$CHANGEPASS = <<< EOT
<h3>Zmiana Hasła</h3>
 <div class="form-group ">
            <p>Nowe Hasło</p>
            <span class="error">* {{PASSERR}}</span>
            <input type="password" id="name"  name="new_password" maxlength="20">
        </div>
        <div class="form-group">
            <p>Potwierdź Hasło</p>
            <span class="error">* {{VALIDERR}}</span>
            <input type="password" id="name" name="confirm_password" maxlength="20">
        </div>
        <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Potwierdź">
            <a class="btn btn-link" href="menu.php">Anuluj</a>
       </div>
</form>

EOT;



$INPUT_FORM = <<<EOT
<form action="Opinion.php"  method="post" >
  <div>
    <label for="name">Nick:</label>
    <span class="error">* {{NAMEERR}}</span>
    <input type="text" id="name" name="name" maxlength="20" >
    
  </div>
  <div>
    <label for="msg">Opinia:</label>
    <span class="error">* {{OPINIONERR}}</span>
    <textarea id="msg" maxlength="300" name="message"></textarea>
    
  </div>
  
  <div id="matrix">
  <!--<label for="captcha"></label>-->
  <p>\(\\begin{bmatrix}{{A}} & {{B}}\\\\ {{C}} & {{D}} \\end{bmatrix}\)</p>
  <input type="number" id="captcha" name="captcha">
 
</div>
  <div id="sendButton">
  <button type="submit">Wyślij</button>
  </div>
</form>
<section id="opinionsection">
<h2 id="titleOp">Opinie: </h2>
EOT;

$REGISTER_FORM = <<< EOT


<h3>Rejestracja</h3>
  <div>
    <label for="name">Login:</label>
    <span class="error">* {{NAMEERR}}</span>
    <input type="text" id="name" name="name" maxlength="20" >
    
  </div>
  <div>
    <label for="pass">Hasło: </label>
    <span class="error">* {{PASSERR}}</span>
    <input type="password" id="name" name="pass" maxlength="20" >
    
  </div>
  <div>
    <label for="val">Potwierdź Hasło: </label>
    <span class="error">* {{VALPASSERR}}</span>
    <input type="password" id="name" name="validation" maxlength="20" >
    
  </div> 
  <div>
    <label for="email">E-mail: </label>
    <span class="error">* {{EMERR}}</span>
    <input type="text" id="name" name="email" maxlength="20" >
     
</div>
  <div id="sendButton">
  <button type="submit">Wyślij</button>
  </div>
</form>

EOT;

$LOGIN_FORM = <<< EOT


<h3>Logowanie</h3>
  <div>
    <label for="name">Login:</label>
    <span class="error">* {{NAMEERR}}</span>
    <input type="text" id="name" name="name" maxlength="20" >
    
  </div>
  <div>
    <label for="pass">Hasło: </label>
    <span class="error">* {{PASSERR}}</span>
    <input type="password" id="name" name="pass" maxlength="20" >
  </div>
  <div id="sendButton">
  <button type="submit">Zaloguj</button>
  </div>
</form>
<!--<div id = "resetpass">-->
<!--&lt;!&ndash;<form action="reset.php">&ndash;&gt;-->
    <!--&lt;!&ndash;<input type="submit" value="Zresetuj Hasło" />&ndash;&gt;-->
<!--&lt;!&ndash;</form>&ndash;&gt;-->
<!--</div>-->

EOT;

$RESET_FORM = <<< EOT
<form action="reset.php"  method="post" >
<h3>Resetowanie Hasła</h3>
 
  <div>
    <label for="email">E-mail: </label>
    <span class="error">* {{EMERR}}</span>
    <input type="text" id="name" name="email" maxlength="20" >
  </div>
  <div id="sendButton">
  <button type="submit">Zresetuj Hasło</button>
  </div>
</form>
EOT;

$TRANSACTION_FORM = <<< EOT

<h3>Przelew</h3>
  <div>
    <label for="name">Nazwa odbiorcy:</label>
    <span class="error">* {{NAMEERR}}</span>
    <input type="text" id="name" name="name" maxlength="20" >
    
  </div>
  <div>
    <label for="account">Nr konta: </label>
    <span class="error">* {{ACCERR}}</span>
    <input type="text" id="name" name="account" maxlength="32" >
    
  </div>
  <div>
    <label for="val">Kwota: </label>
    <span class="error">* {{VALERR}}</span>
    <input type="text" id="name" name="value" maxlength="20" >
    
  </div> 
  <div>
    <label for="title">Tytuł: </label>
    <span class="error">* {{TITERR}}</span>
    <input type="text" id="name" name="title" maxlength="20" >
     
</div>
  <div id="sendButton">
  <button type="submit">Wyślij</button>
  </div>
</form>

EOT;

$VALIDATION_SITE = <<< EOT
<div>
<p class="descrip">Nazwa odbiorcy:</p>
<p class="pdata">{{NAME}}</p>
<br>
</div>
<div>
<p class="descrip">Nr. Konta:</p>
<p class="pdata">{{ACCOUNT}}</p>
<br>
</div>
<div>
<p class="descrip">Kwota:</p>
<p class="pdata">{{VALUE}}</p>
<br>
</div>
<div>
<p class="descrip">Tytuł:</p>
<p class="pdata">{{TITLE}}</p>
<br>
</div>
<div>
<p class="descrip">Data: </p>
<p class="pdata">{{DATE}}</p>
</div>
<div id="sendButton">
  <button type="submit">Dalej</button>
  </div>
</form>
EOT;

$CONFIRMATION_SITE = <<< EOT
<div>
<p class="descrip">ID transakcji:</p>
<p class="pdata">{{TRANSID}}</p>
<br>
</div>
<div>
<p class="descrip">Nazwa odbiorcy:</p>
<p class="pdata">{{NAME}}</p>
<br>
</div>
<div>
<p class="descrip">Nr. Konta:</p>
<p class="pdata">{{ACCOUNT}}</p>
<br>
</div>
<div>
<p class="descrip">Kwota:</p>
<p class="pdata">{{VALUE}}</p>
<br>
</div>
<div>
<p class="descrip">Tytuł:</p>
<p class="pdata">{{TITLE}}</p>
<br>
</div>
<div>
<p class="descrip">Data: </p>
<p class="pdata">{{DATE}}</p>
</div>
<div id="sendButton">
  <button type="submit">Dalej</button>
  </div>
</form>
EOT;

$HISTORY_SITE = <<< EOT
<section>
    <table style="width: :90%">
        <tr id ="titles">
            <th>ID transakcji</th>
            <th>Nazwa odbiorcy</th>
            <th>Numer Konta</th>
            <th>Kwota</th>
            <th>Tytuł</th>
            <th>Data</th>
        </tr>

EOT;

$ADD_HISTORY = <<< EOT
        <tr>
            <td>{{TRANSID}}</td>
            <td>{{NAME}}</td>
            <td>{{ACCOUNT}}</td>
            <td>{{VALUE}}</td>
            <td>{{TITLE}}</td>
            <td>{{DATE}}</td>
        </tr>
EOT;




$FOOTER =<<<EOT
</div><!-- container -->
<footer>
<p>
        Created by {{AUTHOR}} @2018
</p>
</footer>
</body>
</html>   
EOT;


$MAIN_MENU_INS = '<li><a href="{{ADDRESS}}">{{NAME}}</a></li>';

$RETURN_BUTTON =  '<a href="{{MAIN}}" class="returnButton">Powrót</a>';

$OPINION_LINK = '<a href="{{SITE}}" id="opinionButton">Podziel się opinią!</a>';


class Page
{
    private $title        = "";
    private $root         = "";
    private $cssfiles     = [];
    private $jsfiles      = [];
    private $info         = "";



    public function addCss($filename)
    {
        $this->cssfiles[] = $filename;
    }
    public function addJs($filename)
    {
        $this->jsfiles[] = $filename;
    }

    public function addInfo($filename)
    {
        $this->info = $filename;
    }

    public function __construct($title = "", $root="")
    {
        $this->title = $title;
        $this->root = $root;
        $this->addCss("reset.css");
        $this->addCss("mainStyle.css");
    }

    public function Begin()
    {
        global $HEADER;
        $s = str_replace("{{TITLE}}", $this->title, $HEADER);

        $X = [];
        $C = $this->cssfiles;
        $TMP = '<link rel="stylesheet" href="{{ROOT}} styles/{{CSS}}">' . "\n";
        for ($i = 0; $i < count($C); $i++){
            $X[]= (string) str_replace(["{{ROOT}}", "{{CSS}}"], [$this->root, (string) $C[$i]], $TMP);
        }
        $s= str_replace("{{STYLES}}", join("\n",$X), $s);

        $X = [];
        $C = $this->jsfiles;
        $T = '<script src="{{JS}}"></script>' . "\n";
        for ($i = 0; $i < count($this->jsfiles); $i++){
            $X[]= str_replace(["{{ROOT}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
        }
        $s= str_replace("{{SCRIPTS}}", join("\n",$X), $s);

        return $s;

    }

    public function PageHeader(){
        global $PAGE_HEADER;
        $s = str_replace("{{INFO}}", $this->info, $PAGE_HEADER);
        return $s;
    }

    public function PageHeaderLogout()
    {
        global $PAGE_HEADER_IN;
        $s = $PAGE_HEADER_IN;

        return $s;
    }

    public function ChangePass($passErr,$valErr)
    {
        global $CHANGEPASS;
        $s = $CHANGEPASS;
        $s = str_replace("{{PASSERR}}",$passErr,$s);
        $s = str_replace("{{VALIDERR}}",$valErr,$s);
        return $s;
    }

    public function ValidationSite($name,$account,$value,$title,$date)
    {
        global $VALIDATION_SITE;
        $s = $VALIDATION_SITE;
        $s = str_replace(["{{NAME}}","{{ACCOUNT}}","{{VALUE}}","{{TITLE}}","{{DATE}}"],[$name,$account,$value,$title,$date],$s);
        return $s;
    }

    public function ConfirmationSite($transid,$name,$account,$value,$title,$date)
    {
        global $CONFIRMATION_SITE;
        $s = $CONFIRMATION_SITE;
        $s = str_replace(["{{TRANSID}}","{{NAME}}","{{ACCOUNT}}","{{VALUE}}","{{TITLE}}","{{DATE}}"],[$transid,$name,$account,$value,$title,$date],$s);
        return $s;
    }


    public function CreateMenuDiv($id)
    {
        global $MENU_DIV,$MAIN_MENU_INS,$MAIN_MENU_ITEMS;
        $s = $MENU_DIV;
        $s = (string)str_replace("{{ID}}", $id, $s);


        foreach ($MAIN_MENU_ITEMS as $key => $array) {
            $mkey = "{{" . $key . "}}";
            $item = $MAIN_MENU_INS;
            $item = (string)str_replace(["{{NAME}}","{{ADDRESS}}"], $array, $item);
            $s    = (string)str_replace($mkey, $item, $s);
        }
        return $s;
    }

    public function CreateHistory()
    {
        global $HISTORY_SITE;
        $s = $HISTORY_SITE;
        return $s;
    }

    public function AddHistory($transid, $name, $account, $value, $title, $date)
    {
        global $ADD_HISTORY;
        $s = $ADD_HISTORY;
        $s = str_replace(["{{TRANSID}}","{{NAME}}","{{ACCOUNT}}","{{VALUE}}","{{TITLE}}","{{DATE}}"],[$transid,$name,$account,$value,$title,$date],$s);
        return $s;
    }

    public function AddReturn()
    {
        global $MAINPAGE, $RETURN_BUTTON;
        $s = $RETURN_BUTTON;
        $s = str_replace("{{MAIN}}",$MAINPAGE,$s);
        return $s;
    }
    public function RegisterForm($nameErr,$passErr,$valErr,$emErr)
    {
        global $REGISTER_FORM;
        $s = $REGISTER_FORM;
        $s = str_replace("{{NAMEERR}}",$nameErr,$s);
        $s = str_replace("{{PASSERR}}",$passErr,$s);
        $s = str_replace("{{VALPASSERR}}",$valErr,$s);
        $s = str_replace("{{EMERR}}",$emErr,$s);
        return $s;

    }

    public function TransactionForm($nameErr,$accErr,$valErr,$titErr)
    {
        global $TRANSACTION_FORM;
        $s = $TRANSACTION_FORM;
        $s = str_replace("{{NAMEERR}}",$nameErr,$s);
        $s = str_replace("{{ACCERR}}",$accErr,$s);
        $s = str_replace("{{VALERR}}",$valErr,$s);
        $s = str_replace("{{TITERR}}",$titErr,$s);
        return $s;
    }

    public function LoginForm($nameErr,$passErr)
    {
        global $LOGIN_FORM;
        $s = $LOGIN_FORM;
        $s = str_replace("{{NAMEERR}}",$nameErr,$s);
        $s = str_replace("{{PASSERR}}",$passErr,$s);

        return $s;
    }

    public function ResetForm($emErr)
    {
        global $RESET_FORM;
        $s = $RESET_FORM;
        $s = str_replace("{{EMERR}}",$emErr,$s);
        return $s;
    }

    public function CreateForm($nameErr,$msgErr)
    {
        global $INPUT_FORM;
        $s = $INPUT_FORM;
        $s = str_replace(["{{A}}","{{B}}","{{C}}","{{D}}"],[$_SESSION['a'],$_SESSION['b'],$_SESSION['c'],$_SESSION['d']],$s);
        $s = str_replace("{{NAMEERR}}",$nameErr,$s);
        $s = str_replace("{{OPINIONERR}}",$msgErr,$s);
        return $s;

    }

    public function CloseSection()
    {
        $s = "</table>
        </section>";
        return $s;
    }

    public function End() {
        global $FOOTER,$AUTHOR;
        $FOOTER = str_replace("{{AUTHOR}}",$AUTHOR,$FOOTER);
        return $FOOTER;
    }
}