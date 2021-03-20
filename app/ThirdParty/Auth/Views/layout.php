
    <style type="text/css">

    	main {
    	  padding: 30px;
    	  padding-top: 60px;
    	  box-sizing: border-box;
    	}

    	form {
    	  margin-bottom: 40px;
    	}

	    .auth-menu {
	      position: fixed;
	      left: 0;
	      top: 0;
	      z-index: 10001;
	      width: 100%;
    	  box-sizing: border-box;
	      line-height: 40px;
	      background-color: #444;
	      color: #fff;
	      font-size: 14px;
	      padding-left: 15px;
	      padding-right: 15px;
	    }

	    .auth-menu a {
	      color: #fff;
	      text-decoration: none;
	      font-weight: bold;
	    }

	    .notification {
	      padding: 10px;
    	  background-color: #eee;
    	  font-weight: bold;
    	  margin-bottom: 30px;
	    }
        html, body {
            height: 100%;
        }

    </style>
</head>
<body>

<?php
if (session('isLoggedIn')) {
	echo view('Auth\Views\_navbar');
}
?>

<main role="main" class="container">
	<?= $this->renderSection('main') ?>
</main>

</body>
</html>