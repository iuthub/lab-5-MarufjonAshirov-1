<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
</head>

<body>
<h1>Thanks, sucker!</h1>

<p>Your information has been recorded.</p>

<dl>
    <dt>Http methods</dt>
    <dd>
        <?php $_SERVER["REQUEST_METHOD"]?>
    </dd>
    <dt>Name</dt>
    <dd><?php$_REQUEST["myName"] ?></dd>

    <dt>Section</dt>
    <dd><?php$_REQUEST["section"] ?></dd>

    <dt>Credit Card</dt>
    <dd><?php $_REQUEST["creditCard"]?></dd>

    <dt>Request parameters</dt>
    <ul>
        <dd>
            <?php foreach ($_SERVER as $name=>$value) {?>
                <li>
                    <?=$name?>
                    <?php var_dump($value);?>
                </li>
            <?php }?>
        </dd>
    </ul>
</dl>
</body>
</html>
