<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaario - Kirjautuminen</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="login-container">
        <div class="card" style="width: 100%; max-width: 420px;">
            <h2 style="text-align: center; margin-bottom: 25px; font-size: 2rem;">🔑 Inventaario</h2>
            <p style="text-align: center; color: #94a3b8; margin-bottom: 30px;">Laitteiden hallinta- ja lainausjärjestelmä</p>
            
            <?php if(isset($error)): ?>
                <p style="color: #f87171; text-align: center; margin-bottom: 15px;"><?= $error ?></p>
            <?php endif; ?>

            <form method="POST">
                <input type="text" name="username" placeholder="Käyttäjätunnus" required 
                       style="width: 100%; padding: 14px; margin-bottom: 15px; background: #334155; border: none; border-radius: 8px; color: white;">
                
                <input type="password" name="password" placeholder="Salasana" required 
                       style="width: 100%; padding: 14px; margin-bottom: 25px; background: #334155; border: none; border-radius: 8px; color: white;">
                
                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-size: 1.1rem;">
                    Kirjaudu sisään
                </button>
            </form>
        </div>
    </div>
</body>
</html>