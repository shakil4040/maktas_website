<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Website For Essential Education</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Amiri Quran' rel='stylesheet'>
    <!-- ================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
    <link rel="stylesheet" media="all" href="/assets/css/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
     $(document).ready(function(){        
     $('#exampleModal').modal('show');
    }); 
    </script>
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

    <div id="app">
        @yield('content')
    </div>
                                          <!-- Modal -->
                                          <div style='font-family: "Noto Nastaliq Urdu", serif;line-height: 56px;font-size: 18px;' class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                             <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" style="z-index: 99;margin: -35px 10px;" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      <!-- </div>  -->
                                                            <div class="modal-body"
                                                                style="line-height: 90px;text-align: center;font-size:30px;color:white;background:#13654e;">
                                                                تحقیق و ترتیب کا کام ابھی جاری ہے <br>
                                                                لہٰذا کسی چیز کو حتمی نہ سمجھا جائے
                                                            </div>
                                                            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بند کریں</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
                                                        </div>
                                                    </div>
                                                </div>


    <footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">PASARI HOUSE, <br>21-A (East) Block-L,<br> Gulberg III, Lahore-Pakistan</a></li>
						<li class="mail"><a href="#">contact@wee.com.co</a></li>
						<li class="phone last"><a href="#">+92-42-5850374</a></li>
					</ul>
				</article>
				<article class="col-2">
					<h3>Important Links</h3>
					<ul>
						<li><a href="/tree">List of Topics</a></li>
						<li><a href="/comparison">Courses Comparison</a></li>
					</ul>
				</article>
				<!-- <article class="col-3">
					<h3>Social media</h3>
					<p>Temporibus autem quibusdam et aut debitis aut rerum necessitatibus saepe.</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
				<article class="col-4">
					<h3>Newsletter</h3>
					<p>Assumenda est omnis dolor repellendus temporibus autem quibusdam.</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul>
				</article> -->
			</section>
			<!-- <p class="copy">Copyright 2014 Harrison High School. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank">Vandelay Design</a>. All rights reserved.</p> -->
		</div>
	</footer>
    <!-- / footer -->

    <div id="fancy">
        <h2>Request information</h2>
        <form action="#">
            <div class="left">
                <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
                <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
                <fieldset class="subject"><select>
                        <option>Choose subject...</option>
                        <option>Choose subject...</option>
                        <option>Choose subject...</option>
                    </select></fieldset>
            </div>
            <div class="right">
                <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
            </div>
            <div class="btn-holder">
                <button class="btn blue" type="submit">Send request</button>
            </div>
        </form>
    </div>
    <div class="student" id="student">
        <h2>Your information</h2>
        <form action="javascript:">
            <div class="left">
                <fieldset class="mail"><input required placeholder="Email address..." type="text"></fieldset>
                <fieldset class="name"><input required placeholder="Name..." type="text"></fieldset>
                <fieldset class="subject">
					<select required>
                        <option value="">Gender...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
				</fieldset>
                <fieldset class="name"><input required placeholder="Age..." type="number" min="0"></fieldset>
            </div>
            <div class="right">
                <!-- <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset> -->
                <fieldset class="name"><input required placeholder="Country..." type="text"></fieldset>
                <fieldset class="name"><input required placeholder="City..." type="text"></fieldset>
                <fieldset class="subject">
                    <select required>
                        <option value="">Category...</option>
                        <option>Student</option>
                        <option>Concerned Parent</option>
                        <option>Teacher</option>
                        <option>Principal</option>
                        <option>Educationist</option>
                        <option>Publisher</option>
                        <option>None of these</option>
                    </select>
                </fieldset>
                <fieldset class="subject">
                    <select required>
                        <option value="">Occupation...</option>
                        <option>Doctor</option>
                        <option>Engineer</option>
                        <option>Lawyer</option>
                        <option>Other</option>
                    </select>
                </fieldset>
            </div>
            <div class="btn-holder">
                <button class="btn blue" id="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")

    </script>
    <script>
        $(document).ready(function(){
            $('#enroll').hide();
            $('#student').submit(function(){
                $('#enroll').show();
                $('.fancybox-overlay').hide();
                $('body').removeClass('fancybox-lock')
            })
        })
    </script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
  function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
</body>

</html>
