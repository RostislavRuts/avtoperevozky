<!DOCTYPE html>
<html lang="en"><!-- This is a demonstration of HTML5 goodness with healthy does of CSS3 mixed in --><head>
    
    <title>CSS3/HTML5 Contact Form by Freshdesignweb.com</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--[if IE]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="form_review/style.css" type="text/css" media="screen">
</head>
<body>
   <div  class="cover">
    		<h2 class="contact">Напишите Ваш отзыв)</h2>
    		<form id="contactform" action="/set-review" method="post"> 
                @csrf
    			<p class="contact"><label for="name">Имя</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@mail.com" required="" tabindex="2" type="text"> 
                
                <p class="contact">Вы остались довольны?</p> 
                <label class="checkbox">
                    <input type="checkbox" class="good" checked name="status" value="Положительный" />
                    <div class="checkbox__text">Да, спасибо</div>
                </label>
                <br>
                <label class="checkbox">
                    <input type="checkbox" class="badly" value="Негативный" />
                    <div class="checkbox__text">Нет</div>
                </label>
            
    			<p class="contact"><label for="comment">Ваши комментарии</label></p> 
    			<textarea name="comment" id="comment" tabindex="4" required=""></textarea> <br>
    			<input name="submit" id="submit" tabindex="5" value="Отправить" type="submit"> 	 
    		</form> 
     </div>       

     <script src="form_review/js/jquery-3.2.1.min.js"></script>
    <script src="form_review/js/main.js"></script>
</body></html>