<?php $this->layout('layout', ['title' => 'Se crée un compte']) ?>

<?php $this->start('main_content') ?>
<h2>Se crée un compte</h2>

<form action="" method="post">
    <label for="userName">Username</label><br/>
    <input type="text" name="userName" value="" ><br/><br/>

    <label for="name">Last Name</label><br/>
    <input type="text" name="lastName" value="" ><br/><br/>

    <label for="firstName">First Name</label><br/>
    <input type="text" name="firstName" value="" ><br/><br/>

    <label for="adress">Adress</label><br/>
    <input type="text" name="adress" value="" ><br/><br/>

    <label for="postCode">Code Postal</label><br/>
    <input type="text" name="postCode" value="" ><br/><br/>

    <label for="phone">Phone Number</label><br/>
    <input type="text" name="phone" value="" ><br/><br/>

    <label for="fax">Fax Number</label><br/>
    <input type="text" name="fax" value=""><br/><br/>

    <label for="email">Email</label><br/>
    <input type="email" name="email" value="" ><br/><br/>

    <label for="password">Password</label><br/>
    <input type="password" name="password" value="" ><br/><br/>

    <label for="passwordVerif">Re-enter Password</label><br/>
    <input type="password" name="passwordVerif" value="" ><br/><br/>

    <input type="submit" value="Sign Up">
</form>

<?php if (isset($error)){
    foreach ($error as $value){
        echo $value."</br>";
    }
} ?>

<?php $this->stop('main_content') ?>
