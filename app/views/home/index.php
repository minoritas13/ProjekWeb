<div class="login-box">
    <h2>Login</h2>

    <?php if (isset($data['error'])): ?>
        <p class="error"><?= $data['error']; ?></p>
    <?php endif; ?>

    <form method="POST" action="<?= BASEURL; ?>/login">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Masuk</button>
    </form>
</div>

