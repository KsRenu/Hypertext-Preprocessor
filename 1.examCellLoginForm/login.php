<html>
    <head>
        <title>Login</title>
        
        <style>
            * {
            margin: 0px; 
            padding: 0px; 
            box-sizing: border-box;
        }
        
        
        body
        {
        background-color: #ec907c;
        background-image:url(https://media.istockphoto.com/photos/setting-the-page-on-fire-with-some-hard-work-picture-id868177762?k=20&m=868177762&s=612x612&w=0&h=IUwqQCBtPj3OnO-Y2muPGJonsiUNETXhjpb9bNlkhB8=);
        background-repeat:no-repeat;
        background-size: cover;
        height:100%;
        width:100%;
        
        }
        
        .header{
        background-color:#FF5733 ;
        height:10%;
        
        
        }
        
        
        
        .login1
        {
        
        margin-top:15%;
        margin-left:35%;
        
        }
        
        .text
        {
        color:white;
        font-size:30px;
        font-family: Tahoma, "Trebuchet MS", sans-serif;
        text-align: center;
        
        }
        
        #login
        {
        margin-top:5%;
        margin-left:13%;
        color:#e23415;
        font-size:30px;
        font-family: Tahoma, "Trebuchet MS", sans-serif;
        
        }
        
        
        input
        {
        font-family:Ubuntu-Bold;
        width:37%;
        outline:none;
        border:none;
        color:#e23415;
        font-size: 18px;
        display:block;
        background-color: #e6e6e6;
        height:62px;
        padding: 0 10px 0 30px;
        opacity:0.8;
        
        }
        
        .button
        {
        width:37%;
        height:10%;
        text-align:center;
        padding:0 10px 0 10px;
        background-color:#e23415;
        opacity:1.0;
        color:white;
        font-size:15px;
        font-family: Tahoma, "Trebuchet MS", sans-serif;
        cursor:pointer;
        }
        
        .button:hover
        {
        background-color:#af561b;
        }
        
        </style>
        </head>

    </head>
    <body>
        
        <div id="backgroundImage">
        </div>
        
        <div class = "header" height="20%" width="20%">
        
        <p class="text">EXAM CELL AUTOMATION</p>
        </div>
        <div class = "login1">
            <div>
         <p id = "login"><b>Login</b></p><br>

        <form action='connect.php' method="POST" >
            <form name="myform" method="POST">
                <div class="input">
                <input type = "text" name="email" id="name" placeholder="Email" required>
                <br><br>
                <input type = "password" name="password" id="password" placeholder="Password" required>
                <br><br>
               
               <!----<input type="submit" value="LOGIN" class=button>-->
               <button type="submit" name = "submit" id= "submit" class="button">LOGIN</button>
                </div>
               </form>
               </div>
              </div>
              
              </div>
        </form>
        <br><br><br><br><br><br>
    </body>
    </html>