<!DOCTYPE html>
<HTML lang="ko">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lizzie">
    <meta name="description" content="laravel login test">
    <meta name="keywords" content="admin,login">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <!-- css -->
    <link rel="stylesheet" href="css/app.css">
    <!-- ajax 라이브러리 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
</head>
<body>
<div class="formwrap">
    <div class="container">
        <!-- header -->
        <header class="row header">
            <div class="text">
                <h1><strong>Hangry</strong></h1>
            </div>
        </header>
        <!--  header /-->    
        <!-- form -->
        <section class="row">
            <div class="form_box">
                <!-- form header -->
                <header class="form_top">
                    <div class="form_title">
                        <h2>Member Login</h2>
                        <p>Enter your username and password to log on</p>
                    </div>
                    <div class="form_icon">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>
                </header>
                <!-- form header /-->
                <section class="form_con">
                    <!-- login form -->
                    <form role="form" name="myForm" method="post" class="login_form">
                     {{ csrf_field() }}
                        <!-- username -->
                        <div class="form-group">
                            <label class="sr-only" for="username">User name</label>
                            <input type="text" name="username" placeholder="User name" class="form-control" id="username" v-model="username">
                        </div>
                        <!-- username /-->
                        <!-- password -->
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password" v-model="password">
                        </div>
                        <!-- password /-->
                        <!-- button -->
                        <button type="submit" class="btn" @click="login">Login</button>
                        <!-- button /-->
                        <!-- checkbox -->
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <!-- checkbox /-->
                    </form>
                    <!-- login form /-->
                </section>
                <!-- login footer -->
                <div class="form_footer">
                    <div class="row">               
                        <a id="">
                            <span class="glyphicon glyphicon-lock"></span> Forgot password?
                        </a>             
                    </div>
                </div>
                <!-- login footer /-->
            </div>
        </section>
            <!-- form /-->
    </div>
</div>    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
<script src={{url('js/login.js')}}></script>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
</html>