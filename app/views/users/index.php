<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="form">
    <form action="<?= URLROOT; ?>/users/index" method="post">
        <label for="email">Email: <sup>*</sup></label>
        <input type="email" name="email" class="form-control form-control-lg <?= (!empty($data['login_email_err'])) ? 'invalid-input' : ''; ?>" value="<?= $data['login_email']; ?>">

        <label for="password">Password: <sup>*</sup></label>
        <input type="password" name="password" class="form-control form-control-lg <?= (!empty($data['login_password_err'])) ? 'invalid-input' : ''; ?>" value="<?= $data['login_password']; ?>">

        <button type="submit" name='login' class="btn btn-success btn-block">Login</button>
    </form>
</div>

<br>
<br>
<br>
<br>

<div class="register-form">
    <form action="<?= URLROOT; ?>/users/index" method="post">

        <label for="name">Name: <sup>*</sup></label>
        <input type="text" name="name" class="form-control form-control-lg <?= (!empty($data['name_err'])) ? 'invalid-input' : ''; ?>" value="<?= $data['name']; ?>">

        <label for="email">Email: <sup>*</sup></label>
        <input type="email" name="email" class="form-control form-control-lg <?= (!empty($data['email_err'])) ? 'invalid-input' : ''; ?>" value="<?= $data['email']; ?>">

        <label for="password">Password: <sup>*</sup></label>
        <input type="password" name="password" class="form-control form-control-lg <?= (!empty($data['password_err'])) ? 'invalid-input' : ''; ?>" value="<?= $data['password']; ?>">

        <button type="submit" name='register' class="btn btn-success btn-block">Register</button>
    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>