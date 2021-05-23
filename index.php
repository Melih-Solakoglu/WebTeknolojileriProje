<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <!--Google Yazı Font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,500&display=swap" rel="stylesheet">
        <!--Sosyal Medya-->
        <script src="https://kit.fontawesome.com/afa4fc3610.js" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Responsive -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
         <!-- Css -->
	    <link rel="stylesheet" href="style.css">
        
        <title>Web Teknoloji Projesi</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top bg-success navbar-white navbar-dark">
            <div class="container">
                <a href="" class="navbar-brand text white">
                    Giriş
                </a>
        </nav>
        <main>
        <div class="container">
        
            <br><br><br><br><br>
			<form action="giris.php" method="POST">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email 'g201210041@sakarya.edu.tr'"required="required">
				</div>

				<div class="form-group">
					<label for="password">Şifre</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre '123456'" required="required">
				</div>

				<button class="btn btn-success" type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>
        </main>
        <footer class="py-3 bg-success text-white text-center">
            <div id="social">
                <a href="https://github.com/Melih-Solakoglu/WebTeknolojileriProje" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.instagram.com/solakoglumelih/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com/melih_solakoglu" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <p>Copyright © 2021 by Melih SOLAKOĞLU</p>
        </footer>
        <!-- Bootstrap için gerekli-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>