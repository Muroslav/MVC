<div id="style" >
    
    
    <h2>Регістрація</h2>
    <form action="/" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логін:<br></label>
    <input name="login" type="text" size="15" maxlength="10" required/>
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="10" required/>
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
   <button name="addautholog">Зареєструватися</button>
   <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
 
   <!-- <h2>Новий користувач</h2>
    
    <form action="/mvc/" method="post">
        
        <input type="hidden" name="id"  >
        <p>Ім’я(max 10 sumbols):
            <input name="title" placeholder="Назва"	type="text"  maxlength="10" required/>
        </p>
        <p>Пароль(max 10 sumbols):
            <input name="pass" placeholder="Назва"	type="password"  maxlength="10" required/>
       
           </p>
        <p>Email:
           <input name="email" placeholder="Назва"	type="text"  maxlength="10" required/>
         </p>	
        <button name="addautholog">Додати</button>
        <button name="addautholog">Ввійти як</button>
          <input type="reset" value="Очистити">
    </form>
    -->
</div>
