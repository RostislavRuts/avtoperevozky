@extends('layouts.mainpage')
{{-- summernote --}}
@section('content')
<!--               ***mainScreen***               -->
		<section id = "mainScreen" data-parallax = "scroll" data-image-src="images/backgrounds/mainBG.jpg">
			<div class = "wrapper">
				<h1 class = "h1">Грузоперевозки по Запорожью и Украине</h1>
				<p class = "mainScreen--p">Доставим любой груз от 50 кг до 10 тонн<br>Попутные перевозки (оплата в одну сторону)<br> Экспедирование грузов<br>Предоставим грузчиков</p>
				<a class = "link button" href = "#off">Наши услуги</a>
			</div>
		</section>

		<!--               ***info***               -->
		<section id = "info" class = "section">
			<div class = "wrapper">
				<h2 class = "h2 info__h2">ВЫ ПОЛУЧАЕТЕ ПОЛНЫЙ КОМПЛЕКС УСЛУГ</h2>
				<div class = "info__piece">
					<img class = "info__piece__img" src = "images/content/info1.png" alt = "попутные грузы" />
					<p class = "p info__piece__p">Попутные грузы<br>(догруз)</p>
					<a class = "link button little-button info-button overlaySwitch1">Заказать</a>
				</div>
				<div class = "info__piece">
					<img class = "info__piece__img" src = "images/content/info3.png" alt = "экспедирование грузов" />
					<p class = "p info__piece__p">Экспедирование<br>грузов</p>
					<a class = "link button little-button info-button overlaySwitch1">Заказать</a>
				</div>
				<div class = "info__piece">
					<img class = "info__piece__img" src = "images/content/info4.png" alt = "дом" />
					<p class = "p info__piece__p">Квартирный и дачный<br>переезд</p>
					<a class = "link button little-button info-button overlaySwitch2">Заказать</a>
				</div>
				<div class = "info__piece">
					<img class = "info__piece__img" src = "images/content/office3.jpg" alt = "офисное здание" />
					<p class = "p info__piece__p">Офисный и банковский<br>переезд</p>
					<a class = "link button little-button info-button overlaySwitch2">Заказать</a>
				</div>
				<div class = "info__piece">
					<img class = "info__piece__img" src = "images/content/info6.png" alt = "грузовик" />
					<p class = "p info__piece__p">Доставка сборных<br>грузов</p>
					<a class = "link button little-button info-button overlaySwitch2">Заказать</a>
				</div>
				<div class = "info__piece">
					<img class = "info__piece__img" src = "images/content/info2.png" alt = "грузчик" />
					<p class = "p info__piece__p">Услуги профессиональных<br>грузчиков</p>
					<a class = "link button little-button info-button overlaySwitch2">Заказать</a>
				</div>
			</div>
		</section>

		<!--               ***about***               -->
		<section id = "about" data-parallax = "scroll" data-image-src="images/backgrounds/aboutBG.jpg">
			<div class = "wrapper">
				<h2 class = "h2">О НАС</h2>
				<p>Более 15 лет наша транспортная компания работает на рынке грузовых перевозок в Украине. Мы предоставляем услуги автомобильных перевозок грузов  по всей Украине. Выполняем попутную доставку грузов как своим, так и привлечённым транспортом.
				</p>
				<p>Все специалисты нашей компании - профессионалы с колоссальным опытом работы, которые не только доставят Ваш груз в нужную точку назначения, но и составят оптимальный маршрут перевозки, оформят все необходимые документы, проконтролируют сроки доставки и сохранность груза.
				</p>
				<p>Мы заботимся об интересах и комфорте КАЖДОГО клиента и являемся надёжным партнёром в сфере грузоперевозок.
				</p>			
			</div>
		</section>

		<!--               ***cars***               -->
		<section id = "cars" class = "section">
			<div class = "wrapper">
				<h2 class = "h2">НАШ АВТОПАРК</h2>
				<table class="auto__table">
					<tbody><tr>
						<td></td>
						<td><img src="images/cars/car-gazel.png" alt="Изображение автомобиля"></td>
						<td><img src="images/cars/gazel2.png" alt="Изображение автомобиля"></td>
						<td><img src="images/cars/car-mercedez.png" alt="Изображение автомобиля"></td>
						<td><img src="images/cars/car-mercedez2.png" alt="Изображение автомобиля"></td>
						</tr>																	
						<tr>
						<td></td>
						<td><img src="images/cars/car-gazel-logo.png" alt="Изображение автомобиля"></td>
						<td><img src="images/cars/car-gazel-logo.png" alt="Изображение автомобиля"></td>
						<td><img src="images/cars/car-mercedez-logo.png" alt="Изображение автомобиля"></td>
						<td><img src="images/cars/car-mercedez-logo.png" alt="Изображение автомобиля"></td>
						</tr>					        
						<tr>
						<td class="auto__table-heading">Грузоподъемность:</td>
						<td class="auto__table-value">До 2 тонн</td>
						<td class="auto__table-value">До 2 тонн</td>
						<td class="auto__table-value">До 5 тонн</td>
						<td class="auto__table-value">До 7 тонн</td>
						</tr>
						<tr>
						<td class="auto__table-heading">Объем:</td>
						<td class="auto__table-value">До 16 м куб.</td>
						<td class="auto__table-value">До 18 м куб.</td>
						<td class="auto__table-value">До 36 м куб.</td>
						<td class="auto__table-value">До 50 м куб.</td>
						</tr>
						<tr>
						<td class="auto__table-heading">Гидроборт:</td>
						<td><span class="auto__status auto__status_no">Нет</span></td>
						<td><span class="auto__status auto__status_no">Нет</span></td>
						<td><span class="auto__status auto__status_yes">Да</span></td>
						<td><span class="auto__status auto__status_yes">Нет</span></td>
						</tr>
					</tbody>
				</table>
				<a class = "link button black-button overlaySwitch2" href = "#contact">Заказать машину</a>
			</div>
		</section>
		
		<!--               ***info***               -->
		<section id = "info2" class = "section section-bg-transparent" data-parallax = "scroll" data-image-src="images/backgrounds/advantagesBG.jpg">
			<div class = "wrapper">
				<h2 class = "h2">ЛУЧШИЕ УСЛОВИЯ ТОЛЬКО ДЛЯ ВАС</h2>
				<div class = "info2-piece">
					<img class = "info__piece__img" src = "images/content/info21.png" alt = "грузовик" />
					<p class = "p info__piece__p">Подача машины уже через 1 час после заказа</p>
				</div>
				<div class = "info2-piece">
					<img class = "info__piece__img" src = "images/content/info22.png" alt = "кредитные карты" />
					<p class = "p info__piece__p">Самые выгодные тарифы для наших клиентов. Никаких дополнителтьных платежей</p>
				</div>
				<div class = "info2-piece">
					<img class = "info__piece__img" src = "images/content/info2.png" alt = "грузчик" />
					<p class = "p info__piece__p">Порядочные и аккуратные грузчики</p>
				</div>
				<div class = "info2-piece">
					<img class = "info__piece__img" src = "images/content/info24.png" alt = "коробка" />
					<p class = "p info__piece__p">Мы умеем качественно упаковывать вещи</p>
				</div>
				<div class = "info2-piece">
					<img class = "info__piece__img" src = "images/content/lorry.png" alt = "машина" />
					<p class = "p info__piece__p">Свой автопарк</p>
				</div>
				<div class = "info2-piece">
					<img class = "info__piece__img" src = "images/content/driver.png" alt = "водитель" />
					<p class = "p info__piece__p">Опытные водители</p>
				</div>
				<div class = "info2-piece">
					<img class = "info__piece__img" src = "images/content/card.png" alt = "банковские карты" />
					<p class = "p info__piece__p">Наличный и безналичный расчет. Документы в срок! Бухгалтерия без проблем!</p>
				</div>
			</div>
		</section>

		<!--               ***work***               -->

		<section id = "work" class = "section">
			<div class="wrapper work-bottomMargin">
				<h2 class="h2">КАК МЫ РАБОТАЕМ</h2>
				<div class="work-piece">
					<img class="work-piece-img" src="images/work/work1.png" alt="телефон">
					<p class="work-piece-num">1 ШАГ</p>
					<p class="work-piece-name">Заявка</p>
					<p class="p work-piece-text">Вы нам звоните или заказываете обратный звонок</p>
				</div>
				<div class="work-piece">
					<img class="work-piece-img" src="images/work/work2.png" alt="документ">
					<p class="work-piece-num">2 ШАГ</p>
					<p class="work-piece-name">Оформление</p>
					<p class="p work-piece-text">Менеджер консультирует вас и принимает заявку</p>
				</div>
				<div class="work-piece">
					<img class="work-piece-img" src="images/content/info6.png" alt="машина">
					<p class="work-piece-num">3 ШАГ</p>
					<p class="work-piece-name">Подача машины</p>
					<p class="p work-piece-text">В указанное вами время подъезжает автомобиль и специалисты по огранизации вашего перееезда</p>
				</div>
				<div class="work-piece">
					<img class="work-piece-img" src="images/work/work4.png" alt="погрузчик">
					<p class="work-piece-num">4 ШАГ</p>
					<p class="work-piece-name">Начало работ</p>
					<p class="p work-piece-text">Специалисты разбирают, упаковывают и укладывают в автомобиль ваше имущество и доставляют на указанный вами адрес</p>
				</div>
				<div class="work-piece">
					<img class="work-piece-img" src="images/work/work5.png" alt="галочка">
					<p class="work-piece-num">5 ШАГ</p>
					<p class="work-piece-name">Завершение</p>
					<p class="p work-piece-text">После проверки качества перевозки и целостности груза вы оплачиваете наши услуги</p>
				</div>
			</div>
			<a class="link button black-button overlaySwitch2" href="#work">СВЯЗАТЬСЯ С НАМИ</a>
		</section>
		
		<!--               ***offers***               -->
		<section id = "off" class = "section section-bg-transparent" data-parallax = "scroll" data-image-src="images/backgrounds/testimonialsBG.jpg">
			<h2>УСЛУГИ</h2>
			<p class="underHeaderText text-center">Наша транспортная компания предоставляет полный комплекс услуг по перевозке имущества и грузов.</p>

			<div class="row justify-content-md-center mb-4">
				<div class="col-md-5">
					<div><p> <img src="images/icons/zgalka.png" alt="">Грузовые перевозки по Украине</p></div>
					<p> <img src="images/icons/zgalka.png" alt="">Переезд квартиры в Запорожье</p>
					<p> <img src="images/icons/zgalka.png" alt="">Офисный переезд в Запорожье</p>
					<p> <img src="images/icons/zgalka.png" alt="">Перевозка телевизора, личных вещей</p>
					<p> <img src="images/icons/zgalka.png" alt="">Сборка и разборка мебели</p>
					<p> <img src="images/icons/zgalka.png" alt="">Перевозка холодильника</p>
					<p> <img src="images/icons/zgalka.png" alt="">Перевозка мебели</p>
					<p> <img src="images/icons/zgalka.png" alt="">Дачный переезд</p>
				</div>

				<div class="col-md-5">
					<p> <img src="images/icons/zgalka.png" alt="">Перевозка торгового оборудования</p>
					<p> <img src="images/icons/zgalka.png" alt="">Перевозка стеклянных витрин</p>
					<p> <img src="images/icons/zgalka.png" alt="">Перевозка сейфов, банкоматов</p>
					<p> <img src="images/icons/zgalka.png" alt="">Перевозка рояля, пианино</p>
					<p> <img src="images/icons/zgalka.png" alt="">Доставка строительных материалов</p>
					<p> <img src="images/icons/zgalka.png" alt="">Упаковка и распаковка груза</p>
					<p> <img src="images/icons/zgalka.png" alt="">Прочие транспортные услуги</p>
					<p> <img src="images/icons/zgalka.png" alt="">Услуги грузчиков</p>	
				</div>
			</div>
		</section>

		<!--               ***testimonias***               -->
		<section id="review" class="section">
			<div class = "wrapper">
				<h2 class = "h2">ОТЗЫВЫ</h2>
				<div class="slider">
		          <div class="slider__slides js-slider-testimonials">
		          	@foreach($reviews as $review)
		            <div class="slider__slide">
		              <div class="testimonial">
		              	<div class="testimonial__photo"><img src="images/icons/user.png" alt="Фото"></div>
		                <h4 class="testimonial__author">{{$review->name}}</h4>
		                <p class="testimonial__text">{{$review->comment}}</p>
		              </div>
		            </div>
		            @endforeach
		          </div>
		          <div class="slider__nav">
		            <button type="button" class="slider__btn slider__btn_prev js-testimonials-prev">Назад</button>
		            <button type="button" class="slider__btn slider__btn_next js-testimonials-next">Вперед</button>
		          </div>
		        </div>
			</div>
				
			<a class = "link button black-button callback" href = "/review-form">НАПИСАТЬ ОТЗЫВ</a>

		</section>



		
		
		<div class="overlay js-overlay-campaign">
			<div class="popup js-popup-campaign">
				<h3 class = "h2">Обратный звонок</h3>
				<p>Напишите ваш номер и наш менеджер перезвонит вам в течении 5 минут.</p><br>
				<form name="MyForm"  id = "callbacks" action = "/callback" method = "post">
					@csrf
					<input name="name" type = "text" placeholder = "Ваше имя" /><br><br>
					<input name="phone" type = "text" placeholder = "Ваш телефон" /><br><br>
					<input id = "submit" type = "submit" name = "done"/>
				</form>
				<div id = "erconts">
				</div>
				<div class="close-popup js-close-campaign"></div>
			</div>
		</div>

		<div class="overlay2 js-overlay-campaign2">
			<div class="popup2 js-popup-campaign2">
				<h3 class = "overlayText">Заказать услугу можно по номеру</h3>
				<br>
				<p class = "overlayNum">+38 (066) 534-47-25</p>
				<p class = "overlayNum">+38 (097) 569-53-12</p>
				<div class="close-popup2 js-close-campaign2"></div>
			</div>
		</div>

		<div class="overlay3 js-overlay-campaign3">
			<div class="popup2 js-popup-campaign2">
				<h3 class = "overlayText">Заказать услугу можно по номеру</h3>
				<br>
				<p class = "overlayNum">+38 (095) 735-03-00</p>
				<p class = "overlayNum">+38 (097) 205-02-74</p>
				<p class = "overlayNum">+38 (063) 402-97-52</p>
				<div class="close-popup3 js-close-campaign3"></div>
			</div>
		</div>
@endsection
