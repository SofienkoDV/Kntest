<!DOCTYPE html>
<html lang="uk">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/media.css" />
		<link rel="icon" href="./img/favicon/1.png" type="image/png" />
		<title>ЦНТУ</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<div class="header__inner">
					<div class="header__logo">
						<a href="http://www.kntu.kr.ua/"
							><img src="img/Gerb.webp" alt="#"
						/></a>
						<a href="http://www.kntu.kr.ua/"
							><h1 class="header__title">
								Центральноукраїнський національний <br />
								технічний університет
							</h1></a
						>
					</div>
					<nav class="nav" id="nav">
						<a class="nav__link" href="http://www.kntu.kr.ua/?view=univer&id=1"
							>Університет</a
						>
						<a class="nav__link" href="http://www.kntu.kr.ua/?view=abitur&id=1"
							>Абітурієнту</a
						>
						<a class="nav__link" href="http://www.kntu.kr.ua/?view=fakult&id=1"
							>Факультети</a
						>
						<a class="nav__link" href="http://www.kntu.kr.ua/?view=science&id=1"
							>Наукова діяльність</a
						>
						<a
							class="nav__link"
							href="http://www.kntu.kr.ua/?view=science&id=19"
							>Аспіранту</a
						>
						<a class="nav__link" href="http://www.kntu.kr.ua/?view=stud&id=1"
							>Студенту</a
						>
						<a class="nav__link" href="http://moodle.kntu.kr.ua/"
							>Дист. навчання</a
						>
					</nav>

					<button class="burger" type="button" id="navToggle">
						<span class="burger__item">Menu</span>
					</button>
				</div>
			</div>
		</header>

		<div class="container__small">
			<div class="flex__row">
				<div class="flex__inner w--100">
					<div class="flex__cart">
						<h1 class="flex__title fz--color">Вибір спеціальності</h1>
						<div class="card__inner">
							<div class="card__item">
								<div class="price__card">
									<img
										class="img__card"
										src="img/specialtiesTwo/1.webp"
										alt="#"
									/>
									<p class="color__p lin__h">
										Вступ для здобуття ступеня БАКАЛАВРА
									</p>
									<a href="./abitur/1.php" class="custom-btn btn-3"
										><span>Дізнатись більше</span></a
									>
								</div>
							</div>

							<div class="card__item">
								<div class="price__card">
									<img
										class="img__card"
										src="img/specialtiesTwo/2.webp"
										alt="#"
									/>
									<p class="color__p">
										Вступ на основі ступеня бакалавра, магістра або
										освітньо-кваліфікаційного рівня спеціаліста для здобуття
										ступеня МАГІСТРА
									</p>

									<a href="./abitur/2.php" class="custom-btn btn-3"
										><span>Дізнатись більше</span></a
									>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="footer__inner">
					<div class="footer__block">
						<h4 class="footer__title">
							Приймальна комісія працює щодня, крім суботи та неділі.
						</h4>
						<div class="footer__tel">
							<div>
								Телефони приймальної комісії: (095) 078-59-00, (0522) 55-93-13
							</div>
							<div>
								Телефони центру довузівської підготовки: (095) 086-24-57 (0522)
								55-50-18
							</div>
						</div>
					</div>
					<div class="footer__block">
						<h4 class="footer__title">«ЦНТУ» в соцмережах:</h4>
						<a
							href="https://www.facebook.com/CNTU.kr.ua/?ref=bookmarks"
							target="_blank"
							><i class="fab fa-facebook"></i
						></a>
						<a href="https://twitter.com/CNTU1929" target="_blank"
							><i class="fab fa-twitter"></i
						></a>
						<a
							href="https://www.youtube.com/channel/UCOqbluXSF1GpiwkOOWkyydQ"
							target="_blank"
							><i class="fab fa-youtube"></i
						></a>
						<a href="https://www.instagram.com/cntu.kr.ua/" target="_blank"
							><i class="fab fa-instagram"></i
						></a>
					</div>
					<div class="footer__block">
						<h4 class="footer__title">© 2022 «ЦНТУ» Всі права захищено.</h4>
						<div class="footer__text">
							<p>
								Використання матеріалів цього сайту можливе тільки з посиланням
								на джерело.
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/app.js"></script>
		<script
			src="https://kit.fontawesome.com/021c6d66dc.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
